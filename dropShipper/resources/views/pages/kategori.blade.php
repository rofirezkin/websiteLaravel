@extends('layouts.app')

@section('title')
    Kategori | Dropshipper
@endsection

@section('content') 

    <div class="bg-container">
        <header class="head">
            <div class="main-bar" style="margin-top: 50px">
                <div class="row">
                    <div class="col-12 col-sm-5">
                        <h4 class="nav_top_align">
                            <i class="fa fa-user"></i>
                            Kategori
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
                            <li class="active breadcrumb-item">Kategori</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <!-- kategori produk -->
        <div class="outer">
            <div class="inner bg-container">

                <div class="container-fluid-1 ">
                    <h3 class="text-judul">Kategori Produk Untuk Anda </h3>
                    <h4 class="text-jud-kecil">Pilih kategori Produk Anda dan Beli sekarang.</h4>


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

            </div>

        </div>
        <!-- /.inner -->

    </div>
    <!-- /.outer -->
</div>


</div>
<!-- searching for small screen  -->
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
<!-- end modals -->

<div style="min-height: 100px;">

</div>
@endsection

@include('includes.footer')