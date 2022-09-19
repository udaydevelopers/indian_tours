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

                           @if ($message = Session::get('review-success'))
                                 <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                 </div>
                           @endif

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
                                    @if($package->reviews->count())
                                    <div class="summary-review">

                                       <div class="review-score">

                                          <span>{{ ($package->reviews->sum('rated') * 5) / (5 * $package->reviews->count()) }}</span>

                                       </div>

                                       <div class="review-score-content">

                                          <h3>
                                          @if(($package->reviews->sum('rated') * 5) / (5 * $package->reviews->count()) > 4)
                                             Excellent
                                          @else
                                             Good
                                          @endif
                                             <span>( Based on reviews )</span>

                                          </h3>

                                          <!-- <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p> -->

                                       </div>

                                    </div>
                                    @endif
                                    <!-- review comment html -->

                                    <div class="comment-area">

                                       <h3 class="comment-title">{{ $reviewCount }} Reviews</h3>

                                       <div class="comment-area-inner">

                                          <ol>
                                          @foreach($package->reviews as $review)
                                          @php if($review->status == 'unpublish') continue; @endphp
                                             <li>

                                                <figure class="comment-thumb">

                                                  <!--  <img src="../assets/images/img20.jpg" alt=""> -->

                                                </figure>

                                                <div class="comment-content">

                                                   <div class="comment-header">

                                                      <h5 class="author-name">{{ $review->name }} </h5>

                                                      <span class="post-on"></span>

                                                      <div class="rating-wrap">

                                                         <div class="" title="Rated 5 out of 5">
                                                            @for ($i = $review->rated; $i >= 1; $i--)
                                                            <span style="font-size:200%;color:#ff8800;">&starf;</span>
                                                            @endfor
                                                            <span style="width: 90%;"></span>

                                                         </div>

                                                      </div>

                                                   </div>

                                                   <p>{{ $review->comments }}</p>

                                                </div>

                                             </li>
                                                @endforeach

                                          </ol>

                                       </div>

                                       <div class="comment-form-wrap">

                                          <h3 class="comment-title">Leave a Review</h3>

                                          {!! Form::open(array('route' => 'review.store','method'=>'POST', 'class' => 'comment-form', 'id' => 'cmt_form')) !!}
                                          @csrf
                                             <div class="full-width rate-wrap">

                                                <label>Your rating</label>

                                                <div class="rating">
                                                      <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                                                      <label for="star5">☆</label>
                                                      <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                                                      <label for="star4" >☆</label>
                                                      <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                                                      <label for="star3" >☆</label>
                                                      <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                                                      <label for="star2" >☆</label>
                                                      <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                                                      <label for="star1" >☆</label>
                                                      <div class="clear"></div>
                                                </div>
                                                
                                             </div>

                                             <p>

                                                <input type="text" name="name" placeholder="Name" required>

                                             </p>

                                             <p>

                                                <input type="email" name="email" placeholder="Email" required>

                                             </p>

                                             <p>

                                                <input type="text" name="subject" placeholder="Subject" required>

                                             </p>

                                             <p>

                                                <textarea name="comments" rows="6" placeholder="Your review" required></textarea>

                                             </p>

                                             <p>
                                             <input type="hidden" name="package_id" value="{{$package->id }}">
                                                <input type="submit" name="submit" value="Submit">
                                             </p>

                                             {!! Form::close() !!}

                                       </div>

                                    </div>

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
                                 @foreach($package->faqs as $faq)
                                 <div class="card">

                                    <div class="card-header" id="headingOne">

                                       <h4 class="mb-0">

                                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{ $loop->index }}" aria-expanded="false " aria-controls="collapseOne">

                                           {{ $faq->question }}

                                          </button>

                                       </h4>

                                    </div>

                                    <div id="collapseOne{{ $loop->index }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionOne">

                                       <div class="card-body">

                                         {{ $faq->answer }}

                                       </div>

                                    </div>

                                 </div>
                                 @endforeach
                                 
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
                                             {{ $message }}
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                          @error('email')
                                             <span class="invalid-feedback" role="alert">
                                             {{ $message }}
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="mobile" type="text" placeholder="Mobile Number" maxlength="10" class="form-control @error('mobile') is-invalid @enderror"  value="{{old('mobile')}}">
                                          @error('mobile')
                                             <span class="invalid-feedback" role="alert">
                                             {{ $message }}
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input name="no_of_persons" type="number" placeholder="Number of Person" min="1" class="form-control @error('no_of_persons') is-invalid @enderror"  value="{{old('no_of_persons')}}">
                                          @error('no_of_persons')
                                             <span class="invalid-feedback" role="alert">
                                             {{ $message }}
                                             </span>
                                          @enderror
                                       </div>

                                    </div>

                                    <div class="col-sm-12">

                                       <div class="form-group">

                                          <input type="text" name="booking_date" autocomplete="off" readonly="readonly" placeholder="Date" class="input-date-picker form-control @error('booking_date') is-invalid @enderror" value="{{old('booking_date')}}">
                                          
                                          @error('booking_date')
                                             <span class="invalid-feedback" role="alert">
                                                {{ $message }}
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
            @if($similarPackages->count() > 0)
            <section class="similar-packages" style="margin-block-end: 75px;">

               <div class="container">

                  <div class="row">

                     <div class="col-lg-12">

                        <div class="section-heading section-heading-black">

                           <h3 class="dash-style">Similar Packages</h3>

                        <div class="single-tour-slider" style="margin-bottom: 70px;">
                        @foreach($similarPackages as $package) 
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap" style="width: 375px;">
                              <figure class="feature-image">
                              <a href="/tour-package/{{ $package->slug }}">
                              <img src="{{ url('/images/'.$package->package_small_pic) }}" alt="{{ $package->name }}">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>₹{{ $package->adult_sp }} </span> / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
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
                                          {{ $category->name }}
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="/tour-package/{{ $package->slug }}">{{ ($package->h2_tags)?$package->h2_tags:$package->name }}</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">({!! rand(1,50) !!} reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                    <p>Places Covered : {{ ($package->place_covered)?$package->place_covered:'...' }}</p>
                                    <div class="btn-wrap">
                                       <a href="/tour-package/{{ $package->slug }}" class="button-text width-12 text-right p-3">View More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        @endforeach
                        </div>

                        </div>

                     </div>

                  </div>

               </div>

            </section>
            @endif
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
@section('scripts')
    <script type="text/javascript">
   //  $('#reload').click(function () { 
   //  $.ajax({
   //  type: 'GET',
   //  url: '/reload-captcha',
   //  success: function (data) { console.log(data);
   //  $(".captcha span").html(data.captcha);
   //  }
   //  });
   //  });

    </script>
@endsection