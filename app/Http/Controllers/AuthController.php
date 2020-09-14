<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Employee;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
    public function register()
    {
        return view('register');
    }
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // get user type
         
            $user = Auth::user();
            
            if($user['is_super_admin']==1)
            {
              return redirect()->intended('dashboard');
            }
            else{
              return redirect()->intended('userdashboard');
            }
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function postRegister(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);

        $is_super_admin = 0;

        if ($request->has('is_super_admin')) {
          $is_super_admin = 1;
        }
         
        $data = $request->all();
 
        $check = $this->create($data,$is_super_admin);
       
        if($is_super_admin == 1)
        {
          return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
        }
        else{
          return Redirect::to("userdashboard")->withSuccess('Great! You have Successfully loggedin');
        }
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function userdashboard()
    {
 
      if(Auth::check()){
        
        $userId = Auth::id();
        
        $matchThese = ['allotted_to_admin_user_id' =>  $userId ];

        $employee = Employee::where($matchThese)->latest()->paginate(10);

        return view('userdashboard',compact('employee'))
                 ->with('i',(request()->input('page',1) -1 ) * 10);


      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data,$is_super_admin)
    {
     
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'is_super_admin'=> $is_super_admin
        
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
 
}
?>