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
            <a class="navbar-brand" href="#">Administration</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
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
                        <h1 class="mt-4"> Verification</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <div class="col-12">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-start font-weight-light my-4">Verify record for employee record no: {{$id}} {{$userid}}</h3></div>
                                    <div class="card-body">  
                                            <form action="{{url('post-verify')}}" method="POST" id="verifyForm">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="member_id_is_verified" type="checkbox" name="member_id_is_verified"/>
                                                <label class="custom-control-label" for="member_id_is_verified">Is Member id verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="first_name_is_verified" type="checkbox" name="first_name_is_verified"/>
                                                <label class="custom-control-label" for="first_name_is_verified">Is First name verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="last_name_is_verified" type="checkbox" name="last_name_is_verified"/>
                                                <label class="custom-control-label" for="last_name_is_verified">Is Last name verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="relative_name_is_verified" type="checkbox" name="relative_name_is_verified"/>
                                                <label class="custom-control-label" for="relative_name_is_verified">Is Relative name verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="dob_is_verified" type="checkbox" name="dob_is_verified"/>
                                                <label class="custom-control-label" for="dob_is_verified">Is Dob verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="id_type_is_verified" type="checkbox" name="id_type_is_verified"/>
                                                <label class="custom-control-label" for="id_type_is_verified">Is Id type verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="id_number_is_verified" type="checkbox" name="id_number_is_verified"/>
                                                <label class="custom-control-label" for="id_number_is_verified">Is Id number verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="id_image_link_is_verified" type="checkbox" name="id_image_link_is_verified"  />
                                                <label class="custom-control-label" for="id_image_link_is_verified">Is Id image link verified?</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="member_photo_link_is_verified" type="checkbox" name="member_photo_link_is_verified"/>
                                                <label class="custom-control-label" for="member_photo_link_is_verified">Is Member photo link verified? </label>
                                                </div>
                                            </div>
                                            <input type="hidden" value="{{$id}}" name="employee_record_id">
                                            <input type="hidden" value="{{$userid}}" name="verified_by_user_id">

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                        </div>
                        </div>
					</div>	
                </main>
                 
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>