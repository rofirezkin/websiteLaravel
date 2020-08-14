@extends('layouts.app')

@section('title')
    Trends | Dropshipper
@endsection

@section('content')
<div class="bg-container ">
    <header class="head">
        <div class="main-bar" style="margin-top: 50px"> 
            <div class="row">
                <div class="col-12 col-sm-5">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Trends
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
                        <li class="active breadcrumb-item">Trends</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!-- isi -->
    <div class="outer">
        <div class="inner bg-container">
            <div class="container">
                <h3 class="text-judul">Produk Yang Sedang Trendi</h3>
                <h5 class="text-jud-kecil">Ayo beli sekarang untuk tampilan lebih trendi</h5>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
                    <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
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
            <div class="container mt-5">
                <div class="row justify-content-end">
                    <div class="col-sm-3 text-right">
                        <ul class=" pagination  pagination_padding_general_components ">
                            <li class="page-item bg-default active">
                                <a class="" href="#">PREVIOUS</a>
                            </li>
                            <li class="page-item active">
                                <a href="#">1</a>
                            </li>
                            <li class="page-item ">
                                <a href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#">3</a>
                            </li>
                            <li class="page-item disabled">
                                <a href="#">4</a>
                            </li>
                            <li class="page-item active">
                                <a href="#">NEXT</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div style="min-height: 100px;">

            </div>

        </div>

    </div>
    <!-- end isi -->

</div>
<!-- /.outer -->

</div>
    
@endsection
@include('includes.footer')
