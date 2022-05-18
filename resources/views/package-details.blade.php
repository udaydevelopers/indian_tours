@extends('layouts.front')

@section('title', $title)
@section('meta_keywords',  $meta_keywords)
@section('meta_descriptions', $meta_descriptions)

@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
            @php $inner_banner = isset($package->page_banner_image) ? $package->page_banner_image : 'inner-banner.jpg'; @endphp
               <div class="inner-baner-container" style="background-image: 
                  url({{ url('/images/'. $inner_banner) }});">

                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">{{ $package->page_banner_alt}}</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>

            <!-- Inner Banner html end-->

            <div class="single-tour-section">

               <div class="container">

                  <div class="row">

                     <div class="col-lg-8">

                        <div class="single-tour-inner">

                        <h2>{{ ($package->h2_tags)?$package->h2_tags:$package->name }}</h2>

                           <figure class="feature-image">

                              <img src="{{ url('/images/'.$package->package_large_pic) }}" alt="{{ $package->slug }}">

                              <div class="package-meta text-center">

                                 <ul>

                                    <li>

                                       <i class="far fa-clock"></i>

                                       {{ $package->trip_days }} days / {{ $package->trip_nights }} nights

                                    </li>

                                    <li>

                                       <i class="fas fa-user-friends"></i>

                                       People: 01

                                    </li>

                                    <li>

                                       <i class="fas fa-map-marked-alt"></i>

                                       @foreach($package->categories as $category)
                                       {{ $category->name }}
                                       @endforeach

                                    </li>

                                 </ul>

                              </div>

                           </figure>

                           

                           <div class="tab-container ">

                              <ul class="nav nav-tabs" id="myTab" role="tablist">

                                 <li class="nav-item">

                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>

                                 </li>

                                 <li class="nav-item">

                                    <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="false">PROGRAM</a>

                                 </li>

                                 <li class="nav-item">

                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">REVIEW</a>

                                 </li>

                                 <!-- <li class="nav-item">

                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>

                                 </li> -->

                                 <li class="nav-item">

                                    <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="false">FAQ</a>

                                 </li>

                                 <li class="nav-item">

                                    <a class="nav-link" id="Policy-tab" data-toggle="tab" href="#Policy" role="tab" aria-controls="Policy" aria-selected="false">POLICY</a>

                                 </li>

                              </ul>







                                 <div class="tab-content" id="myTabContent" >

                                 <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab" >

                                    <div class="overview-content">
                                    {!! $package-> description !!}
                                    </div>

                                 </div>



                                 <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">

                                    <div class="itinerary-content">

                                       <h3>Program <span>(  {{ $package->trip_days }} days / {{ $package->trip_nights }} nights )</span></h3>

                                    </div>

                                    <div class="itinerary-timeline-wrap">

                                    {!! $package->program !!}

                                    </div>

                                 </div>

                                 <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab">

                                    <div class="summary-review">

                                       <div class="review-score">

                                          <span>4.9</span>

                                       </div>

                                       <div class="review-score-content">

                                          <h3>

                                             Excellent

                                             <span>( Based on reviews )</span>

                                          </h3>

                                          <!-- <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p> -->

                                       </div>

                                    </div>

                                    <!-- review comment html -->

                                 </div>

                                 <!-- <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">

                                    <div class="map-area">

                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3373.9824278636056!2d76.33834481555171!3d32.25855501754561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b56c757fa1f77%3A0x724e7b8ac0aa0d84!2sTriund%20Trek!5e0!3m2!1sen!2sin!4v1644164408142!5m2!1sen!2sin" height="450" allowfullscreen=""></iframe>

                                  </div>

                                 </div> -->

                                  <div class="tab-pane" id="faq" role="tabpanel" aria-labelledby="faq-tab">

                                    <div class="itinerary-content">

                                       <h3>FREQUENTLY ASKED QUESTIONS</span></h3>

                                      

                                    </div>

                                    <div class="accordion" id="accordionOne">

                                 <div class="card">

                                    <div class="card-header" id="headingOne">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                           CAN WE KEEP OUR LUGGAGE AT MCLEODGANJ?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionOne">

                                       <div class="card-body">

                                         Yes. You will be provided with a luggage room facility at Mcleodganj where you can keep your luggage and take a water bottle, camera, etc. on a daysack to the hilltop with you.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingTwo">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                             WHEN DOES THE TRIUND TREK START?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">

                                       <div class="card-body">

                                          The trek start timing is generally 10 AM. So you have to reach the reporting site (Near Mcleodganj Bus stand) by 10 AM.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingThree">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                             WILL WE GO TO LAHESH CAVE AND LAKA GLACIER?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">

                                       <div class="card-body">

                                          In the 2D1N trek, it is not possible to cover the Laka glacier and Lahesh cave. It will take 2D2N to cover Triund with Laka. Check out 3D2N Laka glacier Trek.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingFour">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                                             WILL WE COVER BHAGUSU NAG AND SNOWLINE?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionOne">

                                       <div class="card-body">

                                          Yes. Bhagusunag and the snowline will be covered.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingFive">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                                             HOW MUCH TIME DOES IT TAKE TO TREK TO TRIUND HILLTOP FROM MCLEODGANJ?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionOne">

                                       <div class="card-body">

                                          It will take approx. 4-5 hours to complete the trek. The trek total distance is approx. 9 km.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingSix">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">

                                             WHERE DO I NEED TO REPORT BEFORE THE TREK STARTS?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionOne">

                                       <div class="card-body">

                                          Reporting place will be near to Mcleodganj bus stand. All the details will be shared with you once you book the trek.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingSeven">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">

                                          WHAT ABOUT SAFETY?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionOne">

                                       <div class="card-body">

                                          Each trekker is responsible for his/her own safety. Trek organizers, guides, porters will not be responsible for any damage, theft, or loss of goods.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingEight">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">

                                          WHAT ALL FACILITIES ARE PROVIDED DURING THE TREK?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionOne">

                                       <div class="card-body">

                                          You will be provided with a sleeping bag, tent accommodation, food, guidance, and a dry pit toilet as per the plan. No other facilities can be provided.

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card">

                                    <div class="card-header" id="headingNine">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">

                                          HOW MUCH TIME DOES IT TAKE TO REACH MCLEODGANJ FROM DELHI?

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionOne">

                                       <div class="card-body">

                                         It will take approx. 10-12 hours to reach Mcleodganj from Delhi by overnight Volvo.

                                       </div>

                                    </div>

                                 </div>

                              </div>  

                           </div>

<!-- FAQ ENDS -->

<!-- T&C* -->

                                  <div class="tab-pane" id="Policy" role="tabpanel" aria-labelledby="Policy-tab">

                                    <div class="itinerary-content">

                                       <h3>TERMS AND CONDITIONS</h3>

                                       <h4>CANCELLATION AND REFUND:</h4>

                                    </div>

                                    <div class="itinerary-timeline-wrap">

                                    {!! $package->policy !!}

                                    </div>

                                 </div>

                              </div>

                          

                           </div>







                           <div class="single-tour-gallery">

                              <h3>GALLERY / PHOTOS</h3>

                              <div class="single-tour-slider">
                                @foreach($package->images as $image)
                                <div class="single-tour-item">

                                    <figure class="feature-image">
                                       @php 
                                       $image_name = $image->url;
                                       $last_dot_index = strrpos($image_name, ".");
                                       $without_extention = substr($image_name, 0, $last_dot_index);
                                       @endphp
                                       <img src="{{ url('/images/'.$image->url) }}" alt="{{ $without_extention }}">

                                    </figure>

                                 </div>
                                @endforeach
                                 
                              </div>

                           </div>

                        </div>

                     </div>

                     <div class="col-lg-4">

                        <div class="sidebar">

                           <div class="package-price">

                              <h5 class="price">

                                 <span>₹{{$package->adult_sp}}</span> / per person

                              </h5>

                              <div class="start-wrap">

                                 <div class="rating-start" title="Rated 5 out of 5">

                                    <span style="width: 60%"></span>

                                 </div>

                              </div>

                           </div>

                           <div class="widget-bg booking-form-wrap">
                              @if ($message = Session::get('success'))
                                 <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                 </div>
                              @endif
                              <h4 class="bg-title">Booking</h4>
                              {!! Form::open(array('route' => 'booking.store','method'=>'POST', 'class' => 'booking-form')) !!}
                                 @csrf
                                 <div class="row">

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="full_name" type="text" placeholder="Full Name" class="form-control @error('full_name') is-invalid @enderror" value="{{old('full_name')}}">
                                          @error('full_name')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                          @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="mobile" type="text" placeholder="Mobile Number" maxlength="10" class="form-control @error('mobile') is-invalid @enderror"  value="{{old('mobile')}}">
                                          @error('mobile')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="no_of_persons" type="number" placeholder="Number of Person" min="1" class="form-control @error('no_of_persons') is-invalid @enderror"  value="{{old('no_of_persons')}}">
                                          @error('no_of_persons')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input type="text" name="booking_date" autocomplete="off" readonly="readonly" placeholder="Date" class="input-date-picker form-control @error('booking_date') is-invalid @enderror" value="{{old('booking_date')}}">
                                          @error('booking_date')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group submit-btn">
                                          <input type="hidden" name="package_name" value="{{$package->name }}">
                                          <input type="submit" name="submit" value="Boook Now">

                                       </div>

                                    </div>

                                 </div>

                                 {!! Form::close() !!}

                           </div>

                           <div class="widget-bg information-content text-center">

                              <h5>Got a Question?</h5>

                              <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>

                              <p>Our Destination expert will be happy to help you resolve your queries for this tour.</p>

                              <a href="tel:+91 96253-48288">

                                       <i class="fas fa-phone-alt"></i>

                                       +91 96253-48288

                                    </a>

                              <!-- <a href="#" class="button-primary">GET A QUOTE



                              </a> -->

                              <br>

                              <br>

                              <div class="whatsapp">

                              <a href="https://api.whatsapp.com/send?phone=919876440250&text=Hi%20There" target="_blank">

                              <i class="fab fa-whatsapp" aria-hidden="true"></i>
                           </a>

                        </div>

                           </div>

                           <div class="travel-package-content text-center" style="background-image: url(../assets/images/img11.jpg);">

                              <h5>MORE PACKAGES</h5>

                              <h3>OTHER TRAVEL PACKAGES</h3>

                              <p></p>

                              <ul>

                                 <li>

                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Vacation packages</a>

                                 </li>

                                 <li>

                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Honeymoon packages</a>

                                 </li>

                                 <li>

                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Himachal Tour packages</a>

                                 </li>

                                 <li>

                                    <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Weekend packages</a>

                                 </li>

                              </ul>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>
            
            <!-- similar packages section html start -->
            <section class="similar-packages" style="margin-block-end: 75px;">

               <div class="container">

                  <div class="row">

                     <div class="col-lg-12">

                        <div class="section-heading section-heading-black">

                           <h3 class="dash-style">Similar Packages</h3>

                           <div id="demo" class="carousel slide" data-ride="carousel">


                           <!-- The slideshow -->
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img src="http://127.0.0.1:8000/images/62375077e4e90_triund-breakfast.jpg" alt="Los Angeles">
                     
                                 <img src="http://127.0.0.1:8000/images/62375077e4e90_triund-breakfast.jpg" alt="Chicago">
                              
                                 <img src="http://127.0.0.1:8000/images/62375077e4e90_triund-breakfast.jpg" alt="New York">
                              </div>
                              <div class="carousel-item">
                                 <img src="http://127.0.0.1:8000/images/62375077e4e90_triund-breakfast.jpg" alt="Los Angeles">
                     
                                 <img src="http://127.0.0.1:8000/images/62375077e4e90_triund-breakfast.jpg" alt="Chicago">
                              
                                 <img src="http://127.0.0.1:8000/images/62375077e4e90_triund-breakfast.jpg" alt="New York">
                              </div>
                           </div>

                           <!-- Left and right controls -->
                           <a class="carousel-control-prev" href="#demo" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                           </a>
                           <a class="carousel-control-next" href="#demo" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                           </a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </section>

            <!-- similar packages html end -->
            <!-- subscribe section html start -->

            <section class="subscribe-section" style="background-image: url(../assets/images/triund-trek/triund-snow-mountains.jpg);">

               <div class="container">

                  <div class="row">

                     <div class="col-lg-7">

                        <div class="section-heading section-heading-white">

                           <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>

                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>

                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>

                           <div class="newsletter-form">

                              <form>

                                 <input type="email" name="s" placeholder="Your Email Address">

                                 <input type="submit" name="signup" value="SIGN UP NOW!">

                              </form>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </section>

            <!-- subscribe html end -->

         </main>
@endsection