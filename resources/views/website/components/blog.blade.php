@extends('website.index')
@section('content')
    <div class="main page-wrapper">
        <!-- Start Blog Area -->
        <div class="blog-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>{{ $blog->name_ge }}</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6"><img src="{{ $blog->image }}" alt=""></div>
                    <div class="col-12 col-md-6">{{ $blog->text_ge }}</div>
                </div>
            </div>
        </div>
    </div>
@stop
