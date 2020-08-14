@extends('layouts.app')

@section('title')
    Halaman | Dropshipper
@endsection

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="container">
            <div class="carousel-item active container-fluid">
                <div class="row">
                    <div class="col ">
                        <h1 class="text-slide">Promo Spesial!! <br> Di Bulan Juli</h1>
                        <p class="text-slide-1">Dapatkan Gratis Ongkir Keseluruh Indonsia
                            Dengan Membeli Baju Gamis Yang Sedang Trendi.
                            Ayo Beli Sekarang!!.
                        </p>
                    </div>
                    <div class="col text-center d-none d-sm-block">
                    <img src="{{url('backend/img/aset/product 1/p.jpg')}}" class="img-thumbnail gambar-slide" width="350"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item container-fluid">
                <div class="row">
                    <div class="col">
                        <h1 class="text-slide">Promo Spesial!! <br> Di Bulan Juli</h1>
                        <p class="text-slide-1">Dapatkan Gratis Ongkir Keseluruh Indonsia
                            Dengan Membeli Baju Gamis Yang Sedang Trendi.
                            Ayo Beli Sekarang!!.
                        </p>
                    </div>
                    <div class="col text-center d-none d-sm-block">
                        <img src="{{url('backend/img/aset/product 1/p.jpg')}}" class="img-thumbnail gambar-slide" width="350"
                            alt="">


                    </div>
                </div>
            </div>
            <div class="carousel-item container-fluid">
                <div class="row">
                    <div class="col">
                        <h1 class="text-slide">Promo Spesial!! <br> Di Bulan Juli</h1>
                        <p class="text-slide-1">Dapatkan Gratis Ongkir Keseluruh Indonsia
                            Dengan Membeli Baju Gamis Yang Sedang Trendi.
                            Ayo Beli Sekarang!!.
                        </p>
                    </div>
                    <div class="col text-center d-none d-sm-block">
                        <img src="{{url('backend/img/aset/product 1/p.jpg')}}" class="img-thumbnail gambar-slide" width="350"
                            alt="">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- end carousel -->
<div style="min-height: 200px;">

</div>
<!-- kategori pakaian terbaik -->
<div class="container-fluid-1 ">
    <h3 class="text-judul">Pakaian Pilihan Terbaik</h3>
    <h4 class="text-jud-kecil">Pakaian Terlaris bulan ini dengan diskon</h4>


</div>
<div class="container-fluid-1 mt-5 ">
    <div class="row">
        <div class="col-md-6 mb-2">
        <a href="product.html"><img src="{{url('backend/img/produk 1.jpg')}}" alt="" width="100%"></a>
        </div>
        <div class="col-md-6 mb-2">
            <a href=""><img src="{{url('backend/img/produk 1.jpg')}}" width="100%" alt=""></a>
        </div>

    </div>
    <div class="row ">
        <div class="col-md-6 mb-2">
            <a href=""><img src="{{url('backend/img/produk2.jpg')}}" width="100%" alt=""></a>
        </div>
        <div class="col-md-6">
            <a href=""><img src="{{url('backend/img/produk3.jpg')}}" width="100%" alt=""></a>
        </div>

    </div>

</div>
<div style="min-height: 100px;">

</div>
<!-- end kategori pilihan terbaik -->

<!-- rekomendasi produk -->
<div class="jumbotron">
    <div class="container ">
        <h3 class="text-judul">Rekomendasi Untuk Anda</h3>
        <h4 class="text-jud-kecil">Produk Yang Sesuai Dengan Kebutuhan</h4>
    </div>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-2 padding-product">
                <div class="recom">
                <a href="cart.html"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
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
                    <a href="cart.html"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
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
                    <a href="cart.html"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
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
                    <a href="cart.html"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
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
                    <a href="cart.html"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
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
                    <a href="cart.html"><img src="{{url('backend/img/aset/mask.jpg')}}" alt="" width="100%">
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
</div>
<div style="min-height: 50px;">

</div>
<!-- end rekomendasi -->
<!-- iklan dropshipper -->
<div>
    <div class="container  poster">
        <h3 class="text-judul">Dropshipper</h3>
        <h4 class="text-jud-kecil">bagi Anda yang ingin bergabung <br>
            untuk menjadi dropshipper dan ingin untung besar</h4>
    </div>
    <div class="container  mt-5 text-center  ">
    <img class="gambar-pos" src="{{url('backend/img/banner.jpg')}}" alt="" width="100%" height="70%">
    </div>

</div>
<!-- end iklan -->

</div>

</div>
<!-- modals searching and showv at md  -->
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
<div style="min-height: 100px;">    
    <footer class="bg-default disabled">
        <div class="container footer-text">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-3">
                            <h4 class="px-3"><i class='fab fa-facebook-square'></i> Dropship</h4>
                        </div>
                        <div class="col-3">
                            <h4 class="px-3"><i class='fab fa-instagram'></i> @dropship</h4>
                        </div>
                        <div class="col-3">
                            <h4 class="px-3"><i class='	fab fa-twitter-square'></i> @dropship</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 footer-text text-right ">
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
