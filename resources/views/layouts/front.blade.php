<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{ url('assets/images/favicon.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/fontawesome/css/all.min.css') }}">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/jquery-ui/jquery-ui.min.css') }}">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/modal-video/modal-video.min.css') }}">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/lightbox/dist/css/lightbox.min.css') }}">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/slick/slick.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/slick/slick-theme.css') }}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
      <title>@yield('title')</title>
      <meta name="keywords" content="@yield('meta_keywords')">
      <meta name="description" content="@yield('meta_descriptions')">  
   </head>
   <body class="home">
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="{{ url('assets/images/loader1.gif') }}" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <div class="header-contact-info">
                           <ul>
                              <li>
                                 <a href="#"><i class="fas fa-phone-alt"></i> +91 96253-48288</a>
                              </li>
                              <li>
                                 <a href="mailto:info@Travel.com"><i class="fas fa-envelope"></i>support@indian-tours.in</a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i> No. 671, Sector 19, New Delhi 110075
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                        <div class="header-social social-links">
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <div class="header-search-icon">
                           <button class="search-icon">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header">
               <div class="container d-flex justify-content-between align-items-center">
                  <div class="site-identity">
                     <h1 class="site-title">
                        <a href="{{ url('/')}}">
                           <img class="white-logo" src="{{ url('assets/images/indian-tours-logo.png') }}" alt="logo">
                           <img class="black-logo" src="{{ url('assets/images/indiantours-logo.png') }}" alt="logo">
                        </a>
                     </h1>
                  </div>
                  <div class="main-navigation d-none d-lg-block">
                     <nav id="navigation" class="navigation">
                        <ul>
                           <li>
                              <a href="{{ url('/')}}">Home</a>
                                                      </li>
                           <li class="menu-item-has-children">
                              <a href="#">Tour Program</a>
                              <ul>
                                 <li>
                                    <a href="{{ url('north-india-tours') }}">North India Tours</a>
                                 </li>
                                 <li>
                                    <a href="{{ url('east-india-tours') }}">East India Tours</a>
                                 </li>
                                 <li>
                                    <a href="{{ url('west-india-tours') }}">West India Tours</a>
                                 </li>
                                 <li>
                                    <a href="{{ url('south-india-tours') }}">South India Tours</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="{{ url('triund-trek/triund-trek-dharamshala') }}">Triund Trek</a>
                           </li>
                           
                            <li>
                              <a href="{{ url('himachal-tours') }}">Himachal</a>
                           </li>
                            <li>
                              <a href="{{ route('contact') }}">{{ __('Contact') }}</a>
                           </li>
                           <li>
                              <a href="#">Blog</a>
                           </li>
                          <!--  <li class="menu-item-has-children">
                              <a href="#">Dashboard</a>
                              <ul>
                                 <li>
                                    <a href="admin/dashboard.html">Dashboard</a>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="#">User</a>
                                    <ul>
                                       <li>
                                          <a href="admin/user.html">User List</a>
                                       </li>
                                       <li>
                                          <a href="admin/user-edit.html">User Edit</a>
                                       </li>
                                       <li>
                                          <a href="admin/new-user.html">New User</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="admin/db-booking.html">Booking</a>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="admin/db-package.html">Package</a>
                                    <ul>
                                       <li>
                                          <a href="admin/db-package-active.html">Package Active</a>
                                       </li>
                                       <li>
                                          <a href="admin/db-package-pending.html">Package Pending</a>
                                       </li>
                                       <li>
                                          <a href="admin/db-package-expired.html">Package Expired</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="admin/db-comment.html">Comments</a>
                                 </li>
                                 <li>
                                    <a href="admin/db-wishlist.html">Wishlist</a>
                                 </li>
                                 <li>
                                    <a href="admin/login.html">Login</a>
                                 </li>
                                 <li>
                                    <a href="admin/forgot.html">Forget Password</a>
                                 </li>
                              </ul>
                           </li>-->
                           
                        </ul> 
                     </nav>
                  </div>
                  @guest
                  <div class="header-btn">
                  <a class="button-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </div>
                  @else
                  <div class="header-btn">
                  <a class="button-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                  </form>
                  </div>
                  @endguest
                <div class="header-btn">
                     <a href="tel:9876440250" class="button-primary">Call Now</a>
                  </div>
               </div>
            </div>
            <div class="mobile-menu-container"></div>
         </header>
         <main id="content" class="site-main">
         @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
               </ul>
            </div>
         @endif
 
         @yield('content') 
         </main>
         <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">
                              About Indian Tours
                           </h3>
                           <div class="textwidget widget-text">
                              Indian Tours is not only a travel company but a tale of travel lovers who come together on a platform to live their travel journey. Indian Tours, An exceptional inbound tour operator, is driven by an enthusiastic, determined and hard-working team.

                           </div>
                           <!-- <div class="award-img">
                              <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                              <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                           </div> -->
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT INFORMATION</h3>
                           <div class="textwidget widget-text">
                             Indian Tours
                              <ul>
                                 <li>
                                    <a href="tel:9625348288 ">
                                       <i class="fas fa-phone-alt"></i>
                                       +91 96253-48288
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-envelope"></i>
                                       support@indian-tours.in
                                    </a>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    No. 671, Sector 19, New Delhi 110075
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_recent_post">
                           <h3 class="widget-title">Latest Post</h3>
                           <ul>
                              <li>
                                 <h5>
                                    <a href="#">Life is a beautiful journey not a destination</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                              <li>
                                 <h5>
                                    <a href="#">Take only memories, leave only footprints</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_newslatter">
                           <h3 class="widget-title">SUBSCRIBE US</h3>
                           <div class="widget-text">
                              For Latest Updates Please Subscribe
                           </div>
                           <form class="newslatter-form">
                              <input type="email" name="s" placeholder="Your Email..">
                              <input type="submit" name="s" value="SUBSCRIBE NOW">
                           </form>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
            <div class="buttom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="#">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="#">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 text-center">
                        <div class="footer-logo">
                           <a href="#"><img src="assets/images/travele-logo.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="copy-right text-right">Designed By Singleklick.com</div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
            <div class="header-search-form">
               <div class="container">
                  <div class="header-search-container">
                     <form class="search-form" role="search" method="get" >
                        <input type="text" name="s" placeholder="Enter your text...">
                     </form>
                     <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                     </a>
                  </div>
               </div>
            </div>
         <!-- header html end -->
      </div>

      <!-- JavaScript -->
      <script src="{{ url('assets/js/jquery.js') }}"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ url('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
      <script src="{{ url('assets/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
      <script src="{{ url('assets/js/jquery.counterup.js') }}"></script>
      <script src="{{ url('assets/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
      <script src="{{ url('assets/vendors/masonry/masonry.pkgd.min.js') }}"></script>
      <script src="{{ url('assets/vendors/lightbox/dist/js/lightbox.min.js') }}"></script>
      <script src="{{ url('assets/vendors/slick/slick.min.js') }}"></script>
      <script src="{{ url('assets/js/jquery.slicknav.js') }}"></script>
      <script src="{{ url('assets/js/custom.min.js') }}"></script>
   </body>
</html>