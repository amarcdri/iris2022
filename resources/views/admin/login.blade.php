<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | CDRI COP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="CDRI" name="description" />
        <meta content="CDRI" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon-16x16.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="{{ route('admin.login')}}" class="auth-logo">
                                    <img src="{{ asset('admin/assets/images/cdri-logo.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('admin/assets/images/cdri-logo.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" action="{{route('admin.loginverify')}}">
                                    @csrf
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" name="email" required="" placeholder="Email">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password"  required="" placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="auth-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{ asset('admin/assets/js/app.js')}}"></script>

    </body>
</html>
