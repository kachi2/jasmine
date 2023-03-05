<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title> {{$settings->site_name}}</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset('/asset/img/favicon.ico')}}" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"/>

    <!--== All Vendor CSS ==-->
    <link href="{{asset('/assets/css/slicknav.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/slick.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/settings.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/pe-7-stroke-icon.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/nice-select.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/magnific-popup.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/leaflet.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/jquery-ui.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/helper.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   @include('layouts.header')
    @yield('contents')

<!--== Start Footer Area Wrapper ==-->
@include('layouts.footer')
<!-- End Off Canvas Menu Wrapper -->
