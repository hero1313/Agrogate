@extends('website.index')
@section('content')
<div class="main page-wrapper">

    <!-- Start Banner Section -->
    <section class="banner-area bg-holder bg-overlay-black" style="background-image: url(/website/assets/img/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <h1 data-aos="fade-up" data-aos-duration="1200" class="mb-2 text-center text-white">Search Your Specific Properties From This Field</h1>
                    <p data-aos="fade-up" data-aos-duration="1400" class="mb-4 text-center text-white lead fw-normal">Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique semper.</p>
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
                                    <label class="form-label">Status</label>
                                    <select class="form-control basic-select">
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex col-lg-4">
                                    <div class="form-group-search">
                                        <label class="form-label">Location</label>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-compass me-1"></i>
                                            <div id="locationField">
                                                <input id="autocomplete" class="form-control" type="search" placeholder="Search Location" onFocus="geolocate()">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="align-items-center ms-3 d-none d-lg-block">
                                        <button class="btn btn-primary d-flex align-items-center style1" type="submit">
                                            <i class="bx bx-search"></i>
                                            <span>Search</span>
                                        </button>
                                    </span>
                                </div>
                                <div class="text-center form-group col-lg-2">
                                    <div class="d-flex justify-content-center d-md-inline-block">
                                        <a class="p-0 more-search" data-bs-toggle="collapse" href="#advanced-search" role="button" aria-expanded="false" aria-controls="advanced-search"> 
                                            <span class="mb-1 d-block">Advanced Search</span>
                                            <i class="bx bx-chevrons-down"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-0 collapse advanced-search" id="advanced-search">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label class="form-label">Distance from Location</label>
                                                <select class="form-control basic-select">
                                                    <option>This Area Only</option>
                                                    <option>Within 1 Mile</option>
                                                    <option>Within 3 Miles</option>
                                                    <option>Within 5 Miles</option>
                                                    <option>Within 10 Miles</option>
                                                    <option>Within 15 Miles</option>
                                                    <option>Within 30 Miles</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="form-label">Bedrooms</label>
                                                <select class="form-control basic-select">
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="form-label">Sort By</label>
                                                <select class="form-control basic-select">
                                                    <option>Most Popular</option>
                                                    <option>Highest Price</option>
                                                    <option>Lowest Price</option>
                                                    <option>Most Reduced</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="form-label">Floor</label>
                                                <select class="form-control basic-select">
                                                    <option>Select Floor</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label class="form-label">Min Area (Sqft)</label>
                                                <input type="text" class="form-control" placeholder="Type (Sqft)">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="form-label">Max Area (Sqft)</label>
                                                <input type="text" class="form-control" placeholder="Type (Sqft)">
                                            </div>
                                            <div class="form-group col-md-6 property-price-slider ">
                                                <label class="form-label">Select Price Range</label>
                                                <input type="text" id="property-price-slider" name="example_name" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 d-lg-none btn-mobile d-grid">
                                    <button class="btn btn-primary align-items-center style1" type="submit"><i class="bx bx-search me-1"></i><span>Search</span></button>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1200">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-1.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Rose Jennings</a>
                                            <span class="d-block">Accredited Land Consultant</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>10</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">2 Bedroom Bungalow for Rent in Private Gated</a>
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
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>250m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1400">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-2.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Tim Cavanaugh</a>
                                            <span class="d-block">Seller Representative Specialist</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>8</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">Modern Pool Villa for Sale in Suthep Area</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang, Tha Sala
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                        <div class="property-price">
                                            $2500.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>350m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1600">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-3.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Sarah Cooper</a>
                                            <span class="d-block">Commercial Investment Member</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>12</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">Luxury Modern Pool Villa House for Rent</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mae Rim, Mae Sa
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>2 weeks ago</span>
                                        <div class="property-price">
                                            $250.00<span> / month</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>2</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>250m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1800">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-4.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Claire Archer</a>
                                            <span class="d-block">Certified Property Manager</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>10</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">Supanich Condo – Studio Condo for Sale PPC</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang Mai, Wat Ket
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>2 weeks ago</span>
                                        <div class="property-price">
                                            $3000.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>4</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>400m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="2000">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-5.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                    </div>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Sharon Golban</a>
                                            <span class="d-block">International Property Specialist</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>13</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">4 Bedrooms Luxury Modern Pool Villa for Sale</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Hang Dong, Nong Khwai
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>3 weeks ago</span>
                                        <div class="property-price">
                                            $2800.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>4</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>4</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>400m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="2200">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-6.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                    </div>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Kenneth Tinkle</a>
                                            <span class="d-block">Real Estate Brokerage Manager</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>14</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">3 Bedrooms Exclusive Pool Villa House for Rent</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang, Tha Sala
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>3 weeks ago</span>
                                        <div class="property-price">
                                            $270.00<span> / month</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>2</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>300m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1200">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-7.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Rose Jennings</a>
                                            <span class="d-block">Accredited Land Consultant</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>10</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">2 Bedroom Condo for Rent at Moda Condo</a>
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
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>250m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1400">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-8.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Tim Cavanaugh</a>
                                            <span class="d-block">Seller Representative Specialist</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>8</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">Nordic Pool Villa House for Sale in San Phak</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang, Tha Sala
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                        <div class="property-price">
                                            $2500.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>350m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1600">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-9.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Sarah Cooper</a>
                                            <span class="d-block">Commercial Investment Member</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>12</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">2 Bedroom House for Rent at Siwalee Lake Vie</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mae Rim, Mae Sa
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>2 weeks ago</span>
                                        <div class="property-price">
                                            $250.00<span> / month</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>2</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>250m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1800">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-10.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Claire Archer</a>
                                            <span class="d-block">Certified Property Manager</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>10</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">3 Bedroom House for Sale at San Na Meng</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang Mai, Wat Ket
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>2 weeks ago</span>
                                        <div class="property-price">
                                            $3000.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>4</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>400m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="2000">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-11.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                    </div>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Sharon Golban</a>
                                            <span class="d-block">International Property Specialist</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>13</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">4 Bedroom House with Pool for Sale at San Ka</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Hang Dong, Nong Khwai
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>3 weeks ago</span>
                                        <div class="property-price">
                                            $2800.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>4</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>4</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>400m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="2200">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-12.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                    </div>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Kenneth Tinkle</a>
                                            <span class="d-block">Real Estate Brokerage Manager</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>14</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">[Monthly Rental] Studio for Rent at Hillside</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang, Tha Sala
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>3 weeks ago</span>
                                        <div class="property-price">
                                            $270.00<span> / month</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>2</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>300m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1200">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-13.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Rose Jennings</a>
                                            <span class="d-block">Accredited Land Consultant</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>10</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">Luxury Pool Villa House for Rent near Kad Fa</a>
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
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>250m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1400">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-14.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-success">For Sale</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Tim Cavanaugh</a>
                                            <span class="d-block">Seller Representative Specialist</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>8</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">Elegance House Style for Sale in Nong Khwai</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mueang Chiang, Tha Sala
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>1 week ago</span>
                                        <div class="property-price">
                                            $2500.00<span> / year</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>3</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>350m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
                                                    <i class="bx bx-heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item" data-aos="fade-up"
                    data-aos-duration="1600">
                                <div class="property-image bg-overlay-gradient-04">
                                    <img class="img-fluid" src="/website/assets/img/property/property-15.jpg" alt="">
                                    <div class="property-lable">
                                        <span class="badge badge-md bg-primary">For Rent</span>
                                        <span class="badge badge-md bg-info">New</span>
                                    </div>
                                    <span class="property-trending" title="Trending"><i class="bx bxs-bolt"></i></span>
                                    <div class="property-agent">
                                        <div class="property-agent-image">
                                            <a href="agent-details.html">
                                                <img class="img-fluid" src="/website/assets/img/team/team-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="property-agent-info">
                                            <a class="property-agent-name" href="agent-details.html">Sarah Cooper</a>
                                            <span class="d-block">Commercial Investment Member</span>
                                            <ul class="property-agent-contact list-unstyled">
                                                <li>
                                                    <a href="#"><i class="bx bx-mobile"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="bx bx-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="property-agent-popup">
                                        <a href="#"><i class="bx bxs-camera"></i>12</a>
                                    </div>
                                </div>
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h5 class="property-title">
                                            <a href="properties-details.html">2 Bedroom Luxury Modern Pool Villa for Rent</a>
                                        </h5>
                                        <span class="property-address">
                                            <i class="bx bx-location-plus"></i>Mae Rim, Mae Sa
                                        </span>
                                        <span class="property-agent-date"><i class="bx bx-time"></i>2 weeks ago</span>
                                        <div class="property-price">
                                            $250.00<span> / month</span>
                                        </div>
                                        <ul class="property-info list-unstyled d-flex">
                                            <li class="flex-fill property-bed">
                                                <i class="bx bx-bed"></i>
                                                Bed<span>2</span>
                                            </li>
                                            <li class="flex-fill property-bath">
                                                <i class="bx bx-bath"></i>
                                                Bath<span>3</span></li>
                                            <li class="flex-fill property-m-sqft">
                                                <i class="bx bx-square"></i>Sqft
                                                <span>250m</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-btn">
                                        <a class="property-link" href="properties-details.html">See Details</a>
                                        <ul class="mb-0 property-listing-actions list-unstyled">
                                            <li class="property-compare">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#" data-bs-original-title="Compare" aria-label="Compare">
                                                    <i class="bx bx-transfer"></i>
                                                </a>
                                            </li>
                                            <li class="property-favourites">
                                                <a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#" data-bs-original-title="Favourite" aria-label="Favourite">
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
            <div class="section-title" data-aos="fade-up"
            data-aos-duration="1200">
                <h2>Our Latest Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="content-blog blog-grid" data-aos="fade-up"
            data-aos-duration="1200">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details-right-sidebar.html">
                                    <img src="/website/assets/img/blog/blog-1.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-category">
                                    <a href="#">Technology</a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="blog-details-right-sidebar.html">3d Rendering Perfect House Visualisation</a></h5>

                                <div class="read-more-btn">
                                    <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content-blog blog-grid" data-aos="fade-up"
            data-aos-duration="1400">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details-right-sidebar.html">
                                    <img src="/website/assets/img/blog/blog-2.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-category">
                                    <a href="#">City</a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="blog-details-right-sidebar.html">Beautiful Swimming Pool Resort Model</a></h5>

                                <div class="read-more-btn">
                                    <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content-blog blog-grid" data-aos="fade-up"
            data-aos-duration="1600">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details-right-sidebar.html">
                                    <img src="/website/assets/img/blog/blog-3.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-category">
                                    <a href="#">Building</a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="blog-details-right-sidebar.html">Close Up Construction Site Excavator</a></h5>

                                <div class="read-more-btn">
                                    <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content-blog blog-grid" data-aos="fade-up"
            data-aos-duration="1800">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details-right-sidebar.html">
                                    <img src="/website/assets/img/blog/blog-4.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-category">
                                    <a href="#">Development</a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="blog-details-right-sidebar.html">Singapore Skyline City Twilight Times</a></h5>

                                <div class="read-more-btn">
                                    <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content-blog blog-grid" data-aos="fade-up"
            data-aos-duration="1800">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details-right-sidebar.html">
                                    <img src="/website/assets/img/blog/blog-5.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-category">
                                    <a href="#">Innovation</a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="blog-details-right-sidebar.html">Excellent Old Wooden House Village</a></h5>

                                <div class="read-more-btn">
                                    <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content-blog blog-grid" data-aos="fade-up"
            data-aos-duration="1800">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-details-right-sidebar.html">
                                    <img src="/website/assets/img/blog/blog-6.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-category">
                                    <a href="#">Digital</a>
                                </div>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="blog-details-right-sidebar.html">Male Worker with Bulldozer Sand Quarry</a></h5>

                                <div class="read-more-btn">
                                    <a class="blog-btn" href="blog-details-right-sidebar.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
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