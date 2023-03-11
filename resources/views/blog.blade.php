@extends('layouts.front')

@section('title', $title)
@section('meta_keywords',  $meta_keywords)
@section('meta_descriptions', $meta_descriptions)

@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(../assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Blog</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="archive-section blog-archive">
               <div class="archive-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8 primary right-sidebar">
                           <!-- blog post item html start -->
                           <div class="grid row">
                               @foreach($posts as $post)
                              <div class="grid-item col-md-6">
                                 <article class="post">
                                    <figure class="feature-image">
                                       <a href="/blog/{{ Str::slug($post->title) }}">
                                       <img src="{{ url('images/blog/thumb/'.$post->image) }}">
                                       </a>
                                    </figure>
                                    <div class="entry-content">
                                       <h3>
                                          <a href="/blog/{{ Str::slug($post->title) }}">{{ $post->title }}</a>
                                       </h3>
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
                                       <p>{!! $post->short_description !!}</p>
                                       <a href="/blog/{{ Str::slug($post->title) }}" class="button-text">CONTINUE READING..</a>
                                    </div>
                                 </article>
                              </div>
                              @endforeach
                              
                           </div>
                           <!-- blog post item html end -->
                           <!-- pagination html start-->
                           <div class="post-navigation-wrap">
                              <nav>
                                <ul class="pagination">
                                  {{ $posts->links() }}
                                </ul>
                              </nav>
                           </div>
                           <!-- pagination html start-->
                        </div>
                        <div class="col-lg-4 secondary">
                           <div class="sidebar">
                            
                              <aside class="widget widget_latest_post widget-post-thumb">
                                 <h3 class="widget-title">Recent Post</h3>
                                 <ul>
                                     @foreach($recentPosts as $rpost)
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="/blog/{{ Str::slug($rpost->title) }}"><img src="{{ url('images/blog/thumb/'.$post->image) }}"></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="/blog/{{ Str::slug($rpost->title) }}">{{ $rpost->title }}</a>
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
                                 <div class="ss-box" data-ss-social="facebook, pinterest"></div>
                                 <div class="social-icon-wrap">
                                    <div class="social-icon social-facebook">
                                       <a href="{{ Share::currentPage()
	->facebook()
	->getRawLinks(); }}">
                                          <i class="fab fa-facebook-f"></i>
                                          <span>Facebook</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-pinterest">
                                       <a target="_blank" href="http://pinterest.com/pin/create/button/?url={{ Request::url() }}">
                                          <i class="fab fa-pinterest"></i>
                                          <span>Pinterest</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-whatsapp">
                                       <a target="_blank" href="https://wa.me/?text={{ Request::url() }}">
                                          <i class="fab fa-whatsapp"></i>
                                          <span>WhatsApp</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-linkedin">
                                       <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}&title={{'Indian Tour Blog'}}">
                                          <i class="fab fa-linkedin"></i>
                                          <span>Linkedin</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-twitter">
                                       <a target="_blank" href="https://twitter.com/intent/tweet?text={{'Indian Tour Blog'}}&url={{ Request::url() }}">
                                          <i class="fab fa-twitter"></i>
                                          <span>Twitter</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-instagram">
                                       <a target="_blank" href="https://www.instagram.com?url={{ Request::url() }}">
                                          <i class="fab fa-instagram"></i>
                                          <span>Instagram</span>
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