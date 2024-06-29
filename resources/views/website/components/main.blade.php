@extends('website.index')
@section('content')
    <div class="main page-wrapper">
        <!-- Start Banner Section -->
        <section class="banner-area bg-holder bg-overlay-black"
            style="background-image: url(/website/assets/img/banner.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <h1 data-aos="fade-up" data-aos-duration="1200" class="mb-2 text-center text-white">
                            {{ __('public.slide_text_1') }}</h1>
                        <p data-aos="fade-up" data-aos-duration="1400" class="mb-4 text-center text-white lead fw-normal">
                            {{ __('public.slide_text_2') }}</p>
                        <div data-aos="fade-up" data-aos-duration="1600" class="bg-white property-search-field">
                            <div class="property-search-item">
                                <form action="{{ route('website.hotels') }}" class="row basic-select-wrapper">
                                    <div class="form-group col-lg-3 col-md-6">
                                        <label class="form-label">{{ __('public._city') }}</label>
                                        <select name="city" class="form-control basic-select">
                                            <option value="">{{ __('public._city') }}</option>
                                            <option value="თბილისი">თბილისი</option>
                                            <option value="თელავი">თელავი</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-3 col-md-6">
                                        <label class="form-label">{{ __('public._date') }}</label>
                                        <div class="date-picker">
                                            <input type="text" id="daterange" name="date" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6">
                                        <div class="dropdown">
                                            <button
                                                class="m-auto btn btn-primary d-flex align-items-center style1 visitors-button"
                                                type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                                </svg>
                                                <span class="visitos-title"> {{ __('public._visitor') }}</span>
                                            </button>
                                            <div class="dropdown-menu visitors-number" aria-labelledby="dropdownMenuButton">
                                                <div class="d-flex">
                                                    <label for="adult"> {{ __('public._adult') }}</label>
                                                    <input type="number" name="adult" id="adult">
                                                </div>
                                                <div class="d-flex">
                                                    <label for="kid"> {{ __('public._kid') }}</label>
                                                    <input type="number" name="kid" id="kid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6">
                                        <span class="align-items-center ms-3 d-lg-block">
                                            <button
                                                class="m-auto btn btn-primary d-flex align-items-center style1 search-btn"
                                                type="submit">
                                                <i class="bx bx-search"></i>
                                                <span>{{ __('public._serach') }}</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Section -->

        <!-- Property Section Start -->
        <section class="property-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2> {{ __('public._explore_properties') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ($hotelFirst as $hotel)
                                <div class="col-sm-3">
                                    <a href="{{ route('website.hotel.show', $hotel->id) }}"></a>
                                    <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="property-image bg-overlay-gradient-04">
                                            @if ($image = $image->where('hotel_id', $hotel->id)->first())
                                                <img class="img-fluid hotel-img" src="{{ $image->image }}" alt="">
                                            @endif
                                        </div>
                                        <div class="property-details">
                                            <div class="property-details-inner">
                                                <h5 class="property-title">
                                                    <a href="properties-details.html">
                                                        @if (session('locale') == 'en')
                                                            {{ $hotel->name_en }}
                                                        @else
                                                            {{ $hotel->name_ge }}
                                                        @endif
                                                    </a>
                                                </h5>
                                                <span class="property-address">
                                                    <i class="bx bx-location-plus"></i>
                                                    @if (session('locale') == 'en')
                                                        {{ $hotel->address_en }}
                                                    @else
                                                        {{ $hotel->address_ge }}
                                                    @endif
                                                </span>
                                                <div class="property-price price">
                                                    <span class="api-price">{{ $hotel->price }}</span>
                                                    <span class="price-logo api-currency">₾</span>
                                                </div>
                                            </div>
                                            <div class="property-btn">
                                                <a class="property-link"
                                                    href="{{ route('website.hotel.show', $hotel->id) }}">დეტალები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html" class="btn style5">{{ __('public._see_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->

        <!-- Property Section Start -->
        <section class="property-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>{{ __('public._best_offers') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ($hotelSeccond as $hotel)
                                <div class="col-sm-3">
                                    <a href="{{ route('website.hotel.show', $hotel->id) }}"></a>
                                    <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="property-image bg-overlay-gradient-04">
                                            @if ($image = $image->where('hotel_id', $hotel->id)->first())
                                                <img class="img-fluid hotel-img" src="{{ $image->image }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="property-details">
                                            <div class="property-details-inner">
                                                <h5 class="property-title">
                                                    <a href="properties-details.html">
                                                        @if (session('locale') == 'en')
                                                            {{ $hotel->name_en }}
                                                        @else
                                                            {{ $hotel->name_ge }}
                                                        @endif
                                                    </a>
                                                </h5>
                                                <span class="property-address">
                                                    <i class="bx bx-location-plus"></i>
                                                    @if (session('locale') == 'en')
                                                        {{ $hotel->address_en }}
                                                    @else
                                                        {{ $hotel->address_ge }}
                                                    @endif
                                                </span>
                                                <div class="property-price price">
                                                    <span class="api-price">{{ $hotel->price }}</span>
                                                    <span class="price-logo api-currency">₾</span>
                                                </div>
                                            </div>
                                            <div class="property-btn">
                                                <a class="property-link"
                                                    href="{{ route('website.hotel.show', $hotel->id) }}">დეტალები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html"
                                class="btn style5">{{ __('public._see_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->


        <!-- Property Section Start -->
        <section class="property-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>{{ __('public._most_visited') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ($hotelThird as $hotel)
                                <div class="col-sm-3">
                                    <a href="{{ route('website.hotel.show', $hotel->id) }}"></a>
                                    <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="property-image bg-overlay-gradient-04">
                                            @if ($image = $image->where('hotel_id', $hotel->id)->first())
                                                <img class="img-fluid hotel-img" src="{{ $image->image }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="property-details">
                                            <div class="property-details-inner">
                                                <h5 class="property-title">
                                                    <a href="properties-details.html">
                                                        @if (session('locale') == 'en')
                                                            {{ $hotel->name_en }}
                                                        @else
                                                            {{ $hotel->name_ge }}
                                                        @endif
                                                    </a>
                                                </h5>
                                                <span class="property-address">
                                                    <i class="bx bx-location-plus"></i>
                                                    @if (session('locale') == 'en')
                                                        {{ $hotel->address_en }}
                                                    @else
                                                        {{ $hotel->address_ge }}
                                                    @endif
                                                </span>
                                                <div class="property-price price">
                                                    <span class="api-price">{{ $hotel->price }}</span>
                                                    <span class="price-logo api-currency">₾</span>
                                                </div>
                                            </div>
                                            <div class="property-btn">
                                                <a class="property-link"
                                                    href="{{ route('website.hotel.show', $hotel->id) }}">დეტალები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html"
                                class="btn style5">{{ __('public._see_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->

        <!-- Property Section Start -->
        <section class="property-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>{{ __('public._traditional') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach ($hotelFourth as $hotel)
                                <div class="col-sm-3">
                                    <a href="{{ route('website.hotel.show', $hotel->id) }}"></a>
                                    <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="property-image bg-overlay-gradient-04">
                                            @if ($image = $image->where('hotel_id', $hotel->id)->first())
                                                <img class="img-fluid hotel-img" src="{{ $image->image }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="property-details">
                                            <div class="property-details-inner">
                                                <h5 class="property-title">
                                                    <a href="properties-details.html">
                                                        @if (session('locale') == 'en')
                                                            {{ $hotel->name_en }}
                                                        @else
                                                            {{ $hotel->name_ge }}
                                                        @endif
                                                    </a>
                                                </h5>
                                                <span class="property-address">
                                                    <i class="bx bx-location-plus"></i>
                                                    @if (session('locale') == 'en')
                                                        {{ $hotel->address_en }}
                                                    @else
                                                        {{ $hotel->address_ge }}
                                                    @endif
                                                </span>
                                                <div class="property-price price">
                                                    <span class="api-price">{{ $hotel->price }}</span>
                                                    <span class="price-logo api-currency">₾</span>
                                                </div>
                                            </div>
                                            <div class="property-btn">
                                                <a class="property-link"
                                                    href="{{ route('website.hotel.show', $hotel->id) }}">დეტალები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html"
                                class="btn style5">{{ __('public._see_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->



        <!-- Start Blog Area -->
        <div class="blog-area pb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>{{ __('public._blog') }}</h2>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1200">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="{{ route('website.blog.show', $blog->id) }}">
                                            <img src="{{ $blog->image }}" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a
                                                href="{{ route('website.blog.show', $blog->id) }}">{{ $blog->name }}</a>
                                        </h5>

                                        <div class="read-more-btn">
                                            <a class="blog-btn"
                                                href="{{ route('website.blog.show', $blog->id) }}">{{ __('public._read') }}
                                                <i class="bx bx-right-arrow-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Blog Area -->
    </div>
@stop
