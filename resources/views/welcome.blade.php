@extends('layouts.front')

@section('title', $title)
@section('meta_keywords',  $meta_keywords)
@section('meta_descriptions', $meta_descriptions)

@section('content')
<main id="content" class="site-main">
            <!-- Home banner html start -->
            <section class="home-banner-section">
               <div class="home-banner-items">
                  <div class="banner-inner-wrap" style="background-image: url(assets/images/slider-banner-2.jpg);"></div>
                     <div class="banner-content-wrap">
                        <div class="container">
                           <div class="row align-items-center">
                              <div class="col-lg-8">
                                 <div class="banner-content section-heading section-heading-white">
                                    <h5>EXPLORE. DISCOVER. TRAVEL</h5>
                                    <h2 class="banner-title">JOURNEY TO EXPLORE INDIA </h2>
                                    <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                                    <p>The impeccable service bouquet of  Indian Tours includes all avenues of Inbound Tours</p>
                                    <div class="slider-button">
                                       <a href="#" class="button-primary">READ MORE</a>
                                       <a href="#" class="button-secondary">SEE ALL OFFER</a>
                                    </div>
                                 </div>
                              </div>
<!--                               <div class="col-lg-4"> -->
                                 <!-- Home search field html start -->
                                 <!-- <div class="trip-search-section">
                                    <div class="container">
                                       <div class="trip-search-inner secondary-bg">
                                          <div class="input-group width-col-1">
                                             <label> Destination* </label>
                                             <input type="text" name="s" placeholder="Enter Destination">
                                          </div>
                                          <div class="input-group width-col-1">
                                             <label> Mobile Number* </label>
                                             <input type="tel" name="s" placeholder="Enter Mobile No" maxlength="10">
                                          </div>
                                          <div class="input-group width-col-1">
                                             <label> Checkin Date* </label>
                                             <i class="far fa-calendar"></i>
                                             <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                                          </div>
                                          <div class="input-group width-col-1">
                                             <label> Checkout Date* </label>
                                             <i class="far fa-calendar"></i>
                                             <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                                          </div>
                                          <div class="input-group width-col-1">
                                             <label class="screen-reader-text"> Search </label>
                                             <input type="submit" name="travel-search" value="INQUIRE NOW">
                                          </div>
                                       </div>
                                    </div>
                                 </div> -->
                                 <!-- search search field html end -->
                              </div>
                           </div>
                        </div>
                     </div>
                  <div class="overlay"></div>
               </div>
            </section>

            <!-- Home packages section html start -->
            <section class="package-section bg-light-grey">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>EXPLORE GREAT PLACES</h5>
                           <h2>POPULAR PACKAGES</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="package-inner package-inner-list">
                     <div class="row">
                        @foreach($packages as $package)
                       
                        <div class="col-lg-6">
                           <div class="package-wrap package-wrap-list">
                              <figure class="feature-image">
                                 <a href="/tour-package/{{ $package->slug }}">
                                 <img src="{{ url('/images/tour-program/'. Str::slug($package->name) .'/'.$package->package_small_pic) }}" alt="{{ Str::slug($package->name) }}">
                                 </a>
                                 <div class="package-price">
                                    <h6>
                                       <span>₹{{ $package->adult_sp }}</span> / per person
                                    </h6>
                                 </div>
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          {{ $package->trip_days }}D/{{ $package->trip_nights }}N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 01
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Himachal
                                       </li>
                                    </ul>
                                 </div>
                              </figure>
                              <div class="package-content">
                                 <h3>
                                    <a href="/tour-package/{{ $package->slug }}">{{ $package->name }}</a>
                                 </h3>
                                 <div class="review-area">
                                    <span class="review-text">({!! rand(1,50) !!} reviews)</span>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 60%"></span>
                                    </div>
                                 </div>

                                 {!! Str::limit($package->description, 150, ' ...') !!}
                                 <div class="btn-wrap">
                                 <a href="/tour-package/{{ $package->slug }}" class="button-text width-12 text-right p-3">View Details<i class="fas fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach

                     </div>
                     <div class="btn-wrap text-center">
                        <a href="{{ route('popular-packages')}}" class="button-primary">VIEW ALL PACKAGES</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- packages html end -->

       </section>
            <section class="home-about-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="about-img-wrap">
                           <div class="about-img-left">
                              <div class="about-content secondary-bg d-flex flex-wrap">
                                 <h3>Something you want to know about us !!</h3>
                                 <a href="#" class="button-primary">LEARN MORE</a>
                              </div>
                              <div class="about-img">
                                 <img src="assets/images/img9-01.jpg" alt="">
                              </div>
                           </div>
                           <div class="about-img-right">
                              <div class="about-img">
                                 <img src="assets/images/img12.jpg" alt="">
                              </div>
                              <div class="about-img">
                                 <img src="assets/images/img34.jpg" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="banner-content section-heading">
                           <h5>INTRODUCTION ABOUT US</h5>
                           <h2 class="banner-title">GET MOVED BY EXPLORING WONDERFUL LAND OF INDIA</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                           <p>Awake a traveller inside you! Explore Awe-Inspiring Tour Packages! Plan a journey to the land of diversities and get acquainted with different languages, religions, cultures, attire, cuisines,  and lifestyle of people here.</p>
                        </div>
                        <div class="about-service-container">
                           <div class="about-service">
                              <div class="about-service-icon">
                                 <img src="assets/images/icon15.png" alt="">
                              </div>
                              <div class="about-service-content">
                                 <h4>BEST PRICE GUARANTEED</h4>
                                 <p>BEST PRICE GUARANTEED</p>
                              </div>
                           </div>
                           <div class="about-service">
                              <div class="about-service-icon">
                                 <img src="assets/images/icon16.png" alt="">
                              </div>
                              <div class="about-service-content">
                                 <h4>AMAZING DESTINATIONS</h4>
                                 <p>AMAZING DESTINATIONS</p>
                              </div>
                           </div>
                           <div class="about-service">
                              <div class="about-service-icon">
                                 <img src="assets/images/icon17.png" alt="">
                              </div>
                              <div class="about-service-content">
                                 <h4>PERSONAL SERVICES</h4>
                                 <p>PERSONAL SERVICES</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- client section html start -->
            <!-- <div class="client-section">
               <div class="container">
                  <div class="client-wrap client-slider">
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo7.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo8.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo9.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo10.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo11.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo8.png" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- client html end -->

                        <!-- banner html start -->
            <section class="destination-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>POPULAR DESTINATION</h5>
                           <h2>TOP NOTCH DESTINATION</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="destination-inner destination-four-column">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="desti-item text-center">
                           <a href="{{ url('north-india-tours') }}">
                              <figure class="desti-image">
                                 <img src="assets/images/img50.jpg" alt="north">
                                 <div class="rating-start" title="Rated 5 out of 4">
                                    <span style="width: 53%"></span>
                                 </div>
                              </figure>
                              </a>
                              <div class="desti-content">
                                 <h3>
                                    <a href="{{ url('north-india-tours') }}">North</a>
                                 </h3>
                                 <div class="meta-cat">
                                    <a href="{{ url('north-india-tours') }}">INDIA</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="desti-item text-center">
                           <a href="{{ url('east-india-tours') }}">
                              <figure class="desti-image">
                                 <img src="assets/images/img51.jpg" alt="east">
                                 <div class="rating-start" title="Rated 5 out of 4">
                                    <span style="width: 53%"></span>
                                 </div>
                              </figure>
                              </a>
                              <div class="desti-content">
                                 <h3>
                                    <a href="{{ url('east-india-tours') }}">East</a>
                                 </h3>
                                 <div class="meta-cat">
                                    <a href="{{ url('east-india-tours') }}">INDIA</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="desti-item text-center">
                              <a href="{{ url('west-india-tours') }}">
                              <figure class="desti-image">
                                 <img src="assets/images/img52.jpg" alt="west">
                                 <div class="rating-start" title="Rated 5 out of 4">
                                    <span style="width: 53%"></span>
                                 </div>
                              </figure>
                              </a>
                              <div class="desti-content">
                                 <h3>
                                 <a href="{{ url('west-india-tours') }}">West</a>
                                 </h3>
                                 <div class="meta-cat">
                                    <a href="{{ url('west-india-tours') }}">INDIA</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="desti-item text-center">
                           <a href="{{ url('south-india-tours') }}">
                              <figure class="desti-image">
                                 <img src="assets/images/img53.jpg" alt="south">
                                 <div class="rating-start" title="Rated 5 out of 4">
                                    <span style="width: 53%"></span>
                                 </div>
                              </figure>
                              </a>
                              <div class="desti-content">
                                 <h3>
                                    <a href="{{ url('south-india-tours') }}">South</a>
                                 </h3>
                                 <div class="meta-cat">
                                    <a href="{{ url('south-india-tours') }}">INDIA</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>   

          
            <!-- Home activity section html start -->
            <section class="activity-section activity-bg-image" style="background-image: url(assets/images/img29.jpg);">
               <div class="container">
                  <div class="section-heading section-heading-white text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>EXPLORE GREAT PLACES</h5>
                           <h2>POPULAR PACKAGES</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-3 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img44.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventure</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img45.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img47.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img49.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
            <!-- Home choice section html start -->
            <section class="choice-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>JOURNEY IS FUN</h5>
                           <h2>TRAVELLER'S BEST CHOICE</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="choice-slider">
                     <div class="choice-slider-item" style="background-image: url(assets/images/img28.jpg);">
                       <div class="row">
                          <div class="col-lg-6 offset-lg-3">
                              <div class="choice-slider-content text-center">
                                 <h3>Holiday to Triund</h3>
                                 <p>My Triund Trek understanding was very good. Went with 4 of my friends first week of March. Weather was really cold and we enjoyed a lot. What a view of Himalaya. One of the best moments of my life. It was a entire package of food, guide, transport, accommodation etc. Early morning sunrise on next day was fabulous. You people don’t have the option of uploading pictures else would without doubt upload. Thank you for arranging such a stunning trek</p>
                                 <a href="#" class="button-primary">BOOK NOW</a>
                              </div>
                          </div>
                       </div>
                     </div>
                     <div class="choice-slider-item" style="background-image: url(assets/images/img28-1.jpg);">
                       <div class="row">
                          <div class="col-lg-6 offset-lg-3">
                              <div class="choice-slider-content text-center">
                                 <h3>Holiday to Triund</h3>
                                 <p>My Triund Trek understanding was very good. Went with 4 of my friends first week of March. Weather was really cold and we enjoyed a lot. What a view of Himalaya. One of the best moments of my life. It was a entire package of food, guide, transport, accommodation etc. Early morning sunrise on next day was fabulous. You people don’t have the option of uploading pictures else would without doubt upload. Thank you for arranging such a stunning trek</p>
                                 <a href="#" class="button-primary">BOOK NOW</a>
                              </div>
                          </div>
                       </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- choice html end -->
            <!-- Home special section html start -->
            <section class="special-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>TRAVEL OFFER & DISCOUNT</h5>
                           <h2>SPECIAL TRAVEL OFFER</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="special-inner mt-0">
                     <div class="row">
                        <div class="col-sm-6 col-lg-4">
                           <div class="special-overlay-inner">
                              <div class="special-overlay-item">
                                 <figure class="special-img">
                                    <img src="assets/images/img11.jpg" alt="">
                                    <div class="badge-dis">
                                       <span>
                                          <strong>15%</strong>
                                          off
                                       </span>
                                    </div>
                                 </figure>
                                 <div class="special-content">
                                    <div class="meta-cat">
                                       <a href="#">Himachal</a>
                                    </div>
                                    <h3>
                                       <a href="#">Camping in Kasol</a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                           <div class="special-overlay-inner">
                              <div class="special-overlay-item">
                                 <figure class="special-img">
                                    <img src="assets/images/img10.jpg" alt="">
                                    <div class="badge-dis">
                                       <span>
                                          <strong>15%</strong>
                                          off
                                       </span>
                                    </div>
                                 </figure>
                                 <div class="special-content">
                                    <div class="meta-cat">
                                       <a href="#">Himachal</a>
                                    </div>
                                    <h3>
                                       <a href="#">Kheerganga Trek</a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                           <div class="special-overlay-inner">
                              <div class="special-overlay-item">
                                 <figure class="special-img">
                                    <img src="assets/images/img9.jpg" alt="">
                                    <div class="badge-dis">
                                       <span>
                                          <strong>15%</strong>
                                          off
                                       </span>
                                    </div>
                                 </figure>
                                 <div class="special-content">
                                    <div class="meta-cat">
                                       <a href="#">Himachal</a>
                                    </div>
                                    <h3>
                                       <a href="#">Triund Trek</a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- best html end -->
            <!-- Home subscribe section html start -->
            <section class="subscribe-section subscribe-bg-image" style="background-image: url(assets/images/img16.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white pr-40">
                           <h5>TRAVEL OFFER & DISCOUNT</h5>
                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Your Email Address">
                                 <input type="submit" name="signup" value="SIGN UP NOW!">
                              </form>
                           </div>
                           <p></p>
                        </div>
                     </div>
                    <!--  <div class="col-lg-5">
                        <div class="progress-wrap">
                           <div class="progress-inner">
                              <div class="progress-circle" data-percentage="80">
                                 <span class="circle-left">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <span class="circle-right">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <div class="progress-value">
                                    85%
                                 </div>
                              </div>
                              <h4>Satisfied clients</h4>
                           </div>
                           <div class="progress-inner">
                              <div class="progress-circle" data-percentage="70">
                                 <span class="circle-left">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <span class="circle-right">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <div class="progress-value">
                                    75%
                                 </div>
                              </div>
                              <h4>Reasonable price</h4>
                           </div>
                           <div class="progress-inner">
                              <div class="progress-circle" data-percentage="70">
                                 <span class="circle-left">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <span class="circle-right">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <div class="progress-value">
                                    70%
                                 </div>
                              </div>
                              <h4>Best destination</h4>
                           </div>
                           <div class="progress-inner">
                              <div class="progress-circle" data-percentage="90">
                                 <span class="circle-left">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <span class="circle-right">
                                    <span class="circle-bar"></span>
                                 </span>
                                 <div class="progress-value">
                                    90%
                                 </div>
                              </div>
                              <h4>Positive reviews</h4>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
            <!-- Home team section html start -->
            <section class="team-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>TEAM MEMBERS</h5>
                           <h2>OUR TOUR GUIDE</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <div class="team-item">
                           <figure class="team-image">
                              <img src="assets/images/img38.jpg" alt="">
                           </figure>
                           <div class="team-content">
                              <div class="heading-wrap">
                                 <h3>Shekhar Virdi</h3>
                                 <h5>Travel Agent</h5>
                              </div>
                              <div class="social-links">
                                 <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="team-item">
                           <figure class="team-image">
                              <img src="assets/images/img42.jpg" alt="">
                           </figure>
                           <div class="team-content">
                              <div class="heading-wrap">
                                 <h3>Rahul</h3>
                                 <h5>Travel Guide</h5>
                              </div>
                              <div class="social-links">
                                 <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="team-item">
                           <figure class="team-image">
                              <img src="assets/images/img43.jpg" alt="">
                           </figure>
                           <div class="team-content">
                              <div class="heading-wrap">
                                 <h3>Shubham</h3>
                                 <h5>Travel Agent</h5>
                              </div>
                              <div class="social-links">
                                 <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="team-item">
                           <figure class="team-image">
                              <img src="assets/images/img39.jpg" alt="">
                           </figure>
                           <div class="team-content">
                              <div class="heading-wrap">
                                 <h3>Abhishek</h3>
                                 <h5>Travel Guide</h5>
                              </div>
                              <div class="social-links">
                                 <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Home blog section html start -->
            <section class="blog-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5>FROM OUR BLOG</h5>
                           <h2>OUR RECENT POSTS</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img17.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Life is a beautiful journey not a destination</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Shubham</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img18.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Take only memories, leave only footprints</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Shubham</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img19.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Journeys are best measured in new friends</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Shubham</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section>
            <!-- blog html end -->
            <!-- Home callback section html start -->
            <!-- <section class="bg-img-callback" style="background-image: url(assets/images/img26.jpg);">
               <div class="container">
                  <div class="row align-items-center justify-content-between">
                     <div class="col-lg-9 col-md-8">
                        <div class="callback-content">
                           <h2>JOIN US FOR MORE UPDATE !!</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="button-wrap">
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section> -->
            <!-- callback html end -->
         </main>
         @endsection