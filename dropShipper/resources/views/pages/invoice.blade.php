@extends('layouts.app')

@section('title')
    Invoice | Dropshipper
@endsection

@section('style')
<link rel="stylesheet" href="{{url('backend/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{url('backend/css/pages/invoice.css')}}" />


@endsection

@section('content')

<div class="bg-container ">
    <header class="head">
        <div class="main-bar" style="margin-top: 50px">
            <div class="row">
                <div class="col-12 col-sm-5">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                      Invoice
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
          
                        <li class="active breadcrumb-item">Invoice</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!-- isi invoice -->
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="icon ion-card qwe" data-pack="default" data-tags="credit, price, debit, money, shopping, cash, dollars, $"></i>
                            Invoice for Purchase #33221
                        </div>
                        <div class="card-body m-t-35">
                            <div class="row">
                                <div class="col mrg_btm15">
                                    Faktur ini Dihasilkan Untuk deskripsi Item yang tercantum di bawah ini dengan kode #33221. Detail penagihan dan detail pengiriman disebutkan di bawah ini.
                                    <br />
                                    untuk setiap pertanyaan tentang dokumen Faktur ini, jangan ragu untuk menanyakan pertanyaan Anda dengan hubungi No. Handphone yang diberikan atau memposting pertanyaan Anda di ulasan.
                                    <br />
                                    Rincian Pengiriman
                                    <br />
                                    <br />
                                    Tanggal Order :
                                    <strong>17 September 2020</strong>
                                    <br />
                                    Status Order :
                                    <strong>Menunggu Konfirmasi</strong>
                                    <br />
                                    Order delivery :
                                    <strong>-</strong>
                                    expecting
                                    <br />
                                    Nomor Resi :
                                    <strong>08883-2204-2344</strong>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col invoice_body_billing_details">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4">
                                            <div class="invoice_details">
                                                <h4 class="success_txt">Data Penerima:</h4>
                                                Nama : <strong>Mr Michael</strong>
                                                <br />
                                                No Hp :
                                                <strong>083890885868</strong>
                                                <br />
                                                Alamat :  Kp. Rengat Girang RT 03 RW 06, 
                                                Des. Karyasari Kec. Cikedal 
                                                Pandeglang, 
                                                <br> Banten
                                                <br />

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="invoice_details">
                                                <h4 class="success_txt">Data Pengirim:</h4>
                                                Toko : <strong>Global Jaya Shop</strong>
                                                <br />
                                                No Hp :
                                                <strong>083890885868</strong>
                                                <br />
                                                Alamat :  Kp. Rengat Girang RT 03 RW 06, 
                                                Des. Karyasari Kec. Cikedal 
                                                Pandeglang, 
                                                <br> Banten
                                                <br />

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <strong>Deskripsi Order</strong>
                                        </div>
                                        <div class="card-body m-t-35">
                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <thead>
                                                    <tr>
                                                        <td>
                                                            <strong>Produk Item</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Harga</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>Jumlah Item</strong>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <strong>Total</strong>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Gamis Baju Terbaru</td>
                                                        <td>Rp300.000</td>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td class="text-right">Rp300.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gamis Baju Terbaru</td>
                                                        <td>Rp300.000</td>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td class="text-right">Rp300.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gamis Baju Terbaru</td>
                                                        <td>Rp300.000</td>
                                                        <td class="text-center">1</td>
                                                        <td></td>
                                                        <td class="text-right">Rp300.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highrow"></td>
                                                        <td class="highrow"></td>
                                                        <td class="highrow text-center"></td>
                                                        <td class="highrow text-right">
                                                            <strong>Sub Total &nbsp;</strong>
                                                        </td>
                                                        <td class="highrow text-right">
                                                            <strong>Rp900.000</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-center"></td>
                                                        <td class="emptyrow text-right">
                                                            <strong>Biaya Pengiriman &nbsp;</strong>
                                                        </td>
                                                        <td class="highrow text-right">
                                                            <strong>Rp30.000</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow">
                                                            <i class="livicon" data-name="barcode" data-size="60" data-loop="true"></i>
                                                        </td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-center"></td>
                                                        <td class="emptyrow text-right">
                                                            <strong>Total &nbsp;</strong>
                                                        </td>
                                                        <td class="highrow text-right">
                                                            <strong>Rp930.000</strong>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <button type="button" class="btn  button-alignment btn-success m-t-15" data-toggle="button">
                                        Submit Invoice
                                    </button>
                                </div>
                                <div class="col-lg-6 col-sm-6 invoice_print" >
                        <span class="pull-sm-right">
                            <a style="color:#fff;" class="btn button-alignment btn-info m-t-15 btn_print" data-toggle="button" onclick="javascript:window.print();">
                                Print
                            </a>
                            <button type="button" class="btn button-alignment btn-warning m-t-15" data-toggle="button">
                                Cancel
                            </button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.inner -->
    
</div>
<!-- /.outer -->

</div>
<!--wrapper-->

</div>
<!-- modals searching and show at md -->
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

</div>

<footer style="margin-bottom: -20px;" class="bg-default disabled">
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


<script>
    $(".btn_print").on("click",function(){
       $("#content").addClass("margin");
    });
</script>
    
@endsection

@section('script')
<script>
    $(".btn_print").on("click",function(){
       $("#content").addClass("margin");
    });
</script>
@endsection