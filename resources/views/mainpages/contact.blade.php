@extends('layouts.main-master')

@section('title', 'Contact Us')

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="inner2-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="inner-header heading1 text-center">
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i>  <span> Contact Us </span></a>
                    <div class="space20"></div>
                    <h2> Contact Us </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact-inner-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-inner-header heading2">
                    <h5><img src="assets/img/icons/logo-icon1.svg" alt="">Contact Us</h5>
                    <h2>Get In Touch With Us: Your Real Estate Partner</h2>
                    <div class="space16"></div>
                    <p>We are here to assist you with all your real estate needs. Whether you are buying, selling, renting, or investing, our experienced team is ready to provide you with the support and expertise you need.</p>
                    <ul> 
                        <li><a href="#"><img src="assets/img/icons/location1.svg" alt=""> 570 White Mission Apt. hellerborough</a></li>
                        <li><a href="tel:(925)683-1469"><img src="assets/img/icons/call1.svg" alt=""> (925) 683-1469</a></li>
                        <li><a href="mailto:mike@homz.com"><img src="assets/img/icons/mail1.svg" alt=""> mike@homz.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-contact-boxarea">
                    <h3>Schedule an Appointment</h3>
                    <div class="space4"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-area">
                                <input type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-area">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-area">
                                <input type="email" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="input-area">
                                <input type="number" placeholder="Phone">
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="input-area">
                                <input type="text" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-area">
                                <textarea placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-area">
                                <button type="submit" class="header-btn1">Send Now <img src="assets/img/icons/arrow1.svg" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

<!--===== FAQ AREA STARTS =======-->
<div class="faq-section-area sp1 bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="faq-header-area heading2 text-center">
                    <h5><img src="assets/img/icons/logo-icon1.svg" alt="">FAQ’S</h5>
                    <h2>Everything You Need To know</h2>
                </div>
                <div class="space60 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="accordian-area">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What are the first steps to buying a home?
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How do I find the right real estate agent?
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                What should I look for when viewing homes?
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                          </div>
                        </div>
                        <div class="space16"></div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                How do I determine my budget for buying a home?
                              </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                            </div>
                          </div>
                          <div class="space16"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                What is a home inspection and why is it important?
                              </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                            </div>
                          </div>
                          <div class="space16"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                What are closing costs and how much should I expect to pay?
                              </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                            </div>
                          </div>
                          <div class="space16"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                3. What is the difference between pre-qualification and pre-approval for a mortgage?
                              </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Pre-qualification is an initial assessment of your income, debt, and credit score to give you an estimate of how much you might be able to borrow. It’s a quick and informal process. Pre-approval, on the other hand, is a more thorough evaluation where the lender verifies your financial information and credit history. Pre-approval involves submitting documentation and provides a specific loan amount, which can make you a more attractive buyer to sellers.</div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== FAQ AREA ENDS =======-->

<!--===== LOCATION AREA STARTS =======-->
<div class="location1-section-area sp2" style="background: none;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="location-header text-center heading2">
            <h5><img src="assets/img/icons/logo-icon1.svg" alt="">Our Location</h5>
            <h2>Find Properties In This Cities</h2>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="location-images-area">
            <div class="img1">
              <img src="assets/img/all-images/location-img1.png" alt="">
            </div>
            <div class="content-area">
              <a href="property.html">Los Angles</a>
              <p>8 Properties</p>
              <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="location-images-area">
            <div class="img1">
              <img src="assets/img/all-images/location-img2.png" alt="">
            </div>
            <div class="content-area">
              <a href="property.html">Los Angles</a>
              <p>8 Properties</p>
              <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-5 col-md-6">
          <div class="location-images-area active">
            <div class="img1">
              <img src="assets/img/all-images/location-img6.png" alt="">
            </div>
            <div class="content-area">
              <a href="property.html">Los Angles</a>
              <p>8 Properties</p>
              <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-5 col-md-6">
          <div class="location-images-area">
            <div class="img1">
              <img src="assets/img/all-images/location-img3.png" alt="">
            </div>
            <div class="content-area">
              <a href="property.html">Los Angles</a>
              <p>8 Properties</p>
              <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="location-images-area">
            <div class="img1">
              <img src="assets/img/all-images/location-img4.png" alt="">
            </div>
            <div class="content-area">
              <a href="property.html">Los Angles</a>
              <p>8 Properties</p>
              <a href="property.html" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="location-images-area">
            <div class="img1">
              <img src="assets/img/all-images/location-img5.png" alt="">
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
          <a href="contact.html" class="header-btn1">Get a Quote <img src="assets/img/icons/arrow1.svg" alt=""></a>
          <a href="property.html" class="header-btn1 btn1">Our Property <img src="assets/img/icons/arrow1.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

@endsection