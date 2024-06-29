@extends('website.index')
@section('content')
<div class="main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>{{__('public._questions')}}</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('public._questions')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadscrumb Section End -->

    <!-- Start FAQ Area -->
    <section class="accordion-area ptb-60">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                <h2>{{__('public._questions')}}</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12">
                    <div class="faq-accordion" data-aos="fade-up" data-aos-duration="1600">
                        <ul class="accordion">
                            <li class="accordion-item mtb-40">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_1')}}
                                </a>

                                <div class="accordion-content show">
                                    <p>{{__('public._faq_text_1')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_2')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_2')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_3')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_3')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_4')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_4')}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="faq-accordion" data-aos="fade-up" data-aos-duration="2000">
                        <ul class="accordion">
                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_5')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_5')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_6')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_6')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_7')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_7')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_8')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_8')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_9')}}
                                </a>

                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_9')}}</p>
                                </div>
                            </li>

                            <li class="accordion-item mtb-40">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{__('public._faq_title_10')}}
                                </a>
                                <div class="accordion-content">
                                    <p>{{__('public._faq_text_10')}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End FAQ Area -->
</div>
@stop