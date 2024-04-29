@extends('website.index')
@section('content')
<div class="container main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>About Us</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                        <span class="title-highlighter"> <i class="bx bx-home"></i>About Emlak</span>
                        <h3 class="title">We provide the best services and projects for real estate, architecture, and construction work.</h3>
                        <span class="text-heading">Phasellus dictum ipsum nec rutrum tristique. Aliquam a mauris lacinia, condimentum tellus a, mattis nisl. Sed hendrerit viverra elit tempus venenatis. Morbi vel faucibus odio. Nunc vulputate convallis scelerisque. Mauris sollicitudin elit eget ante pharetra, nec suscipit nisl sagittis. Suspendisse euismod a augue pretium dignissim.</span>
                        <div class="row">
                            <div class="col-xl-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Sed do eiusmod tempor incididunt dolore magna aliqua.</p>
                            </div>
                            <div class="col-xl-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Sed do eiusmod tempor incididunt dolore magna aliqua.</p>
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