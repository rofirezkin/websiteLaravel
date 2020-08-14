@extends('layouts.app')

@section('title')

Produk Toko | Dropshipper
    
@endsection

@section('style')

<link rel="stylesheet" href="{{url('backend/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{url('backend/css/pages/timeline2.css')}}" />
<link rel="stylesheet" href="{{url('backend/css/pages/calendar_custom.css')}}" />
<link rel="stylesheet" href="{{url('backend/css/pages/profile.css')}}" />
<link rel="stylesheet" href="{{url('backend/css/pages/gallery.css')}}" />


    
@endsection

@section('content')

<div id="left" class="fixed" style="margin-top: 50px">
    <div class="menu_scroll">
        <div class="media user-media">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="col-12 m-t-35">
                <div class="user-name1 text-center">
                    <div>
                        <div class="text-center mb-2">
                        <img src="{{url('backend/img/images3.jpg')}}" width="50%" height="auto"
                                class="rounded-circle avatar_wide avatarr1" alt="female" />
                        </div>

                        <h4 class="text-white">Shawn B. Mitchell</h4>
                        <span class="text-white">Saint Louis</span>
                    </div>

                </div>
            </div>
        </div>
        <!-- #menu -->
        <div class="mt-1" style="border-bottom: 1px solid  	 #BEBEBE;"></div>
        <ul id="menu" class="mt-2">
            <li class="pl-5">
                <a href="toko.html">
                    <i class="fa fa-home"></i>
                    <span class="link-title menu_hide">&nbsp;Dashboard </span>
                </a>
            </li>
            <li class="pl-5">
                <a href="profiltoko.html">
                    <i class="fa  fa-user"></i>
                    <span class="link-title menu_hide">&nbsp;Profil Toko

                    </span>
                </a>
            </li>
            <li class="pl-5">
                <a href="produktoko.html">
                    <i class="fa fa-cube"></i>
                    <span class="link-title menu_hide">&nbsp;Produk

                    </span>
                </a>
            </li>
            <li class="pl-5">
                <a href="analisis.html">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="link-title menu_hide">&nbsp;Analisis

                    </span>
                </a>
            </li>
        </ul>
        <div class="mt-1" style="border-bottom: 1px solid #BEBEBE;"></div>
        <!-- will show when small screen -->
        <div class="d-block d-md-none">
 
            <ul id="menu" class="mt-2">
                <li class="pl-5">
                    <a class="nav-link text-white" href="index.html">
                        <i class="fas fa-home"></i> <span class="quick_text">Home</span>
                    </a>
                </li>
                <li class="pl-5">
                    <a class="nav-link text-white" href="kategori.html">
                        <i class="fa fa fa-edit"></i> <span class="quick_text">Kategori</span>
                    </a>
                </li>
                <li class="pl-5">
                    <a class="nav-link text-white" href="toko.html">
                        <i class="fas fa-industry"></i> <span class="quick_text">Dropshipper</span>
                    </a>
                </li>
                <li class="pl-5">
                    <a class="nav-link text-white" href="trends.html">
                        <i class="	fas fa-chart-line"></i> <span class="quick_text">Trends</span>
                    </a>
                </li>
            </ul>
   
        </div>
        <!-- end show small screen -->
    </div>
    <!-- /#menu -->
</div>
<!-- /#left -->
<!-- right or content -->
<div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
    <header class="head">
        <div class="main-bar" style="margin-top: 50px">
            <div class="row">
                <div class="col-12 col-sm-5">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Produk Toko
                    </h4>
                </div>
                <div class="col-12 col-sm-7">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="toko.html">Toko Saya</a>
                        </li>

                        <li class="active breadcrumb-item">Produk Toko</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!-- isi produk -->
    <div class="outer">
        <div class="inner bg-container">
            <div class="card ">
                <div class="row justify-content-md-center">
                    <div class="col-lg-2 col-12 m-t-35">
                        <div class="bg-white b_r_5 section_border">
                            <div class="text-center">
                                <h2>Yahh :(</h2>
                                <img src="{{url('backend/img/tshirt2.png')}}" alt="tshirt"
                                    class="img-fluid tea_shirt_img m-t-15">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="p-d-15 text-center">
                    
                    <div>Mohon Maaf Anda Belum Punya Produk Untuk Dijual </div>
                    <div class="text-gray">Ayo Upload Produk Pertama Anda! </div>
           
                </div>
                <div class="text-center">
                 <a href="upload.html">   <button class="btn btn-secondary m-b-20">Upload Produk</button></a>
                </div>  
            </div>
       </div>
   </div>
    <div style="min-height: 100px;">

    </div>
  
</div>

    
@endsection

@section('script')
<script src="{{url('backend/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
<script src="{{url('backend/vendors/bootstrap_calendar/js/bootstrap_calendar.min.js')}}"></script>    
<script src="{{url('backend/vendors/moment/js/moment.min.js')}}"></script>   
<script src="{{url('backend/vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>    
<script src="{{url('backend/js/pages/mini_calendar.js')}}"></script>    
@endsection