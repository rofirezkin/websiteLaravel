<!doctype html>
<html class="no-js" lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <!--global styles-->
    @yield('style')
    @include('includes.style')


    <!-- end of global styles-->



</head>

<body class="fixed_header " style="font-family: Bahnschrift">
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
    <div id="wrap">
        <div>
            <!-- .navbar -->
            <div id="top" class="fixed">
                <!-- .navbar -->
                <nav class="navbar navbar-static-top">
                    <div class="container-fluid m-0">
                        <a class="navbar-brand mr-0" href="index.html">
                        <h4 class="text-white"><img src="{{'backend/img/logow.png'}}" class="admin_img" alt="logo">
                                <div class="d-none d-md-block float-right ml-1"> dropship </div>
                            </h4>
                        </a>
                        <div class="menu mr-sm-auto ml-auto d-block d-md-none">
                            <span class="toggle-left" id="menu-toggle">
                                <i class="fa fa-bars text-white"></i>
                            </span>
                        </div>


                        <div class="navbar-toggleable-sm m-lg-auto d-none d-md-block d-lg-flex top_menu"
                            id="nav-content">
                            <ul class="nav navbar-nav flex-row top_menubar">
                                <li class="nav-item">
                                <a class="nav-link text-white" href="{{url('/')}}">
                                        <i class="fas fa-home"></i> <span class="quick_text">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{url('kategori')}}">
                                        <i class="fa fa fa-edit"></i> <span class="quick_text">Kategori</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{url('toko')}}">
                                        <i class="fas fa-industry"></i> <span class="quick_text">Dropshipper</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{url('trends')}}">
                                        <i class="	fas fa-chart-line"></i> <span class="quick_text">Trends</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-3 d-none d-md-block">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="topnav dropdown-menu-right ml-auto">
                            <button
                                class="btn btn-raised bg-default text-white adv_cust_mod_btn d-block d-md-none ml-auto float-left"
                                data-toggle="modal" data-target="#normal"><i class="fa fa-search"></i>
                            </button>
                            <div class="btn-group ">
                                <div class="notifications no-bg">
                                    <a class="btn btn-default btn-sm messages d-none d-md-block" data-toggle="dropdown">
                                        <i class="fa fa-envelope fa-1x text-white"></i>
                                        <span class="badge badge-warning">1</span>
                                    </a>
                                    <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                        <div class="popover-header">You have 1 Messages</div>
                                        <div id="messages">


                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                    <img src="{{url('backend/img/mailbox_imgs/6.jpg')}}"
                                                            class="message-img avatar rounded-circle" alt="avatar1">
                                                    </div>
                                                    <div class="col-10 message-data">
                                                        <strong>David</strong> upcoming events list.
                                                        <br>
                                                        <small>add to timeline</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popover-footer">
                                            <a href="mail_inbox.html">Inbox</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="notifications messages no-bg">
                                    <a class="btn btn-default btn-sm d-none d-md-block" data-toggle="dropdown"> <i
                                            class="fa fa-bell text-white"></i>
                                        <span class="badge badge-danger">1</span>
                                    </a>
                                    <div class="dropdown-menu drop_box_align" role="menu">
                                        <div class="popover-header">You have 1 Notifications</div>
                                        <div id="notifications">


                                            <div class="data">
                                                <div class="row">
                                                    <div class="col-2">
                                                    <img src="{{url('backend/img/mailbox_imgs/1.jpg')}}"
                                                            class="message-img avatar rounded-circle" alt="avatar1">
                                                    </div>
                                                    <div class="col-10 message-data">
                                                        <i class="fa fa-clock-o"></i>
                                                        <strong>Remo</strong> sent you an image
                                                        <br>
                                                        <small class="primary_txt">just now.</small>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popover-footer">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group">
                                <div class="user-settings no-bg">
                                    <button type="button" class="btn btn-default no-bg micheal_btn"
                                        data-toggle="dropdown">
                                        <img src="{{url('backend/img/admin.jpg')}}" class="admin_img2 rounded-circle avatar-img"
                                            alt="avatar">
                                        <strong>Micheal</strong>
                                        <span class="fa fa-sort-down white_bg"></span>
                                    </button>
                                    <div class="dropdown-menu admire_admin">
                                        <div class="popover-header">michael</div>
                                        <a class="dropdown-item" href="{{url('profil')}}"><i class="fa fa-cogs"></i>
                                            Pengaturan Akun</a>
                                        <a class="dropdown-item" href="{{url('invoice')}}">
                                            <i class="fas fa-clipboard"></i> Data Order
                                        </a>
                                        <a class="dropdown-item" href="{{url('toko')}}"><i class="fas fa-industry"></i>
                                            Toko Saya</a>
                                        <a class="dropdown-item" href="{{url('halaman')}}"><i class="	fa fa-sign-out"
                                                style="font-size:20px; "></i>
                                            Keluar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <!-- /.navbar -->
                <!-- /.head -->
            </div>
            <!-- /.navbar -->

            <!-- menu hide and show at md -->
            <div id="left" class="fixed d-block d-md-none" style="min-height: 10%;">
                <div>

                    <!-- #menu -->
                    <ul id="menu">

                        <li class="pl-5">
                            <a class="nav-link text-white" href="{{url('/')}}">
                                <i class="fa fa-envelope  text-white"></i><span class="quick_text pl-1">Pesan</span>
                            </a>
                        </li>
                        <li class="pl-5">
                            <a class="nav-link text-white" href="{{url('/')}}">
                                <i class="fa fa-bell text-white"></i><span class="quick_text pl-1">Pemberitahuan</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-1" style="border-bottom: 1px solid  	 #BEBEBE;"></div>
                    <ul id="menu" class="mt-2">
                        <li class="pl-5">
                            <a class="nav-link text-white" href="{{url('/')}}">
                                <i class="fas fa-home"></i> <span class="quick_text">Home</span>
                            </a>
                        </li>
                        <li class="pl-5">
                            <a class="nav-link text-white" href="{{url('kategori')}}">
                                <i class="fa fa fa-edit"></i> <span class="quick_text">Kategori</span>
                            </a>
                        </li>
                        <li class="pl-5">
                            <a class="nav-link text-white" href="{{url('toko')}}">
                                <i class="fas fa-industry"></i> <span class="quick_text">Dropshipper</span>
                            </a>
                        </li>
                        <li class="pl-5">
                            <a class="nav-link text-white" href="{{url('trends')}}">
                                <i class="	fas fa-chart-line"></i> <span class="quick_text">Trends</span>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-1" style="border-bottom: 1px solid #BEBEBE;"></div>
                </div>
                <!-- /#menu -->
            </div>
            <!-- end menu hide -->

           
            
            @yield('content');
        


    <!-- # right side -->

    <!-- /#wrap -->
    <!-- global scripts-->
    @include('includes.script')
    @yield('script')
    <!--end of global scripts-->
    <!--  plugin scripts -->

    <!--end of plugin scripts-->


</body>

</html>