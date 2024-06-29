@extends('website.index')
@section('content')
<div class="container main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>{{__('public._about_us')}}</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a> 
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('public._about_us')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadscrumb Section End -->
    
    <!-- About Section Start -->
    <div class="mb-5 about-area pt-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-thumbnail" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumbnail">
                            <img src="/website/assets/img/about/about.jpg" alt="About Us">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="about-content" data-aos="fade-up" data-aos-duration="1600">
                        <span class="title-highlighter"> <i class="bx bx-home"></i>{{__('public._about_us')}}</span>
                        <h3 class="title">{{__('public._about_us_title')}}</h3>
                        <span class="text-heading">{{__('public._about_us_head_text')}}</span>
                        <div class="row">
                            <div class="col-xl-6">
                                <p>{{__('public._about_us_text_1')}}</p>
                            </div>
                            <div class="col-xl-6">
                                <p>{{__('public._about_us_text_2')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


</div>
@stop