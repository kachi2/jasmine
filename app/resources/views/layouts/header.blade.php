<header class="header-area">
    <!-- Start Pre Header Area -->
    <div class="prehedaer-area-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 d-none d-sm-block">
                    <div class="pre-header-left d-sm-flex justify-content-center justify-content-lg-start">
                        <div class="pre-header-item">
                            <a href="tel:{{$settings->site_phone}}"><i class="fa fa-phone"></i> {{$settings->site_phone}}</a>
                        </div>

                        <div class="pre-header-item">
                            <span><i class="fa fa-clock-o"></i> {{$settings->opening_hours}}</span>
                        </div>

                        <div class="pre-header-item">
                            <a href="mailto:{{$settings->site_email}}"><i class="fa fa-envelope-o"></i>{{$settings->site_email}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div class="pre-header-right text-center text-md-end">
                        <div class="social-icons">
                            <a  target="_blank" href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                            {{-- <a target="_blank"  href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a> --}}
                            <a target="_blank"  href="{{$settings->linkedIn}}"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="{{$settings->intagram}}"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pre Header Area -->

    <!-- Start Header Bottom Area  -->
    <div class="header-bottom header-bottom--two sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-2">
                    <!-- Start Logo Area -->
                    <div class="logo-area">
                        <a href="{{route('index')}}"><img src="{{asset('/assets/logo.png')}}"  alt="Logo"/></a>
                    </div>
                    <!-- End Logo Area -->
                </div>

                <div class="col-lg-8 d-none d-lg-block">
                    <nav class="navigation-area">
                        <ul class="main-menu nav">

                          @foreach ($menus as $menu )
                            <li class="@if($menu->has_child) dropdown-navbar @else @endif ">@if($menu->name == 'Home') <a href="{{route('index')}}">{{$menu->name}}</a> @else <a href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                                @if(count($menu->subMenu) > 0)
                                <ul class="dropdown-nav">
                                    @forelse ($menu->subMenu as $sub ) 
                                    <li><a href="{{route('subpages', encrypt($sub->id))}}">{{$sub->name}}</a></li>   
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            @endif
                            @endforeach   
                        </ul>
                    </nav>
                </div>

                <div class="col-7 col-lg-2">
                    <!-- Start Header Action Area -->
                    <div class="header-action-area">
                        <ul class="action-buttons nav justify-content-end">
                            <li class="d-lg-none">
                                <button class="btn-canvas-open"><i class="pe-7s-menu"></i></button>
                            </li>
                           {{-- <li>
                                <a href="#" class="btn-search">
                                    <i class="pe-7s-search"></i>
                                    <i class="pe-7s-close"></i>
                                </a>
                                <div class="header-search-box">
                                    <form action="#">
                                        <div class="search-box-content">
                                            <input type="search" placeholder="type here and hit enter"/>
                                        </div>
                                    </form>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <!-- End Header Action Area -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Bottom Area  -->
</header>
