@extends('website.index')
@section('content')
    <div class="main page-wrapper">
        <!-- Start Blog Area -->
        <div class="blog-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>
                        @if (session('locale') == 'en')
                            {{ $blog->name_en }}
                        @else
                            {{ $blog->name_ge }}
                        @endif
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6"><img src="{{ $blog->image }}" alt=""></div>
                    <div class="col-12 col-md-6">
                        @if (session('locale') == 'en')
                            {{ $blog->text_en }}
                        @else
                            {{ $item->text_ge }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
