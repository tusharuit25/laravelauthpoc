<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;
use App\employee_verification;

class EmployeeVerificationController extends Controller
{
    //
    public function employee_verify($id)
    {
        return view('EmployeeVerification.employee_verify',['id' => $id,'userid' =>  Auth::id()]);
    }

    /*public function employee_export($id)
    {
        return view('EmployeeVerification.employee_export',['id' => $id,'userid' =>  Auth::id()]);
    }*/

    public function post_verify(Request $request)
    {
        $data = $request->all();

        $member_id_is_verified = 0;
        if ($request->has('member_id_is_verified')) {
          $member_id_is_verified = 1;
        }
        $first_name_is_verified = 0;
        if ($request->has('first_name_is_verified')) {
          $first_name_is_verified = 1;
        }
        $last_name_is_verified = 0;
        if ($request->has('last_name_is_verified')) {
          $last_name_is_verified = 1;
        }
        $relative_name_is_verified = 0;
        if ($request->has('relative_name_is_verified')) {
          $relative_name_is_verified = 1;
        }
        $dob_is_verified = 0;
        if ($request->has('dob_is_verified')) {
          $dob_is_verified = 1;
        }
        $id_type_is_verified = 0;
        if ($request->has('id_type_is_verified')) {
          $id_type_is_verified = 1;
        }
        $id_number_is_verified = 0;
        if ($request->has('id_number_is_verified')) {
          $id_number_is_verified = 1;
        }
        $id_image_link_is_verified = 0;
        if ($request->has('id_image_link_is_verified')) {
          $id_image_link_is_verified = 1;
        }
        $member_photo_link_is_verified = 0;
        if ($request->has('member_photo_link_is_verified')) {
          $member_photo_link_is_verified = 1;
        }
         


        employee_verification::create([
            'member_id_is_verified' => $member_id_is_verified,
            'first_name_is_verified' => $first_name_is_verified,
            'last_name_is_verified' => $last_name_is_verified,
            'relative_name_is_verified' => $relative_name_is_verified,
            'dob_is_verified' => $dob_is_verified,
            'id_type_is_verified' => $id_type_is_verified,
            'id_number_is_verified' => $id_number_is_verified,
            'id_image_link_is_verified' => $id_image_link_is_verified,
            'member_photo_link_is_verified' => $member_photo_link_is_verified,
            'employee_record_id' => $data['employee_record_id'],
            'verified_by_user_id' => $data['verified_by_user_id']
        ]);

        return Redirect::to("userdashboard")->withSuccess('Completed!!!');
    }
}