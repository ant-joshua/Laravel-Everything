<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" href="{{ secure_asset('images/favicon.png')}}">

    <!-- slick slider -->
    <link href='{{ secure_asset('components/slick/slick.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{ secure_asset('fonts/dripicons/webfont.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{ secure_asset('fonts/qticons/qticons.css')}}' rel='stylesheet' type='text/css'>

    <!-- Main css file -->
    <link rel="stylesheet" href="{{ secure_asset('css/qt-main.css')}}">
    <!-- INCLUDES THE CHOSEN FRAMEWORK VIA #IMPORT AND SASS -->
    <link rel="stylesheet" href="{{ secure_asset('css/qt-typography.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />
    <!-- Begin 33Across SiteCTRL -->
    <script>
    var Tynt=Tynt||[];Tynt.push('a3sq_-HCyr54oOaKltUXmc');
    (function(){var h,s=document.createElement('script');
    s.src=(window.location.protocol==='https:'?
    'https':'http')+'://cdn.tynt.com/ti.js';
    h=document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(s,h);})();
    </script>
    <!-- End 33Across SiteCTRL -->

</head>

<body>
    <div id="qtMasterContainter" class="qt-parentcontainer qt-header-transparent qt-notscrolled" data-0="@class:qt-parentcontainer qt-header-transparent qt-notscrolled" data-5="@class:qt-parentcontainer qt-header-transparent qt-scrolled">
        <!-- ================================ MENU  ================================================================ -->

        <!-- QT MENUBAR  ================================ -->
        <nav class="qt-menubar nav-wrapper qt-content-primary">
            <!-- QT MENUBAR SECONDARY  ================================ -->
            <ul class="qt-menu-secondary qt-content-primary-light hide-on-xl-and-down">
            @if(Auth::user())
                @if(Auth::user()->admin)
                <li class="right"><a href="{{ url('admin')}}">Admin Panel</a></li>
                @endif
                <li class="right"><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a></li>
                      <form id="logout-form" action="{{ secure_url('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                <li class="right"><a href="{{ secure_url('profile')}}">{{ Auth::user()->name }}</a></li>
            @else
                <li>We add some cool test here <a href="#" class="qt-btn qt-btn-s qt-btn-ghost">Subscribe Now</a></li>
                <li class="right"><a href="{{ secure_url('login')}}">Login</a></li>
                <li class="right"><a href="#">Favorites</a></li>
                <li class="right"><a href="#">Newsletter</a></li>
            @endif
               
            </ul>
            <!-- QT MENUBAR SECONDARY END  ================================ -->

            <!-- desktop menu  HIDDEN IN MOBILE AND TABLETS -->
            <ul class="qt-desktopmenu hide-on-xl-and-down">
                <li class="qt-logo-link"><a href="{{ secure_url('/')}}" class="brand-logo qt-logo-text"><img src="{{ secure_url('images/logo.png')}}" alt="home"></a></li>
                <li class="qt-menuitem">
                    <a href="{{ secure_url('/')}}">Home</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('blog')}}">Blogs</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('portfolio')}}">Portfolios</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('video')}}">Videos</a>
                </li>
                <li class="qt-menuitem">
                    <a href="{{ secure_url('forum')}}">Forum</a>
                </li>
                <li class="qt-menuitem">
                    <a href="{{ secure_url('product')}}">Products</a>
                </li>
                <!-- Submenu 
                <li class="menu-item-has-children qt-menuitem"><a href="#!">Video</a>
                    <ul>
                        <li><a href="archive-video.html">Video archive</a></li>
                        <li><a href="single-video.html">Video single</a></li>
                    </ul>
                </li>
                -->
              
                <li class="qt-menubutton right">
                    <a href="#watch-later-page" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Watch Later">
                <i class="dripicons-clock"></i>
            </a>
                </li>
                <li id="qtnavsearch" class="right qt-navsearch qt-menubutton">
                    <form id="qtnavform" method="get">
                        <button id="qtnavsearchbutton" class="qt-navsearch-btn">
            <i class="icon dripicons-search"></i>
        </button>
                        <button id="qtnavsearchclose" class="qt-navsearch-btnclose">
            <i class="icon dripicons-cross"></i>
        </button>
                        <input id="qtsearch" name="s" type="search" placeholder="search">
                    </form>
                </li>
            </ul>
            <!-- mobile menu icon and logo VISIBLE ONLY TABLET AND MOBILE-->
            <ul class="qt-desktopmenu hide-on-xl-only ">
                <li><a href="#" data-activates="qt-mobile-menu" class="button-collapse qt-menu-switch qt-btn qt-btn-primary qt-btn-m"><i class="dripicons-menu"></i></a></li>
                <li><a href="{{ secure_url('/')}}" class="brand-logo qt-logo-text"><img src="{{ secure_url('images/logo.png')}}" alt="home"></a></li>
            </ul>
        </nav>
        <!-- MENU MOBILE -->
        <div id="qt-mobile-menu" class="side-nav qt-content-primary">
            <ul class="qt-side-nav">
               <li class="qt-menuitem">
                    <a href="{{ secure_url('/')}}">Home</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('blog')}}">Blogs</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('portfolio')}}">Portfolios</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('video')}}">Videos</a>
                </li>
                 <li class="qt-menuitem">
                    <a href="{{ secure_url('forum')}}">Forum</a>
                </li>
            </ul>
        </div>

        <!-- ================================ MENU END  ================================================================ -->
@yield('content')
<!--  FOOTER CONTENTS  ================================================================ -->

        <div id="qtFooterfxcontainer">
            <div id="qtFooterfxs" class="qt-footer qt-negative qt-content-aside qt-relative">
                <div class="qt-footer-widgets qt-vertical-padding-l qt-content-primary-light">
                    <div class="qt-container">
                        <div class="row">
                            <div class="col s12 m3 l3">
                                <div class="qt-widget">
                                    <h5 class="qt-widget-title"><span>Facebook</span></h5>
                                  <div class="fb-page" data-href="https://www.facebook.com/majesticxesports/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/majesticxesports/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/majesticxesports/">Majestix X</a></blockquote></div>
                                </div>
                            </div>
                            <div class="col s12 m3 l3">
                                <div class="qt-widget">
                                    <h5 class="qt-widget-title"><span>Last posts</span></h5>
                                    <div class="qt-widget-categories qt-widget-list">


                                        <!-- ITEM INLINE  ========================= -->
                                        <div class="qt-part-archive-item qt-part-archive-item-inline">
                                            <a class="qt-inlineimg" href="#temporary-link">
        <img width="150" height="150" src="{{ secure_url('images/thumbnail/43.jpg')}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
    </a>
                                            <p class="qt-date">July 25, 2017</p>
                                            <h6 class="tit qt-ellipsis-2 qt-t">
        <a class="" href="#temporary-link">
            Internet: What No One Is Talking About      </a>
    </h6>

                                        </div>
                                        <!-- ITEM INLINE END ========================= -->


                                        <!-- ITEM INLINE  ========================= -->
                                        <div class="qt-part-archive-item qt-part-archive-item-inline">
                                            <a class="qt-inlineimg" href="#temporary-link">
        <img width="150" height="150" src="{{ secure_url('images/thumbnail/11.jpg')}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
    </a>
                                            <p class="qt-date">July 25, 2017</p>
                                            <h6 class="tit qt-ellipsis-2 qt-t">
        <a class="" href="#temporary-link">
            5 Solid Evidences Attending Parties Is Good For Your Career Development     </a>
    </h6>

                                        </div>
                                        <!-- ITEM INLINE END ========================= -->


                                        <!-- ITEM INLINE  ========================= -->
                                        <div class="qt-part-archive-item qt-part-archive-item-inline">
                                            <a class="qt-inlineimg" href="#temporary-link">
        <img width="150" height="150" src="{{ secure_url('images/thumbnail/27.jpg')}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
    </a>
                                            <p class="qt-date">July 25, 2017</p>
                                            <h6 class="tit qt-ellipsis-2 qt-t">
        <a class="" href="#temporary-link">
            Apple and Sandwich: 10 Surprising Things They Have in Common        </a>
    </h6>

                                        </div>
                                        <!-- ITEM INLINE END ========================= -->
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m3 l3">
                                <div class="qt-widget">
                                    <div class="qt-widget-social">
                                        <h5 class="qt-widget-title"><span>Follow Us</span></h5>
                                        <ul class="qt-socials">
                                            <li>
                                                <a href="index.html" class="qt-btn qt-btn-l qt-socialicon qt-socialicon-fb">
                    <i class="qticon-facebook"></i>
                </a>
                                                <h5><a href="#">40,352 Fans</a></h5>
                                                <h6><a href="#">Follow</a></h6>
                                            </li>

                                            <li>
                                                <a href="index.html" class="qt-btn qt-btn-l qt-socialicon qt-socialicon-tw">
                    <i class="qticon-twitter"></i>
                </a>
                                                <h5><a href="#">10,510 Followers</a></h5>
                                                <h6><a href="#">Follow</a></h6>
                                            </li>

                                            <li>
                                                <a href="index.html" class="qt-btn qt-btn-l qt-socialicon qt-socialicon-yt">
                    <i class="qticon-youtube"></i>
                </a>
                                                <h5><a href="#">1,123,432 Subscribers</a></h5>
                                                <h6><a href="#">Subscribe</a></h6>
                                            </li>

                                            <li>
                                                <a href="index.html" class="qt-btn qt-btn-l qt-socialicon qt-socialicon-ig">
                    <i class="qticon-instagram"></i>
                </a>
                                                <h5><a href="#">9,235 Followers</a></h5>
                                                <h6><a href="#">Follow</a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m3 l3">
                                <div class="qt-widget">
                                    <h5 class="qt-widget-title"><span>Twitter</span></h5>

                                </div>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="qt-extrafooter qt-footerbar qt-content-primary-dark qt-negative qt-content-aside qt-caps qt-small">
                <div class="qt-container">
                    <ul class="qt-extrafooter-menu">
                        <li>Copyright 2017 Majestic-x.com</li>
                        <li class="qt-right"><a href="#">Disclaimer</a></li>
                        <li class="qt-right"><a href="#">Privacy</a></li>
                        <li class="qt-right"><a href="#">Advertisement</a></li>
                        <li class="qt-right"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <a href="#qtMasterContainter" class="qt-scrollupbtn qt-btn qt-btn-xl qt-btn-secondary right qt-smoothscroll "><i class="dripicons-chevron-up"></i></a>
            </div>
        </div>

        <!--  FOOTER CONTENTS END ================================================================ -->
    </div>




    <!-- QT BODY END ================================ -->
    <!-- QT FOOTER SCRIPTS ================================ -->


    <script src="{{ secure_asset('js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
    <!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->
    <script src="{{ secure_asset('js/jquery-migrate.min.js')}}"></script>
    <!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->


    <!-- Framework -->
    <script src="{{ secure_asset('js/materialize-src/js/bin/materialize.min.js')}}"></script>


    <!-- Slick carousel and skrollr -->
    <script src="{{ secure_asset('components/slick/slick.min.js')}}"></script>
    <script src="{{ secure_asset('components/skrollr/skrollr.min.js')}}"></script>


    <!-- Swipebox -->
    <script src="{{ secure_asset('components/swipebox/lib/ios-orientationchange-fix.js')}}"></script>
    <script src="{{ secure_asset('components/swipebox/src/js/jquery.swipebox.min.js')}}"></script>

    <!-- Masonry -->
    <script src="{{ secure_asset('components/masonry/masonry.min.js')}}"></script>

    <!-- MAIN JAVASCRIPT FILE ================================ -->
    <script src="{{ secure_asset('js/qt-main.js')}}"></script>
   
   

<div id="fb-root"></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104905994-1', 'auto');
  ga('send', 'pageview');

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=345947095559360";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>

</html>
