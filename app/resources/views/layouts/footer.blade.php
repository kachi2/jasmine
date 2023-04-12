<footer class="footer-area-wrapper">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row mtm-30">
                <div class="col-lg-4">
                    <!-- Start Single Footer Widget-item -->
                    <div class="widget-item">
                        <div class="widget-body">
                            <img class="mb-24" src="{{asset('/assets/logo.png')}}" alt="Logo"/>
                            <p>{{$settings->about}}.</p>
                            <div class="social-icons social-icons--two mt-22">
                                <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$settings->linkedIn}}"><i class="fa fa-linkedin"></i></a>
                                {{-- <a href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget-item -->
                </div>

                <div class="col-md-6 col-lg-4">
                    <!-- Start Single Footer Widget-item -->
                    <div class="widget-item">
                        <div class="widget-body">
                            <div class="widget-title">
                                <h3>Help Links</h3>
                            </div>

                            <div class="widget-body">
                                <ul class="list list-6">
                                    @foreach ($menus as $menu )
                                    <li > 
                                        @if($menu->name == 'Home') <a style="color:#fdf9f9"  href="{{route('index')}}">{{$menu->name}}</a> @else <a style="color:#f9f9f9" href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                                       </li>
                                    @endforeach
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget-item -->
                </div>

                <div class="col-md-6 col-lg-4">
                    <!-- Start Single Footer Widget-item -->
                    <div class="widget-item">
                        <div class="widget-body">
                            <div class="widget-title">
                                <h3>Our Office</h3>
                            </div>

                            <div class="widget-body">
                                <div class="office-info">
                                    <p><i class="fa fa-map-marker"></i> {{$settings->address}}.</p>
                                    <p><i class="fa fa-phone"></i>  {{$settings->site_phone}}</p>
                                    <p><i class="fa fa-envelope-o"></i>  {{$settings->site_email}}</p>
                                    <p><i class="fa fa-clock-o"></i>  {{$settings->opening_hours}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget-item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copyright-text">
                        <p> &copy; Copyright
                             <script>
                                document.write(new Date().getFullYear())
                            </script>
                           {{$settings->site_copyright}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
            <div class="off-canvas-item">
                <!-- Start Mobile Menu Wrapper -->
                <div class="res-mobile-menu">
                    <!-- Note Content Auto Generate By Jquery From Main Menu -->
                </div>
                <!-- End Mobile Menu Wrapper -->
            </div>

            <div class="off-canvas-item">
                <div class="off-canvas-footer text-center">
                    <div class="social-icons">
                        <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$settings->linkedIn}}"><i class="fa fa-linkedin"></i></a>
                        <a href="{{$settings->intagram}}"><i class="fa fa-instagram"></i></a>
                        <a href="{{$settings->pinterest}}"><i class="fa fa-pinterest"></i></a>
                    </div>

                    <div class="copyright-text">
                        <p> &copy; Copyright
                            <script>
                               document.write(new Date().getFullYear())
                           </script>
                          {{$settings->site_copyright}}
                       </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Off Canvas Content Wrapper -->

        <button class="btn-close"><i class="fa fa-close"></i></button>
    </div>
</aside>

@include('layouts.js')