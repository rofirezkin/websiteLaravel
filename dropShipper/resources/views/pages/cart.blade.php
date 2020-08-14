@extends('layouts.app')

@section('title')
    Cart | Dropshipper
@endsection

@section('content')
<div class="bg-container ">
    <!-- header dan breadcrumb -->
    <header class="head">
        <div class="bg-container main-bar" style="margin-top: 50px">
            <div class="row">
                <div class="col-12 col-sm-5">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Cart
                    </h4>
                </div>
                <div class="col-12 col-sm-7">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                        <a href="{{url('product')}}">Product</a>
                        </li>
                        <li class="active breadcrumb-item">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="modal fade" id="normal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabel">Ayo Cari Produk anda</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
    
                    <div class="modal-footer">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- {{url('backend/')}} --}}
    <!-- gambar produk dan harga-->
    <div class="outer">
        <div class="inner bg-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-2">
                            <img style="border: 1px solid;" class="mb-2" src="{{url('backend/img/aset/product 1/p-8@2x.png')}}"
                                    width="100%" alt="">
                                <img style="border: 1px solid;" class="mb-2" src="{{url('backend/img/aset/product 1/p.jpg')}}"
                                    width="100%" alt="">
                                <img style="border: 1px solid;" src="{{url('backend/img/aset/product 1/p3.jpg')}}" width="100%" alt="">
                            </div>
                            <div class="col-10">
                                <img style="border: 1px solid;" src="{{url('backend/img/aset/product 1/p-8@2x.png')}}" width="80%"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 px-5">
                        <h1>Gamis Syari - Rabbani Hits </h1>
                        <div class="d-flex " style="border-bottom:2px solid black;">
                            <div class="p-2 ">
                                <h4 class="text-secondary txt-noto">4 Ulasan</h4>
                            </div>
                            <div class="p-2 ">
                                <h4 class="text-secondary txt-noto">4 Terjual</h4>
                            </div>
                            <div class="px-5 "><img src="{{url('backend/img/aset/bintang.png')}}" alt="">
                                <img src="{{url('backend/img/aset/bintang.png')}}" alt="">
                                <img src="{{url('backend/img/aset/bintang.png')}}" alt="">
                                <img src="{{url('backend/img/aset/bintang.png')}}" alt="">
                                <img src="{{url('backend/img/aset/bintang.png')}}" alt="">
                            </div>
                        </div>
                        <div class="my-5">
                            <h1 class="text-danger" style="font-size: 40px;">Rp300.000</h1>
                        </div>
                        <div>
                            <h4 class="txt-noto">Tersedia > 100 Produk</h4>
                            <h4 class="txt-noto">Kategori : Gamis</h4>
                            <h4 class="txt-noto">Harga Dropshipper : Rp290.000</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                                <button class="btn btn-gray  padding-but py-4">Masukan Keranjang
                                </button>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 m-t-15">
                            <a href="{{url('beli')}}"> <button
                                        class="btn gray_bg_dark  glow_button padding-but py-4">Beli Sekarang
                                    </button></a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-2">
                                <img src="{{url('backend/img/toko.png')}}" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3>Global Jaya Shop</h3>
                                <h5 class="text-secondary mb-2 txt-noto">Bandung</h5>
                                <button style="color: white;" class="btn btn-gray ">Kunjungi Toko
                                </button>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
        
        
    </div>
    <div style="min-height: 50px;">

    </div>
 <!-- end gambar dan harga -->

    
</div>
<!-- ulasan dan deskripsi -->
<div class="container ">
    <div class="card m-t-35">
        <div class="card-header bg-white">
            <ul class="nav nav-tabs card-header-tabs float-left">
                <li class="nav-item">
                    <a class="nav-link active px-5" href="#tab1" data-toggle="tab">Deskripsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="#tab2" data-toggle="tab">Ulasan</a>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content text-justify">
                <div class="tab-pane active" id="tab1">
                    <h4 class="card-title">Deskripsi</h4>
                    <p class="card-text"> untuk cara memilih warna silahkan cantumkan di kolom pesan/chat saat
                        order. <br>

                        Lengkapi koleksi fashion kalian hanya di Jaya_Store, kenapa harus di Jaya_Store??? <br>
                        1. koleksinya banyak <br>
                        2. semua ready stok <br>
                        3. pengiriman cepat hari h sd h+2 <br>
                        4. harganya murah dan terjangkau (sehingga bisa di jual lagi khusus reseller dan
                        dropsiper Jaya_Storeya) <br>
                        5. modelnya banyak dan bagus-bagus ya <br>
                        6. banyak diskon nya <br> <br>
                        Kemiripan gambar produk tidak 100% menerupai. <br>
                        #longdress #dress #bajumurah #pakaianwanita #maxydress #maxi #konveksibaju #gamissyari
                        #gamis #gamismurah <br>
                        #gamisbusui #grosirbaju #grosirbajubandung #bajubandung.
                    </p>
                </div>
                <div class="tab-pane" id="tab2">

                    <div class="row mb-4">
                        <div class="col-md-1">
                            <img src="{{url('backend/img/aset/ulasan/c-1.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex mb-2">
                                <div>
                                    <h4 class="text-secondary">Lina Santy</h4>
                                </div>
                                <div class="px-5 ">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                </div>
                            </div>
                            <h5 class="text-secondary mb-2">sangat mantap dan Awet Barangnya saya jadi ingin
                                beli lagi mas.</h5>

                        </div>

                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md-1">
                            <img src="{{url('backend/img/aset/ulasan/c.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex mb-2">
                                <div>
                                    <h4 class="text-secondary">Lodra Mendira</h4>
                                </div>
                                <div class="px-5 ">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                    <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                </div>
                            </div>
                            <h5 class="text-secondary mb-2">dalam pemakaiannya cukup nyaman dan saya suka
                                apalagi desainya yang kekinian banget pokoknya saya bakal kasih bintang lima
                                untuk baju ini
                                dan yang penting sukses selalu tokonya :)</h5>

                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-md-1">
                            <img src="{{url('backend/img/aset/ulasan/c-2.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex mb-2">
                                <div>
                                    <h4 class="text-secondary">Lovina</h4>
                                </div>
                                <div class="px-5 ">
                                     <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                     <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                     <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                     <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                     <img src="{{url('backend/img/aset/ulasan/bintang.png')}}" alt="">
                                </div>
                            </div>
                            <h5 class="text-secondary mb-2">cukup nyaman dan bisa di pakai untuk kondangan, mantap deh)</h5>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<!-- end ulasan dan deskripsi -->
<div style="min-height: 100px;">

</div>
<!-- similiar produk -->
<div class="container">
    <h2 class="text-judul">Barang Terkait</h2>
    <h4 class="text-jud-kecil">Daftar Produk terkait </h4>
</div>
<div class="container mt-5 ">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-2 padding-product" >
            <div class="recom">
                <a href="{{url('cart')}}"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
                    <div class="px-3 pt-2">
                        <h6>Baju Syar'i Muslimah
                            wanita baju Gamis...</h6>
                        <h4>Rp123.000</h4>
                        <div class="row">
                            <div class="col-1 ml-1 pad-btg">
                                <img src="{{url('backend/img/bintang.png')}}" alt="">
                            </div>
                            <div class="col-1 pad-btg">
                                <img src="{{url('backend/img/bintang.png')}}" alt="">
                            </div>
                            <div class="col-1 pad-btg">
                                <img src="{{url('backend/img/bintang.png')}}" alt="">
                            </div>
                            <div class="col-1 pad-btg">
                                <img src="{{url('backend/img/bintang.png')}}" alt="">
                            </div>
                            <div class="col-1 pad-btg">
                                <img src="{{url('backend/img/bintang.png')}}" alt="">
                            </div>
                        </div>
                        <h6>Bandung</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 padding-product" >
            <div class="recom">
                <a href="{{url('cart')}}"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
                    <div class="px-3 pt-2">
                        <h6>Baju Syar'i Muslimah
                            wanita baju Gamis...</h6>
                        <h4>Rp123.000</h4>
                         <div class="row">
                                        <div class="col-1 ml-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                    </div>
                        <h6>Bandung</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 padding-product" >
            <div class="recom">
                <a href="{{url('cart')}}"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
                    <div class="px-3 pt-2">
                        <h6>Baju Syar'i Muslimah
                            wanita baju Gamis...</h6>
                        <h4>Rp123.000</h4>
                         <div class="row">
                                        <div class="col-1 ml-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                    </div>
                        <h6>Bandung</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 padding-product" >
            <div class="recom">
                <a href="{{url('cart')}}"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
                    <div class="px-3 pt-2">
                        <h6>Baju Syar'i Muslimah
                            wanita baju Gamis...</h6>
                        <h4>Rp123.000</h4>
                         <div class="row">
                                        <div class="col-1 ml-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                    </div>
                        <h6>Bandung</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 padding-product" >
            <div class="recom">
                <a href="{{url('cart')}}"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
                    <div class="px-3 pt-2">
                        <h6>Baju Syar'i Muslimah
                            wanita baju Gamis...</h6>
                        <h4>Rp123.000</h4>
                         <div class="row">
                                        <div class="col-1 ml-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                    </div>
                        <h6>Bandung</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 padding-product" >
            <div class="recom">
                <a href="{{url('cart')}}"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
                    <div class="px-3 pt-2">
                        <h6>Baju Syar'i Muslimah
                            wanita baju Gamis...</h6>
                        <h4>Rp123.000</h4>
                         <div class="row">
                                        <div class="col-1 ml-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                        <div class="col-1 pad-btg">
                                            <img src="{{url('backend/img/bintang.png')}}" alt="">
                                        </div>
                                    </div>
                        <h6>Bandung</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>
<!-- /.outer -->

</div>

<!-- /.navbar -->




</div>


<div style="min-height: 100px;">

</div>
<footer class="bg-default disabled">
    <div class="container footer-text">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-3">
                        <h4 class="px-3"><i class='fab fa-facebook-square'></i> Instagram</h4>
                    </div>
                    <div class="col-3">
                        <h4 class="px-3"><i class='fab fa-instagram'></i> @dropship</h4>
                    </div>
                    <div class="col-3">
                        <h4 class="px-3"><i class='	fab fa-twitter-square'></i> @dropship</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 footer-text text-right ">
                <h3 class="text-white">Values</h3>
                <h5 class="text-white">100% Garansi</h5>
                <h5 class="text-white">Terpercaya</h5>
                <h5 class="text-white">Aman dalam Transaksi</h5>

            </div>

        </div>
        <div class="bottom-footer text-bottom">
            <div style="border-bottom: 1px solid white; width: 100%;">
                <h6 class="text-white">Visit an Bandung Techno Park, Jl. Telekomunikasi No. 1 Ters. Buah Batu
                    Bandung 40257 P:
                    022-5204086</h6>
            </div>
            <div class="py-3">
                <h6 class="text-white">drpshipper © 2015-2020 dropshipper Company. All rights reserved. Privacy
                    Policy | Terms of Use |
                    Sales and Refunds | Legal | Site Map</h6>
            </div>
        </div>


    </div>

</footer>
    
@endsection
