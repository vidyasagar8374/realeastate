@extends('layouts.main-master')

@section('title', 'HOMZ - Real Estate Template')

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-main-content heading1">
          <img src="assets/img/elements/star1.png" alt="" class="star1 keyframe5">
          <img src="assets/img/elements/star1.png" alt="" class="star2 keyframe5">
          <h1 class="text-anim">Stunning Homes Await In The <br class="d-lg-block d-none"> Best Neighborhoods</h1>
        </div>
      </div>
      <div class="space74 d-lg-block d-none"></div>
      <div class="space30 d-lg-none d-block"></div>
      <div class="col-lg-3">
        <div class="header-pera heading1">
          <img src="assets/img/elements/star2.png" alt="" class="star3 keyframe5">
          <p class="text-anim">Discover a wide range of exclusive properties tailored to your unique lifestyle and preferences. Whether you’re looking for a cozy apartment in the heart of the.</p>
          <div class="video-btn-area">
            <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="popup-youtube">
              <span class="video"><i class="fa-solid fa-play"></i></span>
              <span class="play">Play Videos</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-7"></div>
      <div class="col-lg-2">
        <div class="all-counter-area">
          <div class="counter-area" data-aos="fade-left" data-aos-duration="800">
            <h2><span class="counter">5.0</span></h2>
            <p> Home Rating Starts</p>
          </div>
          <div class="space60"></div>
          <div class="counter-area" data-aos="fade-left" data-aos-duration="1000">
            <h2><span class="counter">89</span>k+</h2>
            <p>Asset Management</p>
          </div>
          <div class="space60"></div>
          <div class="counter-area" data-aos="fade-left" data-aos-duration="1100">
            <h2>$<span class="counter">40</span>M+</h2>
            <p>Total Asset Sold</p>
          </div>
          <div class="space60"></div>
          <div class="counter-area" data-aos="fade-left" data-aos-duration="1200">
            <img src="assets/img/all-images/others-img1.png" alt="">
            <div class="space16"></div>
            <h2><span class="counter">12</span>K+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>

      </div>
      <div class="col-lg-10 m-auto">
        <div class="header-images text-center">
          <div class="img1" data-aos="fade-down" data-aos-duration="1200">
            <img src="assets/images/header-img1.png" alt="">
            <!-- <img src="assets/images/home-banner-image.jpg" alt=""> -->
          </div>
          <p class="aniamtion-key-1"><img src="assets/img/icons/logo-icon.svg" alt="">100+ New Home Ready</p>

          <div class="circle-area">
           <a href="#"> 
            <img src="assets/img/elements/circle.png" alt="" class="keyframe5 circle">
            <img src="assets/img/icons/arrow2.svg" alt="" class="arrow2"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->
<div class="tabs-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="tabs-area">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Rent</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Buy</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sell</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="all-cities-area">
                <div class="cities">
                  <p>City/State</p>
                  <div class="input-place after">
                    <select name="country"  class="nice-select">
                         <option value="1" data-display="New York City">New York City</option>
                         <option value="">Belgium City</option>
                         <option value="">Brezil City</option>
                         <option value="">Argentina City</option>
                         <option value="">Bangladesh City</option>
                         <option value="">Germany City</option>
                       </select>
                  </div>
                </div>
                <div class="cities">
                  <p>Property </p>
                  <div class="input-place after">
                    <select name="country"  class="nice-select">
                         <option value="1" data-display="Duplex House">Duplex House</option>
                         <option value="">Pine Valley Estates</option>
                         <option value="">Sunset Ridge</option>
                         <option value="">Oakwood Residences</option>
                         <option value="">Riverfront Apartments</option>
                         <option value="">Lakeview Heights</option>
                       </select>
                  </div>
                </div>

                <div class="cities">
                  <p>Price Range </p>
                    <div class="input-place m-0">
                      <select name="country"  class="nice-select">
                           <option value="1" data-display="$4,50,000">$4,50,000</option>
                           <option value="">$5,50,000</option>
                           <option value="">$6,50,000</option>
                           <option value="">$7,50,000</option>
                           <option value="">$8,50,000</option>
                           <option value="">$9,50,000</option>
                         </select>
                    </div>
                </div>

                <div class="cities">
                  <div class="input-place">
                    <a href="#" class="header-btn1">Search <img src="assets/img/icons/search1.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <div class="all-cities-area">
                <div class="cities">
                  <p>City/State</p>
                  <div class="input-place after">
                    <select name="country"  class="nice-select">
                         <option value="1" data-display="New York City">New York City</option>
                         <option value="">Belgium City</option>
                         <option value="">Brezil City</option>
                         <option value="">Argentina City</option>
                         <option value="">Bangladesh City</option>
                         <option value="">Germany City</option>
                       </select>
                  </div>
                </div>
                <div class="cities">
                  <p>Property </p>
                  <div class="input-place after">
                    <select name="country"  class="nice-select">
                         <option value="1" data-display="Duplex House">Duplex House</option>
                         <option value="">Pine Valley Estates</option>
                         <option value="">Sunset Ridge</option>
                         <option value="">Oakwood Residences</option>
                         <option value="">Riverfront Apartments</option>
                         <option value="">Lakeview Heights</option>
                       </select>
                  </div>
                </div>

                <div class="cities">
                  <p>Price Range </p>
                    <div class="input-place m-0">
                      <select name="country"  class="nice-select">
                           <option value="1" data-display="$4,50,000">$4,50,000</option>
                           <option value="">$5,50,000</option>
                           <option value="">$6,50,000</option>
                           <option value="">$7,50,000</option>
                           <option value="">$8,50,000</option>
                           <option value="">$9,50,000</option>
                         </select>
                    </div>
                </div>

                <div class="cities">
                  <div class="input-place">
                    <a href="#" class="header-btn1">Search <img src="assets/img/icons/search1.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
              <div class="all-cities-area">
                <div class="cities">
                  <p>City/State</p>
                  <div class="input-place after">
                    <select name="country"  class="nice-select">
                         <option value="1" data-display="New York City">New York City</option>
                         <option value="">Belgium City</option>
                         <option value="">Brezil City</option>
                         <option value="">Argentina City</option>
                         <option value="">Bangladesh City</option>
                         <option value="">Germany City</option>
                       </select>
                  </div>
                </div>
                <div class="cities">
                  <p>Property </p>
                  <div class="input-place after">
                    <select name="country"  class="nice-select">
                         <option value="1" data-display="Duplex House">Duplex House</option>
                         <option value="">Pine Valley Estates</option>
                         <option value="">Sunset Ridge</option>
                         <option value="">Oakwood Residences</option>
                         <option value="">Riverfront Apartments</option>
                         <option value="">Lakeview Heights</option>
                       </select>
                  </div>
                </div>

                <div class="cities">
                  <p>Price Range </p>
                    <div class="input-place m-0">
                      <select name="country"  class="nice-select">
                           <option value="1" data-display="$4,50,000">$4,50,000</option>
                           <option value="">$5,50,000</option>
                           <option value="">$6,50,000</option>
                           <option value="">$7,50,000</option>
                           <option value="">$8,50,000</option>
                           <option value="">$9,50,000</option>
                         </select>
                    </div>
                </div>

                <div class="cities">
                  <div class="input-place">
                    <a href="#" class="header-btn1">Search <img src="assets/img/icons/search1.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--===== ABOUT AREA STARTS =======-->
<div class="about1-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="about-images-area">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="space90"></div>
              <div class="author-images">
                <div class="img1 image-anime reveal">
                  <img src="assets/images/image2.png" alt="">
                </div>
                <div class="city-area">
                  <div class="icons">
                    <img src="assets/img/icons/logo-icon1.svg" alt="">
                  </div>
                  <div class="content">
                    <a href="property.html">New York City</a>
                    <p>Welcome to Homz where our passion for real estate agency.</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-6 col-md-6">
              <div class="author-images">
                <div class="img1 image-anime reveal">
                  <img src="assets/images/image3.png" alt="">
                </div>
                <div class="space30"></div>
                <div class="img1 image-anime reveal">
                  <img src="assets/images/image4.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="about-content-header heading2">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">About Real Estate Agency</h5>
          <h2 class="text-anim">Experienced Professionals Guiding You Every Step </h2>
          <div class="space24"></div>
          <p class="text-anim">Welcome to Homz where our passion for real estate and dedication to client satisfaction converge to create an unparalleled home-buying experience. Founded in 2015, our company has grown from a small team of enthusiasts to a leading real estate agency.</p>
          <div class="space32"></div>
          <div class="btn-area1 text-anim">
            <a href="about.html" class="header-btn1">Discover More <img src="assets/img/icons/arrow1.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== FEATURES AREA STARTS =======-->
<div class="features1-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 m-auto">
        <div class="features-header text-center heading2">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">Featured Listing</h5>
          <h2 class="text-anim">Our Features Listing</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="features-slider-area owl-carousel">
          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img1.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Villa With Panoramic View</a>
              <p>37254 Abby Lakes Suite 093</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1350 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">3 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$850/ <span>month</span></h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img2.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Sunset Haven Estate</a>
              <p>799 Loma Lodge, Quigleystad</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1250 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">4 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$7,50,000</h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img3.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Willow Brook Residence</a>
              <p>1722 Pollich Heights, Kamronview</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">2000 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">4 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$950/ <span>month</span></h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img1.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Villa With Panoramic View</a>
              <p>37254 Abby Lakes Suite 093</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1350 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">3 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$850/ <span>month</span></h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img2.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Sunset Haven Estate</a>
              <p>799 Loma Lodge, Quigleystad</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1250 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">4 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$7,50,000</h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img3.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Willow Brook Residence</a>
              <p>1722 Pollich Heights, Kamronview</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">2000 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">4 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$950/ <span>month</span></h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img1.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Villa With Panoramic View</a>
              <p>37254 Abby Lakes Suite 093</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1350 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">3 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$850/ <span>month</span></h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img2.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Sunset Haven Estate</a>
              <p>799 Loma Lodge, Quigleystad</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1250 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">4 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$7,50,000</h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>

          <div class="featured-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/features-img3.png" alt="">
            </div>
            <div class="sell-point">
              <a href="property-single.html" class="sell">Sell</a>
              <a href="property-single.html" class="featured">Featured</a>
            </div>
            <div class="content-area">
              <a href="property-single.html">Willow Brook Residence</a>
              <p>1722 Pollich Heights, Kamronview</p>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">2000 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">4 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <div class="price-area">
                <h3>$950/ <span>month</span></h3>
                <a href="#"><img src="assets/img/icons/like.svg" alt="" class="like1"> <img src="assets/img/icons/like1.svg" alt="" class="like2"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FEATURES AREA ENDS =======-->

<!--===== GALLERY AREA STARTS =======-->
<div class="gallery1-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="gallery-header text-center heading2">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">Our Gallery</h5>
          <h2 class="text-anim">You Can Design Clean & Modern Grid Styles</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="galler-author-area" data-aos="fade-up" data-aos-duration="800">
          <div class="img1">
            <img src="assets/images/image5.png" alt="">
          </div>

          <div class="content-area">
            <a href="property.html">Studio Room </a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="galler-author-area" data-aos="fade-up" data-aos-duration="1000" >
          <div class="img1">
            <img src="assets/images/gallery-img4.png" alt="">
          </div>

          <div class="content-area">
            <a href="property.html">Studio Room </a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="galler-author-area" data-aos="fade-up" data-aos-duration="1100" >
          <div class="img1">
            <img src="assets/images/gallery-img2.png" alt="">
          </div>

          <div class="content-area">
            <a href="property.html">Studio Room </a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="galler-author-area" data-aos="fade-up" data-aos-duration="1200" >
          <div class="img1">
            <img src="assets/images/gallery-img5.png" alt="">
          </div>

          <div class="content-area">
            <a href="property.html">Studio Room </a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="galler-author-area" data-aos="fade-up" data-aos-duration="1300" >
          <div class="img1">
            <img src="assets/images/gallery-img6.png" alt="">
          </div>

          <div class="content-area">
            <a href="property.html">Studio Room </a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="galler-author-area active" data-aos="fade-up" data-aos-duration="1400" >
              <div class="img1">
                <img src="assets/images/gallery-img3.png" alt="">
              </div>
    
              <div class="content-area">
                <a href="property.html">Studio Room </a>
                <p>8 Properties</p>
                <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-6">
            <div class="galler-author-area" data-aos="fade-up" data-aos-duration="1500" >
              <div class="img1">
                <img src="assets/images/gallery-img7.png" alt="">
              </div>
    
              <div class="content-area">
                <a href="property.html">Studio Room </a>
                <p>8 Properties</p>
                <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== GALLERY AREA ENDS =======-->

<!--===== PROPERTIES AREA STARTS =======-->
<div class="properties1-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 m-auto">
        <div class="property-header text-center heading2">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">Properties</h5>
          <h2 class="text-anim">Our Properties</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="property-slider-area owl-carousel">
          <div class="property-boxarea">
            <div class="img1 image-anime reveal">
              <img src="assets/img/all-images/property-img1.png" alt="">
            </div>

            <div class="content-area">
              <h2>$7,50,000</h2>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1350 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">3 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <p>1722 Pollich Heights, Kamronview</p>
              <div class="space16"></div>
              <p>Listed by America Ordaz of Real Estate Agency</p>
              <div class="btn-area1">
                <a href="property-sell-rent.html" class="header-btn1">Buy Now <img src="assets/img/icons/arrow3.svg" alt=""></a>
              </div>
            </div>
          </div>

          <div class="property-boxarea">
            <div class="img1 image-anime reveal">
              <img src="assets/img/all-images/property-img2.png" alt="">
            </div>

            <div class="content-area">
              <h2>$7,50,000</h2>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1350 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">3 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <p>1722 Pollich Heights, Kamronview</p>
              <div class="space16"></div>
              <p>Listed by America Ordaz of Real Estate Agency</p>
              <div class="btn-area1">
                <a href="property-sell-rent.html" class="header-btn1">Buy Now <img src="assets/img/icons/arrow3.svg" alt=""></a>
              </div>
            </div>
          </div>

          <div class="property-boxarea">
            <div class="img1 image-anime reveal">
              <img src="assets/img/all-images/property-img3.png" alt="">
            </div>

            <div class="content-area">
              <h2>$7,50,000</h2>
              <ul>
                <li><a href="#"><img src="assets/img/icons/sqft.svg" alt="">1350 sqft</a></li>
                <li><a href="#"><img src="assets/img/icons/bed.svg" alt="">3 Beds</a></li>
                <li class="m-0"><a href="#"><img src="assets/img/icons/bath.svg" alt="">2 Baths</a></li>
              </ul>
              <p>1722 Pollich Heights, Kamronview</p>
              <div class="space16"></div>
              <p>Listed by America Ordaz of Real Estate Agency</p>
              <div class="btn-area1">
                <a href="property-sell-rent.html" class="header-btn1">Buy Now <img src="assets/img/icons/arrow3.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== PROPERTIES AREA ENDS =======-->

<!--===== LOCATION AREA STARTS =======-->
<div class="location1-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="location-header text-center heading2">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">Our Location</h5>
          <h2 class="text-anim">Find Properties In This Cities</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="700">
        <div class="location-images-area">
          <div class="img1">
            <img src="assets/images/location-img1.png" alt="">
          </div>
          <div class="content-area">
            <a href="property.html">Los Angles</a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
        <div class="location-images-area">
          <div class="img1">
            <img src="assets/images/location-img2.png" alt="">
          </div>
          <div class="content-area">
            <a href="property.html">Los Angles</a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-duration="900">
        <div class="location-images-area active">
          <div class="img1">
            <img src="assets/images/location-img6.png" alt="">
          </div>
          <div class="content-area">
            <a href="property.html">Los Angles</a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
        <div class="location-images-area">
          <div class="img1">
            <img src="assets/images/location-img3.png" alt="">
          </div>
          <div class="content-area">
            <a href="property.html">Los Angles</a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1100">
        <div class="location-images-area">
          <div class="img1">
            <img src="assets/images/location-img4.png" alt="">
          </div>
          <div class="content-area">
            <a href="property.html">Los Angles</a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
        <div class="location-images-area">
          <div class="img1">
            <img src="assets/images/location-img5.png" alt="">
          </div>
          <div class="content-area">
            <a href="property.html">Los Angles</a>
            <p>8 Properties</p>
            <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== LOCATION AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="testimonia-header heading2 text-center">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">Testimonials</h5>
          <h2 class="text-anim">Real Stories from Happy Homeowners</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="testimonial-sliders">
          <div class="row align-items-center">
           <div class="col-lg-6">
             <div class="teimonial-slider-nav-area foter-carousel">
               <div class="testimonial-slider-img reveal image-anime">
                 <img src="assets/images/testimonial-img1.png" alt="">
               </div>
               <div class="testimonial-slider-img reveal image-anime">
                <img src="assets/images/testimonial-img3.png" alt="">
               </div>
               <div class="testimonial-slider-img reveal image-anime">
                <img src="assets/images/testimonial-img4.png" alt="">
               </div>
               <div class="testimonial-slider-img reveal image-anime">
                <img src="assets/images/testimonial-img1.png" alt="">
               </div>
               <div class="testimonial-slider-img reveal image-anime">
                <img src="assets/images/testimonial-img3.png" alt="">
               </div>
               <div class="testimonial-slider-img reveal image-anime">
                <img src="assets/images/testimonial-img4.png" alt="">
               </div>
             </div>
           </div>

           <div class="col-lg-6">
            <div class="testimonial-content-slider slider-nav1">
              <div class="testemonial-boxarea">
                <div class="img">
                  <img src="assets/img/icons/quito.svg" alt="">
                </div>
                <div class="space32"></div>
                <div class="content-area">
                  <h4>Professional & Personable</h4>
                  <p>"From the moment we met our agent, we knew we were in good hands. Homz Real Estae Agency made buying our first home a wonderful experience. They were always available to answer our questions and guide us through the process with patience and professionalism."</p>
                </div>
                <div class="author-content">
                  <div class="img1">
                    <img src="assets/img/all-images/testimonial-img2.png" alt="">
                  </div>
                  <div class="content">
                    <a href="agent.html">James Emily</a>
                    <p>First Time Buyer</p>
                  </div>
                </div>
              </div>

              <div class="testemonial-boxarea">
                <div class="img">
                  <img src="assets/img/icons/quito.svg" alt="">
                </div>
                <div class="space32"></div>
                <div class="content-area">
                  <h4>Professional & Personable</h4>
                  <p>"From the moment we met our agent, we knew we were in good hands. Homz Real Estae Agency made buying our first home a wonderful experience. They were always available to answer our questions and guide us through the process with patience and professionalism."</p>
                </div>
                <div class="author-content">
                  <div class="img1">
                    <img src="assets/img/all-images/testimonial-img2.png" alt="">
                  </div>
                  <div class="content">
                    <a href="agent.html">James Emily</a>
                    <p>First Time Buyer</p>
                  </div>
                </div>
              </div>

              <div class="testemonial-boxarea">
                <div class="img">
                  <img src="assets/img/icons/quito.svg" alt="">
                </div>
                <div class="space32"></div>
                <div class="content-area">
                  <h4>Professional & Personable</h4>
                  <p>"From the moment we met our agent, we knew we were in good hands. Homz Real Estae Agency made buying our first home a wonderful experience. They were always available to answer our questions and guide us through the process with patience and professionalism."</p>
                </div>
                <div class="author-content">
                  <div class="img1">
                    <img src="assets/img/all-images/testimonial-img2.png" alt="">
                  </div>
                  <div class="content">
                    <a href="agent.html">James Emily</a>
                    <p>First Time Buyer</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonial-arrows">
              <div class="testimonial-prev-arrow">
                <button><i class="fa-solid fa-arrow-left"></i></button>
              </div>
              <div class="testimonial-next-arrow">
                <button><i class="fa-solid fa-arrow-right"></i></button>
              </div>
            </div>
          </div>
          </div>
       </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog1-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="blog1-header heading2 text-center">
          <h5><img src="assets/img/icons/logo-icon1.svg" alt="">Our Blog</h5>
          <h2 class="text-anim">Our Latest Blog & News</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
        <div class="blog-author-boxarea">
          <div class="img1 image-anime">
            <img src="assets/images/blog-img1.png" alt="">
          </div>
          <div class="date">
            <a href="#">12 May 2024</a>
          </div>
          <div class="content-area">
            <ul>
              <li><a href="#"><span>#</span>Property</a></li>
              <li><a href="#"><span><img src="assets/img/icons/author1.svg" alt=""></span>Anderson</a></li>
            </ul>
            <div class="space16"></div>
            <a href="blog-single.html">Stay Informed: The Latest Trends And Insights <br class="d-lg-block d-none"> In The Real Estate Market</a>
            <a href="blog-single.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
        <div class="blog-author-boxarea">
          <div class="img1 image-anime">
            <img src="assets/images/blog-img2.png" alt="">
          </div>
          <div class="date">
            <a href="#">10 May 2024</a>
          </div>
          <div class="content-area">
            <ul>
              <li><a href="#"><span>#</span>Property</a></li>
              <li><a href="#"><span><img src="assets/img/icons/author1.svg" alt=""></span>Jhon Doe</a></li>
            </ul>
            <div class="space16"></div>
            <a href="blog-single.html">Home Buying, Selling, and Beyond Comprehensive <br class="d-lg-block d-none"> Real Estate Articles and Updates</a>
            <a href="blog-single.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact1-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto">
        <div class="contact-header text-center heading2">
          <h5 class="text-anim"><img src="assets/img/icons/logo-icon1.svg" alt="">Valuation</h5>
          <h2 class="text-anim">Request Your Property Valuation</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-10 m-auto" data-aos="zoom-in" data-aos-duration="1000">
        <div class="contact-author-boxarea">
          <h3>Personal Information</h3>
          <div class="row">
            <div class="col-lg-4">
              <div class="contact-input-area">
                <select name="country"  class="nice-select">
                  <option value="1" data-display="Select">Select</option>
                  <option value="">Residential Property</option>
                  <option value="">Commercial Property</option>
                  <option value="">Industrial Property</option>
                  <option value="">Land Property</option>
                  <option value="">Mixed-Use Property</option>
                </select>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="text" placeholder="First Name">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="text" placeholder="Last Name">
              </div>
            </div>

            <div class="col-lg-8">
              <div class="contact-input-area">
                <input type="email" placeholder="Email Address">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="number" placeholder="Phone Number">
              </div>
            </div>
            <div class="space50"></div>
            <h3>Property Information</h3>
          <div class="row">
            <div class="col-lg-4">
              <div class="contact-input-area">
                <select name="country"  class="nice-select">
                  <option value="1" data-display="Type">Type</option>
                  <option value="">Residential Property</option>
                  <option value="">Commercial Property</option>
                  <option value="">Industrial Property</option>
                  <option value="">Land Property</option>
                  <option value="">Mixed-Use Property</option>
                </select>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="text" placeholder="Zip Code">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <select name="country"  class="nice-select">
                  <option value="1" data-display="City">City</option>
                  <option value="">France City</option>
                  <option value="">Belgium City</option>
                  <option value="">Norway City</option>
                  <option value="">Italy City</option>
                  <option value="">Denmark City</option>
                </select>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="text" placeholder="Number of Bedrooms">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="text" placeholder="N. of bathrooms">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="contact-input-area">
                <input type="text" placeholder="Your Budget">
              </div>
            </div>
            <div class="space16"></div>
            <div class="col-lg-12">
              <div class="contact-input-area">
                <button type="submit" class="header-btn1">Submit Now <img src="assets/img/icons/arrow1.svg" alt=""></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--===== CONTACT AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta1-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="cta-header heading1">
          <h2 class="text-anim">We’re Here To Find Your New Home Project.</h2>
        </div>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-4">
        <div class="cta-btn-area">
          <a href="contact.html" class="header-btn1">Get a Quote <img src="assets/img/icons/arrow1.svg" alt=""></a>
          <a href="property.html" class="header-btn1 btn1">Our Property <img src="assets/img/icons/arrow1.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->
@endsection
