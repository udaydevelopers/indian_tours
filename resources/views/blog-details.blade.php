@extends('layouts.front')

@section('title', $title)
@section('meta_keywords',  $meta_keywords)
@section('meta_descriptions', $meta_descriptions)

@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">{{ $post->title }}</h1>
                        <div class="entry-meta">
                           <span class="byline">
                              <a href="#">Indian tours</a>
                           </span>
                           <span class="posted-on">
                              <a href="#">{{ $post->created_at }}</a>
                           </span>
                           <span class="comments-link">
                           @foreach($post->tags as $tag)
                                <a href="#">{{ $tag->name }} </a>
                                @if(!$loop->last)
                                ,
                                @endif
                            @endforeach 
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-post-section">
               <div class="single-post-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8 primary right-sidebar">
                           <!-- single blog post html start -->
                           <figure class="feature-image">
                           <img src="{{ url('images/blog/'.$post->image) }}">
                           </figure>
                           <article class="single-content-wrap">
                               {!! $post->body !!}
                            </article>
                           <div class="meta-wrap">
                              <div class="tag-links">
                            @foreach($post->tags as $tag)
                                <a href="#">{{ $tag->name }} </a>
                                @if(!$loop->last)
                                ,
                                @endif
                            @endforeach 
                              </div>
                           </div>
                           <div class="post-socail-wrap">
                              <div class="social-icon-wrap">
                                 <div class="social-icon social-facebook">
                                    <a href="#">
                                       <i class="fab fa-facebook-f"></i>
                                       <span>Facebook</span>
                                    </a>
                                 </div>
                                 <div class="social-icon social-google">
                                    <a href="#">
                                       <i class="fab fa-google-plus-g"></i>
                                       <span>Google</span>
                                    </a>
                                 </div>
                                 <div class="social-icon social-pinterest">
                                    <a href="#">
                                       <i class="fab fa-pinterest"></i>
                                       <span>Pinterest</span>
                                    </a>
                                 </div>
                                 <div class="social-icon social-linkedin">
                                    <a href="#">
                                       <i class="fab fa-linkedin"></i>
                                       <span>Linkedin</span>
                                    </a>
                                 </div>
                                 <div class="social-icon social-twitter">
                                    <a href="#">
                                       <i class="fab fa-twitter"></i>
                                       <span>Twitter</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           
                           <!-- post comment html -->
                           <div class="comment-area">

                              <!-- post navigation html -->
                              <div class="post-navigation">
                              @if (isset($previous))
                                 <div class="nav-prev">
                                    <a href="{{ Str::slug($previous->title) }}">
                                       <span class="nav-label">Previous Reading</span>
                                       <span class="nav-title">{{ $previous->title }}</span>
                                    </a>
                                 </div>
                                 @endif
                                 @if (isset($next))
                                 <div class="nav-next">
                                    <a href="{{ Str::slug($next->title) }}">
                                       <span class="nav-label">Next Reading</span>
                                       <span class="nav-title">{{ $next->title }}</span>
                                    </a>
                                 </div>
                                 @endif
                              </div>
                           </div>
                           <!-- blog post item html end -->
                        </div>
                        <div class="col-lg-4 secondary">
                           <div class="sidebar">
                              <aside class="widget widget_latest_post widget-post-thumb">
                                 <h3 class="widget-title">Recent Post</h3>
                                 <ul>
                                     @foreach($recentPosts as $rpost)
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="#"><img src="{{ url('images/blog/thumb/'.$post->image) }}"></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="#">{{ $rpost->title }}</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">{{ $rpost->created_at }}</a>
                                             </span>
                                             <!-- <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span> -->
                                          </div>
                                       </div>
                                    </li>
                                    @endforeach
                                 </ul>
                              </aside>
                              <aside class="widget widget_social">
                                 <h3 class="widget-title">Social share</h3>
                                 <div class="social-icon-wrap">
                                    <div class="social-icon social-facebook">
                                       <a href="#">
                                          <i class="fab fa-facebook-f"></i>
                                          <span>Facebook</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-pinterest">
                                       <a href="#">
                                          <i class="fab fa-pinterest"></i>
                                          <span>Pinterest</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-whatsapp">
                                       <a href="#">
                                          <i class="fab fa-whatsapp"></i>
                                          <span>WhatsApp</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-linkedin">
                                       <a href="#">
                                          <i class="fab fa-linkedin"></i>
                                          <span>Linkedin</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-twitter">
                                       <a href="#">
                                          <i class="fab fa-twitter"></i>
                                          <span>Twitter</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-google">
                                       <a href="#">
                                          <i class="fab fa-google-plus-g"></i>
                                          <span>Google</span>
                                       </a>
                                    </div>
                                 </div>
                              </aside>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         @endsection