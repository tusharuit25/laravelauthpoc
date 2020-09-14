<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard </title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Dashboard </a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                     
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Dashboard</li>
                        </ol>
                        <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>relative name</th>
                                    <th>dob</th>
                                    <th>id type</th>
                                    <th>id number</th>
                                    <th>id image link</th>
                                    <th>member photo link</th>
                                    <th width="280px">Action</th>
                                    <th width="280px">Export</th>
                                </tr>
                                @foreach ($employee as $emp)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $emp->first_name }}</td>
                                    <td>{{ $emp->last_name }}</td>
                                    <td>{{ $emp->relative_name }}</td>
                                    <td>{{ $emp->dob }}</td>
                                    <td>{{ $emp->id_type }}</td>
                                    <td>{{ $emp->id_number }}</td>
                                    <td>{{ $emp->id_image_link }}</td>
                                    <td>{{ $emp->member_photo_link }}</td>
                                    <td> 
                                    <a class="btn btn-info" href="{{ route('employee_verify', $emp->id) }}"> Verify Record</a>
                                    </td>
                                    <td> 
                                    <a class="btn btn-info" href="{{ route('export', $emp->id) }}"> Export Record</a>
                                   
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        </div>
                        <div class="row">
                             
                        </div>
					</div>	
                </main>
                 
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/demo/datatables-demo.js')}}"></script>
    </body>
</html>