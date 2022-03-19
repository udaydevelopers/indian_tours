@extends('layouts.front')

@section('content')
<main id="content" class="site-main">
<section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Home</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
