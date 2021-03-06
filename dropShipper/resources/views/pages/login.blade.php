<!DOCTYPE html>
<html>

<head>
    <title>Dropship | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{url('backend/img/logo1.ico')}}" />
    <!--Global styles -->
    <link rel="stylesheet" href="{{url('backend/css/components.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/custom.css')}}" />
 
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{url('backend/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/wow/css/animate.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/pages/login1.css')}}" />
    <!--End of Plugin styles-->

</head>

<body>
    <!-- animation landing -->
    <div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
        <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
            <img src="{{url('backend/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
        </div>
    </div>
    <!-- untuk warna secondary landing page setengah -->
    <div class="border-login">

    </div>
<!-- untuk halaman login -->
    <div style="margin-top: -30%;" class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
                <div class="row">
                    <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-center">
                            <a href="index.html"> <img src="{{url('backend/img/logow2.png')}}" alt="josh logo"
                                        class="admire_logo"></a><span class="text-white"> <br>
                                    Log In</span>
                            </h3>
                        </div>
                        <div class="bg-white login_content login_border_radius">
                            <form action="index.html" id="login_validator" method="post" class="login_validator">
                                <div class="form-group">
                                    <label for="email" class="col-form-label"> E-mail</label>
                                    <div class="input-group input-group-prepend">
                                        <span class="input-group-text border-right-0 rounded-left input_email"><i
                                                class="fa fa-envelope text-primary"></i></span>
                                        <input type="text" class="form-control  form-control-md" id="email"
                                            name="username" placeholder="E-mail">
                                    </div>
                                </div>
                                <!--</h3>-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password</label>
                                    <div class="input-group input-group-prepend">
                                        <span class="input-group-text border-right-0 rounded-left addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md" id="password"
                                            name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="index.html"> <input type="submit" value="Log In"
                                                    class="btn btn-primary btn-block login_button"> </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input form-control">
                                            <span class="custom-control-label"></span>
                                            <a class="custom-control-description">Keep me logged in</a>
                                        </label>
                                    </div>
                                    <div class="col-6 text-right forgot_pwd">
                                        <a href="forgot_password1.html"
                                            class="custom-control-description forgottxt_clr">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm m-t-10">
                                        <div class="icon-white btn-facebook icon_padding loginpage_border">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span class="text-white icon_padding text-center question_mark">Log In With
                                                Facebook</span>
                                        </div>
                                    </div>
                                    <div class="col-sm m-t-10">
                                        <a href="profil.html">
                                            <div class="icon-white btn-google icon_padding loginpage_border">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                <span class="text-white icon_padding question_mark">Log In With
                                                    Google+</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Don't you have an Account? </label>
                                <a href='register.html' class="text-primary"><b>Sign Up</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{url('backend/js/jquery.min.js')}}"></script>
    <script src="{{url('backend/js/popper.min.js')}}"></script>
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script src="{{url('backend/vendors/wow/js/wow.min.js')}}"></script>
    <script src="{{url('backend/js/pages/login1.js')}}"></script>


</body>

</html>