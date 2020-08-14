@section('title')
    Beli | Dropshipper
@endsection

<!doctype html>
<html class="no-js" lang="en">

</html>
{{--  --}}
<head>
    <meta charset="UTF-8">
    <title>Dropship | Pembelian</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('backend/img/logo1.ico')}}" />

    <!--global styles-->
    <link rel="stylesheet" href="{{url('backend/css/pages/general_components.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/pages/buttons.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/Buttons/css/buttons.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/components.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/custom.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/styles.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/cart.css')}}" />
    <link rel="stylesheet" href="{{url('backend/css/pages/new_dashboard.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/multiselect/css/multi-select.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/radio_css/css/radiobox.min.css')}}" />


    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('backend/vendors/modal/css/component.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" />
    <link rel="stylesheet" href="{{url('backend/vendors/animate/css/animate.min.css')}}" />

    <link rel="stylesheet" href="{{url('backend/css/pages/advanced_components.css')}}" />
    <link rel="stylesheet" href="#" id="skin_change" />


    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Noto+Serif&display=swap"
        rel="stylesheet">

    <!-- end of global styles-->



</head>


<body style="background-color: #EBEBEB;" class="fixed-menu">
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
    <!-- end animation -->

    <div id="wrap">
        <div class="container">
            <div>
                <!-- judul -->
                <div class="row justify-content-center">
                    <div style="border-radius: 0px 0px 80px 80px;" class="col-7 p-5 text-center bg-default">
                        <h1 style="color: white;">Pesanan Anda</h1>
                    </div>
                </div>
                <!-- akhir judul -->
            </div>

            <div style="min-height: 100px;">

            </div>




            <!-- sub judul -->
            <h2 class="text-judul">Produk Yang Anda Beli</h2>
        </div>

        <div style="width: 35%; padding: 0px; margin-left: 50%; " class=" navbar-expand-sm  sticky-top container ">
            <div>
                <!--rincian Harga  -->
                <div class="mt-5 pb-5 px-3 alamat">
                    <div class="row ">
                        <div class="col-12 py-3 ">
                            <h3 class="txt-noto"><b> Rincian Harga </b></h3>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h4>Gamis Syari - Rabbani Hits </h4>
                        <div class="row justify-content-between mx-2" style="border-bottom: 1px solid black;">
                            <div class="col-6" style="padding: 9px 0px;">
                                <h5>1 Item</h5>
                            </div>
                            <div class="col-6 text-right">
                                <h4 class="txt-noto"><b> Rp300.000</b></h4>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <h4>Gamis Syari - Rabbani Hits </h4>
                        <div class="row justify-content-between mx-2" style="border-bottom: 1px solid black;">
                            <div class="col-6" style="padding: 9px 0px;">
                                <h5>1 Item</h5>
                            </div>
                            <div class="col-6 text-right">
                                <h4 class="txt-noto"><b> Rp300.000</b></h4>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <h4>Gamis Syari - Rabbani Hits </h4>
                        <div class="row justify-content-between mx-2" style="border-bottom: 1px solid black;">
                            <div class="col-6" style="padding: 9px 0px;">
                                <h5>1 Item</h5>
                            </div>
                            <div class="col-6 text-right">
                                <h4 class="txt-noto"><b> Rp300.000</b></h4>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <h4>Kurir </h4>
                        <div class="row justify-content-between mx-2" style="border-bottom: 1px solid black;">
                            <div class="col-6" style="padding: 9px 0px;">
                                <h5>J&T REG</h5>
                            </div>
                            <div class="col-6 text-right">
                                <h4 class="btxt-noto"><b> Rp12.000 </b></h4>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-3">

                        <div class="row justify-content-between mx-2" style="border-bottom: 1px solid black;">
                            <div class="col-6" style="padding: 9px 0px;">
                                <h3><b> TOTAL HARGA</b></h3>
                            </div>
                            <div class="col-6 text-right" style="padding: 9px 0px;">
                                <h3><b> Rp912.000</b></h3>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-3">

                        <div class="row justify-content-between mx-2 bg-secondary" style="border-radius: 5px;">
                            <div class="col-6" style="padding: 20px 15px;">
                                <h3 class="txt-noto"><b> Pembayaran Via</b></h3>
                            </div>
                            <div class="col-6 text-right" style="padding: 20px 15px;">
                                <h3 class="txt-noto"><b>GoPay</b></h3>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                <a href="cart.html"> <button class="btn btn-gray  padding-but py-4">Kembali
                                    </button></a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                <a href="berhasil.html"> <button
                                        class="btn gray_bg_dark  glow_button padding-but py-4">Pembayaran
                                    </button> </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end rincian harga -->
            </div>
        </div>
        <div class="container" style="margin-top: -715px;">

            <div class="row">
                <!-- list untuk deskripsi pembelian final -->
                <div class="col-md-6">
                    <div class="row m-t-35">
                        <div class="col-lg">
                            <div class=" add-cart alert-dismissable">
                                <button style="color: red; font-size: 60px;" type="button" class="close "
                                    data-dismiss="" aria-hidden="true">×
                                </button>
                                <div class="row ">
                                    <div class="col-md-2">
                                        <img src="{{url('backend/img/aset/beli/gambar.png')}}" width="100%" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class=" col-md-12 ">
                                            <div>
                                                <h4>Gamis Syari - Rabbani Hits </h4>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-8">
                                                <h3 class="txt-noto"><b>Rp300.000</b> </h3>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=" mt-3 add-cart  alert-dismissable">
                                <button style="color: red; font-size: 60px;" type="button" class="close "
                                    data-dismiss="" aria-hidden="true">×
                                </button>
                                <div class="row ">
                                    <div class="col-md-2">
                                        <img src="{{url('backend/img/aset/beli/gambar.png')}}" width="100%" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class=" col-md-12 ">
                                            <div>
                                                <h4>Gamis Syari - Rabbani Hits </h4>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-8">
                                                <h3 class="txt-noto"><b>Rp300.000</b> </h3>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class=" mt-3 add-cart  alert-dismissable">
                                <button style="color: red; font-size: 60px;" type="button" class="close "
                                    data-dismiss="" aria-hidden="true">×
                                </button>
                                <div class="row ">
                                    <div class="col-md-2">
                                        <img src="{{url('backend/img/aset/beli/gambar.png')}}" width="100%" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class=" col-md-12 ">
                                            <div>
                                                <h4>Gamis Syari - Rabbani Hits </h4>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-8">
                                                <h3 class="txt-noto"><b>Rp300.000</b> </h3>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card m-t-35">
                        <div class="card-header bg-secondary text-white">
                            <div class="row justify-content-between bg-secondary">
                                <div class="col-6 p-3">
                                    <h3 class="txt-noto" style="color: white;">Kirim Kemana ?</h3>
                                </div>
                                <div class="col-4 pt-4 text-right">
                                    <h5 class="txt-noto" style="color: white;">Pilih Alamat lain</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pt-4">
                                <h3 class="txt-noto"><b> Fahira rizkiya</b></h3>
                                <h3 class="txt-noto"><b> 083890886564</b></h3>
                            </div>
                            <div class="py-5">
                                <h4 class="txt-noto">Kp. Rengat Girang RT 03 RW 03 Des. Karyasari Kec. Cikedal.
                                </h4>
                                <h5 class="pt-2 txt-noto">Pandeglang, Banten</h5>
                                <h5 class="pt-2 txt-noto">Indonesia</h5>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control py-3" id="email"
                                    placeholder="Catatan Untuk Pelapak" name="email">
                            </div>
                            <div class="mt-5">
                                <button class="btn btn-raised btn-info adv_cust_mod_btn" data-toggle="modal"
                                    data-target="#modal-10">
                                    <h4 class="text-white txt-noto">Edit Alamat</h4>
                                </button>


                            </div>
                        </div>
                    </div>
                    <!-- kurir -->
                    <div class="mt-5 ">
                        <div class="card m-t-35">
                            <div class="card-header bg-secondary text-white">
                                <div class="col-4 p-2">
                                    <h3 style="color: white;" class="txt-noto">Kurir</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-lg input_field_sections ">
                                    <select class="form-control hide_search" tabindex="7">
                                        <option selected disabled>Kurir Untuk Pengiriman paket anda</option>
                                        <option>
                                            <h3 class="txt-noto">J&T REG 3 Hari Kerja Rp14.000</h3>
                                        </option>
                                        <hr>
                                        <option>JNE Express 2 Hari Kerja Rp22.000</option>
                                        <option>anteraja 2 Hari Kerja Rp22.000</option>
                                        <option>GoSend 1 Hari Kerja Rp22.000</option>
                                    </select>
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- pembayaran -->
                    <div class="mt-5 ">

                        <div class="card m-t-35">
                            <div class="card-header bg-secondary text-white">
                                <h3 style="color: white;" class="txt-noto">Pembayaran Via</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-lg-12 pt-4">
                                            <label> <input class="radiobox-boom" type="radio" name="x" value="3" /><span
                                                    class="px-3 text-transfer">Bank Transfer </span> </label>
                                        </div>
                                        <div class="col-lg-12 pt-4">
                                            <label> <input class="radiobox-boom" type="radio" name="x" value="3" /><span
                                                    class="px-3 text-transfer">Kartu Kredit</span> </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="col-lg-12 pt-4">
                                            <label> <input class="radiobox-boom" type="radio" name="x" value="3" /><span
                                                    class="px-3 text-transfer">Fitur Moota </span> </label>
                                        </div>
                                        <div class="col-lg-12 pt-4">
                                            <label> <input class="radiobox-boom" type="radio" name="x" value="3" /><span
                                                    class="px-3 text-transfer">GoPay</span> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
            <!-- modal for edit alamat -->
            <div class="modal fade slideExpandUp" id="modal-10" role="dialog" aria-labelledby="Modallabel3dsign">
                <div class="modal-dialog" role="document">
                    <div class="modal-content ">
                        <div class="modal-header bg-secondary">
                            <h4 class="modal-title text-white" id="Modallabel3dsign">Edit Alamat</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="email" class="form-control py-3" id="email" placeholder="Nama Lengkap"
                                    name="address">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control py-3" id="email" placeholder="Nomor Hp"
                                    name="address">
                            </div>
                            <div class="form-group">
                                <label for="comment">Alamat Lengkap Anda:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <div class="col-lg input_field_sections ">
                                <select class="form-control hide_search" tabindex="7">
                                    <option selected disabled>Pilih Provinsi Anda</option>
                                    <option>
                                        <h3 class="txt-noto">Banten</h3>
                                    </option>
                                    <hr>
                                    <option>Jawa Barat</option>
                                    <option>DKI Jakarta</option>
                                    <option>Jawa Tengah</option>
                                </select>
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" data-dismiss="modal">Ubah </button>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div style="min-height: 20px;">

        </div>



        <!-- /#top -->


        <!-- # right side -->

        <!-- /#wrap -->
        <!-- global scripts-->
        <script src="{{url('backend/js/components.js')}}"></script>
        <script src="{{url('backend/js/custom.js')}}"></script>
        <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
        <script src="{{url('backend/js/pages/modals.js')}}"></script>
        <!--end of global scripts-->
        <!--  plugin scripts -->

        <!--end of plugin scripts-->


</body>

</html>