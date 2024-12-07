

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>

     <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/fav-logo1.png') }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
</head>
<body class="homepage1-body">

<!--===== PRELOADER STARTS =======-->
<div id="preloader">
  <div class="home-icon">
    <div class="roof"></div>
    <div class="walls"></div>
    <div class="door"></div>
      <div class="windows">
          <div class="window"></div>
          <div class="window"></div>
      </div>
  </div>
  <div id="ctn-preloader" class="ctn-preloader">
    <div class="animation-preloader">
        <div class="txt-loading">
            <span data-text-preloader="H" class="letters-loading">
              H
            </span>
            <span data-text-preloader="O" class="letters-loading">
               O
            </span>
            <span data-text-preloader="M" class="letters-loading">
                M
            </span>
            <span data-text-preloader="Z" class="letters-loading">
                Z
            </span>
        </div>
    </div>
  </div>
</div>
<!--===== PRELOADER ENDS =======-->

  <!--===== PAGE PROGRESS START=======-->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
      </svg>
    </div>
  </div>
<!--===== PAGE PROGRESS END=======-->

   <!--=====HEADER START=======-->
   <header>
    <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index.html"><img src="assets/img/logo/logo1.png" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                    <div class="tp-submenu">
                      <div class="row">
                         <div class="col-lg-12">
                          <div class="all-images-menu">
                            <div class="homemenu-thumb">
                              <div class="img1">
                              <img src="assets/img/demo/demo-img1.png" alt="">
                              </div>
                               <div class="homemenu-btn">
                                <a class="header-btn1" href="index.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                                <div class="space16"></div>
                                <a class="header-btn1" href="single-index1.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                               </div>
                            </div>
                         
                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo-img2.png" alt="">
                            </div>
                             <div class="homemenu-btn">
                              <a class="header-btn1" href="index2.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" href="single-index2.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                             </div>
                          </div>


                        <div class="homemenu-thumb">
                          <div class="img1">
                            <img src="assets/img/demo/demo-img3.png" alt="">
                          </div>
                           <div class="homemenu-btn">
                            <a class="header-btn1" href="index3.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="space16"></div>
                            <a class="header-btn1" href="single-index3.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                           
                          </div>
                        </div>

                      <div class="homemenu-thumb">
                        <div class="img1">
                          <img src="assets/img/demo/demo-img4.png" alt="">
                        </div>
                         <div class="homemenu-btn">
                          <a class="header-btn1" href="index4.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                          <div class="space16"></div>
                          <a class="header-btn1" href="single-index4.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                         
                        </div>
                      </div>

                    <div class="homemenu-thumb" style="margin: 0;">
                      <div class="img1">
                        <img src="assets/img/demo/demo-img5.png" alt="">
                      </div>
                       <div class="homemenu-btn">
                        <a class="header-btn1" href="index5.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="space16"></div>
                        <a class="header-btn1" href="single-index5.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                       
                      </div>
                    </div>
                        </div>
                      </div>
                    </div>
                   </div>
                  </li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="#">Property <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="property.html">Property</a></li>
                      <li><a href="property-location.html">Property Location</a></li>
                      <li><a href="property-sell-rent.html">House Sale Rent </a></li>
                      <li><a href="property-listing.html">Property Listing</a></li>
                      <li><a href="property-listing-left.html">Property Listing Left</a></li>
                      <li><a href="property-listing-right.html"> Property Listing Right</a></li>
                      <li><a href="property-single.html">Property Single</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blogs <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="dropdown-padding">
                    <li><a href="blog.html">Blog One</a></li>
                    <li><a href="blog2.html">Blog Two</a></li>
                    <li><a href="blog-left.html">Blog Details Left</a></li>
                    <li><a href="blog-right.html">Blog Details Right</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Pages <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="agency.html">Our Agency</a></li>
                      <li><a href="agency-details.html">Agency Single</a></li>
                      <li><a href="agent.html">Our Agent</a></li>
                      <li><a href="agent-details.html">Agent Single</a></li>
                      <li><a href="faq.html">FAQ,S</a></li>
                      <li><a href="404.html">404</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="btn-area">
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><img src="assets/img/icons/search1.svg" alt=""></a>
                </div>
                <a href="property.html" class="header-btn1">Visit Our Property <img src="assets/img/icons/arrow1.svg" alt=""></a>
              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                    <form role="search" class="search-form">
                    <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><img src="assets/img/icons/search1.svg" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="body-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
 <div class="mobile-header mobile-haeder1 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars-staggered"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar1">
  <div class="logosicon-area">
    <div class="logos">
      <img src="assets/img/logo/logo2.png" alt="">
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
   </div>
  <div class="mobile-nav mobile-nav1">
    <ul class="mobile-nav-list nav-list1">
      <li><a href="#" >Home </a>
        <ul class="sub-menu">
          <li>
            <a href="#">Multiple Page</a>
            <ul class="sub-menu">
              <li><a href="index.html">Home One</a></li>
              <li><a href="index2.html">Home Two</a></li>
              <li><a href="index3.html">Home Three</a></li>
              <li><a href="index4.html">Home Four</a></li>
              <li><a href="index5.html">Home Five</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Landing Page</a>
            <ul class="sub-menu">
              <li><a href="single-index1.html">Home One</a></li>
              <li><a href="single-index2.html">Home Two</a></li>
              <li><a href="single-index3.html">Home Three</a></li>
              <li><a href="single-index4.html">Home Four</a></li>
              <li><a href="single-index5.html">Home Five</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="about.html">About</a></li>
      <li><a href="features.html">Property</a>
        <ul class="sub-menu">
          <li><a href="property.html">Property</a></li>
          <li><a href="property-location.html">Property Location</a></li>
          <li><a href="property-sell-rent.html">House Sale Rent </a></li>
          <li><a href="property-listing.html">Property Listing</a></li>
          <li><a href="property-listing-left.html">Property Listing Left</a></li>
          <li><a href="property-listing-right.html"> Property Listing Right</a></li>
          <li><a href="property-single.html">Property Single</a></li>
        </ul>
      </li>
      <li><a href="#">Blogs</a>
        <ul class="sub-menu">
          <li><a href="blog.html">Blog One</a></li>
          <li><a href="blog2.html">Blog Two</a></li>
          <li><a href="blog-left.html">Blog Left</a></li>
          <li><a href="blog-right.html">Blog Right</a></li>
          <li><a href="blog-single.html">Blog Single</a></li>
        </ul>
      </li>
      <li><a href="#">Pages</a>
        <ul class="sub-menu">
          <li><a href="agency.html">Our Agency</a></li>
          <li><a href="agency-details.html">Agency Single</a></li>
          <li><a href="agent.html">Our Agent</a></li>
          <li><a href="agent-details.html">Agent Single</a></li>
          <li><a href="faq.html">FAQ,S</a></li>
          <li><a href="404.html">404</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <div class="allmobilesection">
      <a href="contact.html"  class="header-btn1">Contact Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
      <div class="single-footer">
        <h3>Contact Info</h3>
        <div class="footer1-contact-info">
          <div class="contact-info-single">
            <div class="contact-info-icon">
              <span><i class="fa-solid fa-phone-volume"></i></span>
            </div>
            <div class="contact-info-text">
              <a href="tel:+3(924)4596512">+3(924)4596512</a>
            </div>
          </div>
          <div class="contact-info-single">
            <div class="contact-info-icon">
              <span><i class="fa-solid fa-envelope"></i></span>
            </div>
            <div class="contact-info-text">
              <a href="mailto:info@example.com">info@example.com</a>
            </div>
          </div>
          <div class="single-footer">
            <h3>Our Location</h3>
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <span><i class="fa-solid fa-location-dot"></i></span>
              </div>
              <div class="contact-info-text">
                <a href="mailto:info@example.com" >55 East Birchwood Ave.Brooklyn, <br> New York 11201,United States</a>
              </div>
            </div>
          </div>
          <div class="single-footer">
            <h3>Social Links</h3> 
            <div class="social-links-mobile-menu">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

@yield('content')

<!--===== FOOTER AREA STARTS =======-->
<div class="footer1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="footer-logo-area">
          <img src="assets/img/logo/logo1.png" alt="">
          <div class="space32"></div>
          <h4>Newsletter Subscription</h4>
          <div class="space16"></div>
          <p>At Homz, we are committed to providing exceptional service and support. Whether you are looking buy, sell, or invest in real estate, our team is here help.</p>
          <form>
            <input type="text" placeholder="Enter Your Email">
            <button type="submit" class="header-btn1">Discover More <img src="assets/img/icons/arrow1.svg" alt=""></button>
          </form>
          <ul>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg col-md-6">
        <div class="footer-header padding-left1">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="about.html">About Us</a></li>
            <li><a href="property.html">Properties</a></li>
            <li><a href="property-listing.html">Listings</a></li>
            <li><a href="blog.html">Blog News</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg col-md-6">
        <div class="footer-header padding-left">
          <h3>Legal</h3>
          <ul>
            <li><a href="#">Apartment</a></li>
            <li><a href="#">My House</a></li>
            <li><a href="#">Interiors</a></li>
            <li><a href="#">Square Area</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg col-md-6">
        <div class="footer-header">
          <h3>Quick Links</h3>
          <ul>
            <li><span><img src="assets/img/icons/location1.svg" alt=""></span><a href="#">570 White Mission Apt. hellerborough</a></li>
            <li><span><img src="assets/img/icons/call1.svg" alt=""></span><a href="tel:(925)683-1469">(925) 683-1469</a></li>
            <li><span><img src="assets/img/icons/mail1.svg" alt=""></span><a href="mailto:social@homz.com">social@homz.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="space50 d-lg-block d-none"></div>
    <div class="space30 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright">
          <div class="pera">
            <p>ⓒCopyright 2024 Homz . All rights reserved</p>
          </div>
          <ul>
            <li><a href="#">Terms & Condition |</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->

<!--===== JS SCRIPT LINK =======-->
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counter.js') }}"></script>
<script src="{{ asset('assets/js/plugins/sidebar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/mobilemenu.js') }}"></script>
<script src="{{ asset('assets/js/plugins/owlcarousel.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick-slider.js') }}"></script>
<script src="{{ asset('assets/js/plugins/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/Splitetext.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>