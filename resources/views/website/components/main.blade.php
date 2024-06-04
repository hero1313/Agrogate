@extends('website.index')
@section('content')
    <div class="main page-wrapper">

        <!-- Start Banner Section -->
        <section class="banner-area bg-holder bg-overlay-black"
            style="background-image: url(/website/assets/img/banner.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <h1 data-aos="fade-up" data-aos-duration="1200" class="mb-2 text-center text-white">Search Your
                            Specific Properties From This Field</h1>
                        <p data-aos="fade-up" data-aos-duration="1400" class="mb-4 text-center text-white lead fw-normal">
                            Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique semper.</p>
                        <div data-aos="fade-up" data-aos-duration="1600" class="bg-white property-search-field">
                            <div class="property-search-item">
                                <form class="row basic-select-wrapper">
                                    <div class="form-group col-lg-3 col-md-6">
                                        <label class="form-label">Property Type</label>
                                        <select class="form-control basic-select">
                                            <option>All Type</option>
                                            <option>Villa</option>
                                            <option>Building</option>
                                            <option>Commercial</option>
                                            <option>Office</option>
                                            <option>Residential</option>
                                            <option>Shop</option>
                                            <option>Apartment</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6">
                                        <label class="form-label">City</label>
                                        <select class="form-control basic-select">
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6">
                                        <label class="form-label">visitors</label>
                                        <select class="form-control basic-select">
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6">
                                        <span class="align-items-center ms-3 d-none d-lg-block">
                                            <button class="m-auto btn btn-primary d-flex align-items-center style1" type="submit">
                                                <i class="bx bx-search"></i>
                                                <span>Search</span>
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
                    <h2>Our Featured Properties</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html" class="btn style5">See More</a>
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
                    <h2>Our Featured Properties</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html" class="btn style5">See More</a>
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
                    <h2>Our Featured Properties</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="property-image bg-overlay-gradient-04">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg"
                                            alt="">
                                        <div class="property-lable">
                                            <span class="badge badge-md bg-info">New</span>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <div class="property-details-inner">
                                            <h5 class="property-title">
                                                <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private
                                                    Gated</a>
                                            </h5>
                                            <span class="property-address">
                                                <i class="bx bx-location-plus"></i>Hang Dong, Nam Phrae
                                            </span>
                                            <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                            <div class="property-price">
                                                $200.00<span> / month</span>
                                            </div>
                                            <ul class="property-info list-unstyled d-flex">
                                                <li class="flex-fill property-bed">
                                                    <i class="bx bx-bed"></i>
                                                    Bed<span>2</span>
                                                </li>
                                                <li class="flex-fill property-bath">
                                                    <i class="bx bx-bath"></i>
                                                    Bath<span>3</span>
                                                </li>
                                                <li class="flex-fill property-m-sqft">
                                                    <i class="bx bx-square"></i>Sqft
                                                    <span>250m</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-btn">
                                            <a class="property-link" href="properties-details.html">See Details</a>
                                            <ul class="mb-0 property-listing-actions list-unstyled">
                                                <li class="property-favourites">
                                                    <a data-bs-toggle="tooltip" data-placement="top" title="Favourite"
                                                        href="#" data-bs-original-title="Favourite"
                                                        aria-label="Favourite">
                                                        <i class="bx bx-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center btn-area">
                            <a href="properties-grid-two-columns.html" class="btn style5">See More</a>
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
                    <h2>Our Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore
                        magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1200">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details-right-sidebar.html">
                                        <img src="/website/assets/img/blog/blog-1.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">3d Rendering Perfect
                                            House Visualisation</a></h5>

                                    <div class="read-more-btn">
                                        <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1400">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details-right-sidebar.html">
                                        <img src="/website/assets/img/blog/blog-2.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">Beautiful Swimming Pool
                                            Resort Model</a></h5>

                                    <div class="read-more-btn">
                                        <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1600">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details-right-sidebar.html">
                                        <img src="/website/assets/img/blog/blog-3.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">Close Up Construction
                                            Site Excavator</a></h5>

                                    <div class="read-more-btn">
                                        <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details-right-sidebar.html">
                                        <img src="/website/assets/img/blog/blog-4.jpg" alt="Blog Images">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">Singapore Skyline City
                                            Twilight Times</a></h5>

                                    <div class="read-more-btn">
                                        <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details-right-sidebar.html">
                                        <img src="/website/assets/img/blog/blog-5.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">Excellent Old Wooden
                                            House Village</a></h5>

                                    <div class="read-more-btn">
                                        <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1800">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details-right-sidebar.html">
                                        <img src="/website/assets/img/blog/blog-6.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details-right-sidebar.html">Male Worker with
                                            Bulldozer Sand Quarry</a></h5>

                                    <div class="read-more-btn">
                                        <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area -->

    </div>
@stop
