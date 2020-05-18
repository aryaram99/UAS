<!DOCTYPE html>
<html lang="en">


<!-- edit-patient24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Tugas UAS</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src="{{asset('assets/img/ubd_logo.png')}}"> <span>UAS</span>
                </a>
            </div>

            <ul class="nav user-menu float-right">
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        {{ Auth::user()->nama }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="/home"><i class="fa fa-book"></i> <span>Alpha</span></a>
                        </li>
                        <li class="active">
                            <a href="/bravo"><i class="fa fa-book"></i> <span>Bravo</span></a>
                        <li>
                            <a href="/charlie"><i class="fa fa-book"></i> <span>Charlie</span></a>
                        </li>
                        <li>
                            <a href="/delta"><i class="fa fa-book"></i> <span>Delta</span></a>
                        </li>
                        <li>
                            <a href="/echo"><i class="fa fa-book"></i> <span>Echo</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Data</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="/home/alpha/update/{{ $alpha->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Kamar <span class="text-danger">*</span></label>
                                        <input type="text" name="no_kamar" class="form-control" value=" {{ $alpha->no_kamar }}">
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Lama Menginap <span class="text-danger">*</span></label>
                                        <input type="text" name="lama_menginap" class="form-control"value=" {{ $alpha->lama_menginap }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Penghuni</label>
                                        <input type="text" name="penghuni" class="form-control" value=" {{ $alpha->penghuni }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control" value=" {{ $alpha->status }}">
                                    </div>
                                </div>
                                
                                   
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan <i class="fa fa-save"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>


<!-- edit-patient24:07-->
</html>
