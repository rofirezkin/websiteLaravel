
<!DOCTYPE html>
<html>
<head>
    <title>Toko Saya | Register Toko</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- Global styles -->
    <link rel="stylesheet" href="{{url('backend/css/components.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{url('backend/vendors/datepicker/css/bootstrap-datepicker.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/wow/css/animate.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/pages/wizards.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/pages/login1.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/ionicons/css/ionicons.min.css')}}" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--End of Page level styles-->
</head>
<body>
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
<!-- for backgorund gray on middle page -->
<div class="border-login">

</div>
<!-- end background -->
<!-- register toko -->
<div style="margin-top: -30%;"  class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row login_top_bottom">
        <div class="col-12 mx-auto">
            <div class="row">
                <div class="col-lg-5 col-sm-12  col-md-8 mx-auto">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                        <a href="halaman.html"> <img src="{{url('backend/img/logow2.png')}}" alt="josh logo" class="admire_logo"></a> <span class="text-white"> <br/>
                                Silahkan Daftarkan Toko Anda</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <div class="card-body m-t-20">
                            <div id="rootwizard_no_val">
                                <ul class="nav nav-pills">
                                    <li class="nav-item user1 m-t-15">
                                        <a class="nav-link" href="#tab11" data-toggle="tab"><span
                                                class="userprofile_tab">1</span>Profil Toko</a>
                                    </li>
                                    <li class="nav-item user2 m-t-15">
                                        <a class="nav-link profile_details" href="#tab21"
                                           data-toggle="tab"><span class="profile_tab">2</span>Metode Pembayaran</a>
                                    </li>
                                    <li class="nav-item finish_tab m-t-15">
                                        <a class="nav-link " href="#tab31" data-toggle="tab"><span>3</span>Finish</a>
                                    </li>
                                </ul>
                                <div class="tab-content m-t-20">
                                    <div class="tab-pane" id="tab11">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="username" class="col-form-label">Nama Toko *</label>
                                                <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"> <i class="fa fa-user text-primary"></i>
                                                </span>
                                                    <input type="text" class="form-control" name="UserToko" id="username" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="email" class="col-form-label">Email *</label>
                                                <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                    <input type="text" placeholder="Email Address"  name="email" id="email" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="phone" class="col-form-label">No. Handphone *</label>
                                                <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left">
                                                    <i class="fa fa-phone text-primary"></i>
                                                </span>
                                                    <input type="text" id="phone" placeholder=" No. Handphone Anda" name="phone" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="username" class="col-form-label">Alamat Website Anda </label>
                                                <div class="input-group input-group-prepend">
                                                <span class="input-group-text border-right-0 rounded-left"> <i class="fa fa-user text-primary"></i>
                                                </span>
                                                    <input type="text" class="form-control" name="nameWebsite" id="namatoko" placeholder="Nama Toko Anda">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn1"><a>Previous</a></li>
                                            <li class="next next_btn1"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab21">
                                        <div class="form-group ">
                                        
                                            <div>
                                                <div class=" col-lg-12 pl-0">
                                                    <label for="harga"
                                                        class="col-form-label form-group-horizontal">
                                                        Bank Transfer
                                                    </label>
                                                    <div>
                                                        <select class="form-control hide_search"
                                                            tabindex="7">
                                                            <option selected disabled>Pilih Bank
                                                            </option>
                                                            <option>BRI</option>
                                                            <option>BNI</option>
                                                            <option>Mandiri</option>
                                                            <option>BJB</option>
                                                            <option>BCA</option>
    
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 pl-0">
                                                    <label for="harga"
                                                        class="col-form-label form-group-horizontal">
                                                        Nomor Rekening
                                                    </label>
                                                    <div class="input-group input-group-prepend">
                                                        <span
                                                            class="input-group-text border-right-0 rounded-left">
                                                            <i class="text-primary	fas fa-money-check"></i>
                                                        </span>
                                                        <input type="text" class="form-control" id="harga"
                                                            placeholder="No. Rekening">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
    
                                            <div class="col-lg-12 pl-0">
                                                <label for="harga"
                                                    class="col-form-label form-group-horizontal">
                                                    Fitur Moota
                                                </label>
                                                <div class="input-group input-group-prepend">
                                                    <span
                                                        class="input-group-text border-right-0 rounded-left">
                                                        <i class="text-primary	fas fa-money-check"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="harga"
                                                        placeholder="Nomor">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-12 pl-0">
                                                <label for="harga"
                                                    class="col-form-label form-group-horizontal">
                                                    OVO
                                                </label>
                                                <div class="input-group input-group-prepend">
                                                    <span
                                                        class="input-group-text border-right-0 rounded-left">
                                                        <i class="text-primary	fas fa-money-check"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="harga"
                                                        placeholder="Nomor">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-12 pl-0">
                                                <label for="harga"
                                                    class="col-form-label form-group-horizontal">
                                                    Gopay
                                                </label>
                                                <div class="input-group input-group-prepend">
                                                    <span
                                                        class="input-group-text border-right-0 rounded-left">
                                                        <i class="text-primary	fas fa-money-check"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="harga"
                                                        placeholder="Nomor">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-12 pl-0">
                                                <label for="harga"
                                                    class="col-form-label form-group-horizontal">
                                                    LinkAja
                                                </label>
                                                <div class="input-group input-group-prepend">
                                                    <span
                                                        class="input-group-text border-right-0 rounded-left">
                                                        <i class="text-primary	fas fa-money-check"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="harga"
                                                        placeholder="Nomor">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn2"><a>Previous</a></li>
                                            <li class="next next_btn2"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab31">
                                        <h5 class="mt-4">Kurir Pengiriman Toko Anda</h5>
                                        <hr>
                                        <div class="col row">
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        JNE Express</span></label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        J&T</span></label>
                                            </div>
                                        </div>
                                        <div class="col row">
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        AnterAja</span></label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        GoSend</span></label>
                                            </div>
                                        </div>
                                                  
                                        <h5 class="mt-4">Market Place</h5>
                                        <hr>
                                        <div class="col row">
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        Bukalapak</span></label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        Tokopedia</span></label>
                                            </div>
                                        </div>
                                        <div class="col row">
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        Shoope</span></label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label><input class="checkbox-inout"
                                                        type="checkbox" /><span>
                                                        Lazada</span></label>
                                            </div>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn3"><a>Previous</a></li>
                                            <li class="next"><a href="toko.html">Finish</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('backend/js/jquery.min.js')}}"></script>
<script src="{{url('backend/js/popper.min.js')}}"></script>
<script src="{{url('backend/js/bootstrap.min.js')}}"></script>

<script src="{{url('backend/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('backend/vendors/select2/js/select2.js')}}"></script>
<script src="{{url('backend/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script src="{{url('backend/vendors/wow/js/wow.min.js')}}"></script>

<script src="{{url('backend/js/pages/register.js')}}"></script>
<script src="{{url('backend/vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{url('backend/js/pages/wizard.js')}}"></script>

</body>

</html>