@extends('layouts.app')

@section('title')
    Analisi | Dropshipper
@endsection

@section('content')

<div id="left" class="fixed">
    <div class="menu_scroll" style="margin-top: 50px">
        <div class="media user-media">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="col-12 m-t-35">
                <div class="user-name1 text-center">
                    <div>
                        <div class="text-center mb-2">
                        <img src="{{url('backend/img/images3.jpg')}}" width="50%" height="auto" class="rounded-circle avatar_wide avatarr1" alt="female" />
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
    </div>
    <!-- /#menu -->
</div>
<!-- end sidebar -->
<!-- /#left -->

<!--  content -->
<div id="content" class="bg-container fixed_header_menu_conainer fixed_header_menu_page">
    <!-- header -->
    <header class="head">
        <div class="main-bar" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-5">
                    <h4 class="nav_top_align"><i class="fa fa-th"></i> Analisis</h4>
                </div>
                <div class="col-lg-7">
                    <ul class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class=" breadcrumb-item">
                            <a href="index.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="toko.html">Toko Saya</a>
                        </li>
                     
                     
                        <li class="breadcrumb-item active">Analisis</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    
    <!-- untuk nilai setiap bar -->
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            Hallo!! Micheal <small class="ml-3">Berikut adalah Informasi Toko Anda</small>
                        </div>
                        <div class="card-body card_block_top_align ">
                            <h4>Analisis Data Toko Anda</h4>
                   

                            
                            <div class="row sales_section mt-5">
                                <div class="col-xl col-sm-6 col-12">
                                    <div class="card p-d-15">
                                        <div class="sales_icons">
                                            <span class="bg-info"></span>
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div>
                                            <h5 class="sales_orders text-right m-t-5">Jumlah Penjualan</h5>
                                            <h1 class="sales_number m-t-15 text-right" id="orders_countup">
                                                1,425</h1>
                                            <p class="sales_text">Terjual Minggu Ini: 320
                                              
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl col-sm-6 col-12 media_max_573">
                                    <div class="card p-d-15">
                                        <div class="sales_icons">
                                            <span class="bg-danger"></span>
                                            <i class="fa fa-bar-chart"></i>
                                        </div>
                                        <div>
                                            <h5 class="sales_orders text-right m-t-5">Rata Rata Penjualan</h5>
                                            <h1 class="sales_number m-t-15 text-right"><span
                                                    id="revenue_countup">600</span>
                                            </h1>
                                            <p class="sales_text">Total Produk Terjual: 8,250
                                              
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl col-sm-6 col-12 media_max_1199">
                                    <div class="card p-d-15">
                                        <div class="sales_icons">
                                            <span class="bg-warning"></span>
                                            <i class="fa fa-credit-card"></i>
                                        </div>
                                        <div>
                                            <h5 class="sales_orders text-right m-t-5">Rata Rata Omset</h5>
                                            <h1 class="sales_number m-t-15 text-right" id="sold_countup">1,025</h1>
                                            <p class="sales_text">Omset: 7,600
                                          
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl col-sm-6 col-12 media_max_1199">
                                    <div class="card p-d-15">
                                        <div class="sales_icons">
                                            <span class="bg-primary"></span>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div>
                                            <h5 class="sales_orders text-right m-t-5">Rating Toko</h5>
                                            <h1 class="sales_number m-t-15 text-right"
                                                id="products_countup"> <i class="fa fa-star" style="color: yellow;"></i>
                                                <i class="fa fa-star" style="color: yellow;"></i> <i class="fa fa-star" style="color: yellow;"></i>
                                                <i class="fa fa-star" style="color: yellow;"></i><i class="fa fa-star" style="color: yellow;"></i></h1>
                                            <p class="sales_text">Jumlah berikan respon: 12,100
                                              
                                            </p>
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

    <!-- highchart produk terjua; -->
    <div class="outer mt-0">
        <div class="col-lg m-t-35">
            <div class="card">
                <div class="card-header bg-white text-black">
                    Jumlah Produk Terjual <small class="ml-2 text-secondary">Perminggu</small>
                </div>
                <div class="card-body m-t-35">
                    <div id="basicFlotLegend" class="flotLegend"></div>
                    <div id="line-chart" class="flotChart1"></div>
                </div>
            </div>
        </div>
    
    </div>
    <!-- highchart omset jualan -->
    <div class="outer mt-0">
        <div class="col-lg m-t-35">
            <div class="card">
                <div class="card-header bg-white text-black">
                    Omset Jualan <small class="ml-2 text-secondary">Permingggu </small>
                </div>
                <div class="card-body m-t-35">
                    <div id="basicFlotLegend2" class="flotLegend"></div>
                    <div id="bar-chart" class="flotChart1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#content -->
    <div style="min-height: 100px;">

    </div>
    <!-- for modal searching hide -->
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

</div>


<!--wrapper-->

<!-- # right side -->

</div>

    
@endsection
@include('includes.footer')