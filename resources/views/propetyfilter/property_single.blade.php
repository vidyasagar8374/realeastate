@extends('layouts.main-master')

@section('title', 'HOMZ - Real Estate Template')

@section('content')

   <!--=====HEADER START=======-->
   <header  class="homepage1-body">
    <div class="header-area homepage1 inner-menu header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo/logo2.png') }}" alt=""></a>
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
                              <img src="{{ asset('assets/img/demo/demo-img1.png') }}" alt="">
                              </div>
                               <div class="homemenu-btn">
                                <a class="header-btn1" href="index.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                                <div class="space16"></div>
                                <a class="header-btn1" href="single-index1.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                               </div>
                            </div>
                         
                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="{{ asset('assets/img/demo/demo-img2.png') }}" alt="">
                            </div>
                             <div class="homemenu-btn">
                              <a class="header-btn1" href="index2.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" href="single-index2.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                             </div>
                          </div>


                        <div class="homemenu-thumb">
                          <div class="img1">
                            <img src="{{ asset('assets/img/demo/demo-img3.png') }}" alt="">
                          </div>
                           <div class="homemenu-btn">
                            <a class="header-btn1" href="index3.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="space16"></div>
                            <a class="header-btn1" href="single-index3.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                           
                          </div>
                        </div>

                      <div class="homemenu-thumb">
                        <div class="img1">
                          <img src="{{ asset('assets/img/demo/demo-img4.png') }}" alt="">
                        </div>
                         <div class="homemenu-btn">
                          <a class="header-btn1" href="index4.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                          <div class="space16"></div>
                          <a class="header-btn1" href="single-index4.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                         
                        </div>
                      </div>

                    <div class="homemenu-thumb" style="margin: 0;">
                      <div class="img1">
                        <img src="{{ asset('assets/img/demo/demo-img5.png') }}" alt="">
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
                  <a href="#"><img src="{{ asset('assets/img/icons/search1.svg') }}" alt=""></a>
                </div>
                <a href="property.html" class="header-btn1">Visit Our Property <img src="{{ asset('assets/img/icons/arrow1.svg') }}" alt=""></a>
              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                    <form role="search" class="search-form">
                    <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><img src="{{ asset('assets/img/icons/search1.svg') }}" alt=""></button>
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
          <a href="index.html"><img src="{{ asset('assets/img/logo/logo2.png') }}" alt=""></a>
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
      <img src="{{ asset('assets/img/logo/logo2.png') }}" alt="">
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

<!--===== HERO AREA STARTS =======-->
<div class="inner2-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="inner-header heading1 text-center">
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> Property <i class="fa-solid fa-angle-right"></i> <span>Property Single</span></a>
                    <div class="space20"></div>
                    <h2>Cozy Cottage In Napa Valley</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== PROPERTY AREA STARTS =======-->
<div class="property-single-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading2 single-header">
                    <div class="content">
                        <h4><img src="{{ asset('assets/img/icons/location1.svg') }}" alt="">8502 Preston Rd. Inglewood, Maine 98380</h4>
                        <div class="space16"></div>
                        <h2>Cozy Cottage In Napa Valley</h2>
                    </div>

                    <div class="btn-area1">
                        <a href="property.html" class="header-btn1">Browse All Properties <img src="{{ asset('assets/img/icons/arrow1.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="img1 image-anime reveal">
                    <img src="{{ asset('assets/img/all-images/single-img1.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="images-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime reveal">
                                <img src="{{ asset('assets/img/all-images/single-img2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime reveal">
                                <img src="{{ asset('assets/img/all-images/single-img3.png') }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime reveal">
                                <img src="{{ asset('assets/img/all-images/single-img4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="img1 image-anime reveal">
                                <img src="{{ asset('assets/img/all-images/single-img5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="property-single-area heading2">
                    <div class="space50 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <h3>Property Details</h3>
                    <ul>
                        <li><a href="#"><img src="{{ asset('assets/img/icons/sqft.svg') }}" alt="">1350 sqft</a></li>
                        <li><a href="#"><img src="{{ asset('assets/img/icons/bed.svg') }}" alt="">3 Beds</a></li>
                        <li class="m-0"><a href="#"><img src="{{ asset('assets/img/icons/bath.svg') }}" alt="">2 Baths</a></li>
                    </ul>
                    <div class="space50 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <h3>About The Property</h3>
                    <div class="space24"></div>
                    <p>Welcome to 8502 Preston Rd. Inglewood, Maine 98380, an exquisite urban retreat nestled in the heart of San Francisco, CA. This luxurious apartment offers the perfect blend of modern living and city  convenience, providing an unparalleled lifestyle experience.</p>
                    <div class="space50 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <h3>Key Features</h3>
                    <div class="boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/location1.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Location:</span> Situated in the vibrant neighborhood of Calishire, this property offers easy access to some of San Francisco's best dining, shopping, and entertainment options. With excellent public transportation links, you're just minutes away from all the city has to offer.</p>
                        </div>
                    </div>

                    <div class="boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/bed.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Bedrooms:</span> 3 spacious bedrooms, each designed with comfort and style in mind. The master suite features a walk-in closet and a private balcony with stunning city views.</p>
                        </div>
                    </div>

                    <div class="boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/bath.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Bathrooms:</span> 2.5 elegantly appointed bathrooms with high-end fixtures and finishes, including a spa-like master bath with a soaking tub and separate shower.</p>
                        </div>
                    </div>

                    <div class="boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/sqft.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Living Space:</span> 1,350 square feet of thoughtfully designed living space, boasting an open floor plan that seamlessly connects the living, dining, and kitchen areas. Large windows flood the space with natural light, creating a warm and inviting atmosphere.</p>
                        </div>
                    </div>

                    <div class="boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/kitchen.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Kitchen:</span> A chef's dream kitchen equipped with state-of-the-art stainless steel appliances, quartz countertops, and custom cabinetry. The large island provides ample space for meal preparation and casual dining.</p>
                        </div>
                    </div>

                    <div class="space50 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <h3>Detailed Description</h3>
                    <div class="space24"></div>
                    <p>Step into this stunning apartment and be greeted by an expansive living area that is perfect for both relaxation and entertaining. The open-concept design allows for seamless flow between the living room, dining area, and gourmet kitchen. Floor-to-ceiling windows provide breathtaking views of the San Francisco skyline, while flooding the space with natural light.</p>
                    <div class="space24"></div>
                    <p>The gourmet kitchen is a highlight, featuring top-of-the-line appliances, sleek quartz countertops, and custom cabinetry. Whether you're a seasoned chef or just enjoy cooking for friends and family, this kitchen is equipped to meet all your culinary needs.</p>
                    <div class="space24"></div>
                    <p>Retreat to the master suite, a luxurious sanctuary complete with a walk-in closet and an en-suite bathroom that rivals any spa. Enjoy a long soak in the tub or a refreshing shower in the separate glass-enclosed stall. The two additional bedrooms are equally spacious and share a beautifully appointed full bathroom.</p>
                    <div class="space50 d-lg-block d-none"></div>
                    <div class="space30 d-lg-none d-block"></div>
                    <h3>Neighborhood</h3>
                    <div class="space24"></div>
                    <p>Located in the trendy Calishire neighborhood, this apartment is perfectly positioned to enjoy all that San Francisco has to offer. From world-class restaurants and boutiques to cultural landmarks and green spaces, everything you need is just a short walk or ride away. Excellent public transport links make commuting a breeze, whether you're headed to the Financial District, SOMA, or beyond.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="agent-single-area">
                    <div class="space50 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
                <div class="single-contact-area heading2">
                    <a href="property-single.html" class="sell">For Rent</a>
                    <div class="space24"></div>
                    <h3>$850 <span>/Month</span></h3>
                    <div class="space24"></div>
                    <p>For more information or to schedule a private showing, please contact</p>
                    <div class="space24"></div>
                    <div class="input-area">
                        <input type="text" placeholder="Your Name">
                    </div>
                    <div class="space16"></div>
                    <div class="input-area">
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="space16"></div>
                    <div class="input-area">
                        <input type="number" placeholder="Phone Number">
                    </div>
                    <div class="space24"></div>
                    <div class="input-area">
                       <button class="header-btn1" type="submit">Request Information <img src="{{ asset('assets/img/icons/arrow1.svg') }}" alt=""></button>
                    </div>
                </div>
                <div class="space32"></div>
                <div class="agent-boxarea">
                    <h3>Reach The Agent</h3>
                    <div class="space24"></div>
                    <div class="left-area">
                        <div class="img1">
                            <img src="{{ asset('assets/img/all-images/agent-img1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Doe</h3>
                            <div class="space12"></div>
                            <a href="tel:(925)683-1469"><img src="{{ asset('assets/img/icons/call1.svg') }}" alt=""> (925) 683-1469</a>
                            <div class="space12"></div>
                            <a href="mailto:demo@gmail.com"><img src="{{ asset('assets/img/icons/mail1.svg') }}" alt=""> demo@gmail.com</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===== OTHERS AREA STARTS =======-->
<div class="others-inner-section-area sp1 bg1">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 m-auto">
          <div class="social-header text-center heading2">
            <h5 class="text-anim">
              <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">Instagram
            </h5>
            <h2 class="text-anim">Instagram Worthy Homes</h2>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-12">
          <div class="slider-images-area owl-carousel">
            <div class="auhtor-boxes-area">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/insta-img1.png') }}" alt="">
              </div>
              <div class="icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
  
            <div class="auhtor-boxes-area">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/insta-img2.png') }}" alt="">
              </div>
              <div class="icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
  
            <div class="auhtor-boxes-area">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/insta-img3.png') }}" alt="">
              </div>
              <div class="icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
  
            <div class="auhtor-boxes-area">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/insta-img4.png') }}" alt="">
              </div>
              <div class="icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
  
            <div class="auhtor-boxes-area">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/insta-img5.png') }}" alt="">
              </div>
              <div class="icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
  
            <div class="auhtor-boxes-area">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/insta-img6.png') }}" alt="">
              </div>
              <div class="icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA ENDS =======-->

<div class="property-inner-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="heading2 text-center">
                    <h2>More Properties</h2>
                </div>
                <div class="space60 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="property-boxarea">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/property-img4.png') }}" alt="">
              </div>
              <div class="sell-point">
                <a href="property-single.html" class="sell">For Rent</a>
              </div>
              <div class="content-area">
                <a href="property-single.html">Cozy Cottage In Napa Valley</a>
                <p>8502 Preston Rd. Inglewood, Maine 98380</p>
                <ul>
                  <li><a href="property-single.html"><img src="{{ asset('assets/img/icons/sqft.svg') }}" alt="">1350 sqft</a></li>
                  <li><a href="property-single.html"><img src="{{ asset('assets/img/icons/bed.svg') }}" alt="">3 Beds</a></li>
                  <li class="m-0"><a href="property-single.html"><img src="{{ asset('assets/img/icons/bath.svg') }}" alt="">2 Baths</a></li>
                </ul>
                <div class="price-area">
                  <h3>$850/ <span>month</span></h3>
                  <div class="btn-area1">
                    <a href="property-single.html" class="header-btn1">Rent</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="property-boxarea">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/property-img5.png') }}" alt="">
              </div>
              <div class="sell-point">
                <a href="property-single.html" class="sell">For Sale</a>
              </div>
              <div class="content-area">
                <a href="property-single.html">Luxurious Family Home</a>
                <p>68729 Becker Branch Suite 508,USA</p>
                <ul>
                  <li><a href="property-single.html"><img src="{{ asset('assets/img/icons/sqft.svg') }}" alt="">1350 sqft</a></li>
                  <li><a href="property-single.html"><img src="{{ asset('assets/img/icons/bed.svg') }}" alt="">3 Beds</a></li>
                  <li class="m-0"><a href="property-single.html"><img src="{{ asset('assets/img/icons/bath.svg') }}" alt="">2 Baths</a></li>
                </ul>
                <div class="price-area">
                  <h3>$9,57,000</h3>
                  <div class="btn-area1">
                    <a href="property-single.html" class="header-btn1">Buy</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="property-boxarea">
              <div class="img1">
                <img src="{{ asset('assets/img/all-images/property-img6.png') }}" alt="">
              </div>
              <div class="sell-point">
                <a href="#" class="sell">For Rent</a>
              </div>
              <div class="content-area">
                <a href="property-single.html">Modern Apartment In LA</a>
                <p>12414 Zulauf Tunnel Apt. 160 Caliashire</p>
                <ul>
                  <li><a href="property-single.html"><img src="{{ asset('assets/img/icons/sqft.svg') }}" alt="">1350 sqft</a></li>
                  <li><a href="property-single.html"><img src="{{ asset('assets/img/icons/bed.svg') }}" alt="">3 Beds</a></li>
                  <li class="m-0"><a href="property-single.html"><img src="{{ asset('assets/img/icons/bath.svg') }}" alt="">2 Baths</a></li>
                </ul>
                <div class="price-area">
                  <h3>$950/ <span>month</span></h3>
                  <div class="btn-area1">
                    <a href="property-single.html" class="header-btn1">Rent</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<!--===== PROPERTY AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta1-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="cta-header heading1">
          <h2 >We’re Here To Find Your New Home Project.</h2>
        </div>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-4">
        <div class="cta-btn-area">
          <a href="contact.html" class="header-btn1">Get a Quote <img src="{{ asset('assets/img/icons/arrow1.svg') }}" alt=""></a>
          <a href="property.html" class="header-btn1 btn1">Our Property <img src="{{ asset('assets/img/icons/arrow1.svg') }}" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->
@endsection