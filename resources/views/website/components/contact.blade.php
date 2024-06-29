@extends('website.index')
@section('content')
<div class="container main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>{{__('public._contact')}}</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('public._contact')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadscrumb Section End -->
    
    <!-- Contact Section Start -->
    <div class="conact-section ptb-60">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                <h2>{{__('public._contact_text')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12" data-aos="fade-up"
                    data-aos-duration="1200">
                    <div class="contact-information">
                        <h3>{{__('public._contact_information')}}</h3>
                        <ul>
                            <li>
                                <span class="icon"><i class="bx bx-location-plus"></i></span>
                                <span class="text"><span>{{__('public._contact_address')}}</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="bx bx-phone-call"></i></span>
                                <span class="text">
                                    <a href="tel:+12345678999">{{__('public._contact_number')}}</a>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="bx bx-envelope"></i></span>
                                <span class="text">
                                    <a href="mailto:hello@example.com">{{__('public._mail')}}</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12" data-aos="fade-up"
                    data-aos-duration="1600">
                    <div class="contact-form">
                        <h3>{{__('public._leave_message')}}</h3>
                        <form class="" action="{{ route('contact.contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-20 col-md-4 col-12">
                                    <input name="name" type="text" placeholder="{{__('public._name')}}" required>
                                </div>
                                <div class="mb-20 col-md-4 col-12">
                                    <input name="email" type="email" placeholder="{{__('public._mail')}}" required>
                                </div>
                                <div class="mb-20 col-md-4 col-12">
                                    <input name="subject" type="text" placeholder="{{__('public._subject')}}" required>
                                </div>
                                <div class="mb-20 col-12">
                                    <textarea name="text" placeholder="{{__('public._text')}}" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit">{{__('public._send')}}</button>
                                </div>
                                <!-- Start Form Message -->
                                <div class="col-12">
                                    <div class="text-center msg_submit alert alert-success successform contact__msg" role="alert">
                                        {{__('public._succes_send')}}
                                    </div>
                                </div>
                                <!-- End Form Message -->
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
            {{-- <div class="row" data-aos="fade-up"
                    data-aos-duration="1200">
                <div class="col mtb-40"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.02560011993!2d153.34829181506035!3d-27.623723782826637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b916f83ff49ce55%3A0x974857d5f6dd6fcd!2s124%20Western%20Rd%2C%20MacLeay%20Island%20QLD%204184%2C%20Australia!5e0!3m2!1sen!2sbd!4v1645960528528!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div> --}}
           
            
            
        </div>
    </div>
    <!-- Contact Section End -->

</div>
@stop