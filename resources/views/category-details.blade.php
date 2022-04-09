@extends('layouts.front')

@section('title', $title)
@section('meta_keywords',  $meta_keywords)
@section('meta_descriptions', $meta_descriptions)

@section('content')

<main id="content" class="site-main">
   @if($category)
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               @php $inner_banner = isset($category->background_image) ? $category->background_image : 'inner-banner.jpg'; @endphp
               <div class="inner-baner-container" style="background-image: 
                  url({{ url('/images/categories/'. $inner_banner) }});">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">{{ $category->name? $category->name:''}}</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- Home packages section html start -->
            <section class="package-section bg-light-grey">
               <div class="container">
                  <div class="package-inner package-inner-list">
                     <div class="row">
                     @foreach($category->packages as $package)
                        <div class="col-lg-6">
                           <div class="package-wrap package-wrap-list">
                              <figure class="feature-image">
                              <a href="{{ $category->slug }}/{{ $package->slug }}">
                              <img src="{{ url('/images/'.$package->package_small_pic) }}" alt="{{ $package->name }}">
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
                                          {{ $category->name }}
                                       </li>
                                    </ul>
                                 </div>
                              </figure>
                              <div class="package-content">
                              <h3>
                              <a href="{{ $category->slug }}/{{ $package->slug }}">{{ $package->name }}</a>
                              </h3>
                              <div class="review-area">
                                 <span class="review-text">(25 reviews)</span>
                                 <div class="rating-start" title="Rated 5 out of 5">
                                    <span style="width: 60%"></span>
                                 </div>
                              </div>
                                 <p>{!! Str::limit($package->description, 300, ' ...') !!}</p>
                                 <div class="btn-wrap">
                                    <a href="{{ $category->slug }}/{{ $package->slug }}" class="button-text width-6">View Details<i class="fas fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                     </div>
                  </div>
               </div>
            </section>
            <!-- packages html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                           <h2>ADVENTURE & ACTIVITY</h2>
                           <p>The impeccable service bouquet of  Indian Tours includes all avenues of Inbound Tours</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon6.png" alt="">
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
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon10.png" alt="">
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
                     
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon8.png" alt="">
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
    
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon11.png" alt="">
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
            </section>@endif
            <!-- activity html end -->
         </main>
         
@endsection