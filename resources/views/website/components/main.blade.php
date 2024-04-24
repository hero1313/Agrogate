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

    <!-- Start Project Area -->
    <div class="project-area pb-60">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                <h2>Our Recent Works</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <nav class="project-tabs-button">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all-works" type="button" role="tab" aria-selected="true">
                        All Works
                    </button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#real-estate" type="button" role="tab" aria-selected="true">
                        Real Estate
                    </button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#architecture" type="button" role="tab" aria-selected="true">
                        Architecture
                    </button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#construction" type="button" role="tab" aria-selected="true">
                        Construction
                    </button>
                </div>
            </nav>
            <div class="project-tabs-content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="all-works" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-1.jpg">
                                        <img src="/website/assets/img/project/project-1.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-1</a>
                                        </h4>
                                        <div class="tags">Engineering, Drawing</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-2.jpg">
                                        <img src="/website/assets/img/project/project-2.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-2</a>
                                        </h4>
                                        <div class="tags">Equipment, Blueprint</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-3.jpg">
                                        <img src="/website/assets/img/project/project-3.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-3</a>
                                        </h4>
                                        <div class="tags">Design, Backdrop</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-4.jpg">
                                        <img src="/website/assets/img/project/project-4.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-4</a>
                                        </h4>
                                        <div class="tags">Skyline, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-5.jpg">
                                        <img src="/website/assets/img/project/project-5.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-5</a>
                                        </h4>
                                        <div class="tags">Drawing, Equipment</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-6.jpg">
                                        <img src="/website/assets/img/project/project-6.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-6</a>
                                        </h4>
                                        <div class="tags">Blueprint, Backdrop</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-7.jpg">
                                        <img src="/website/assets/img/project/project-7.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-7</a>
                                        </h4>
                                        <div class="tags">Engineering, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-8.jpg">
                                        <img src="/website/assets/img/project/project-8.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-8</a>
                                        </h4>
                                        <div class="tags">Design, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-9.jpg">
                                        <img src="/website/assets/img/project/project-9.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-9</a>
                                        </h4>
                                        <div class="tags">Blueprint, Equipment</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-10.jpg">
                                        <img src="/website/assets/img/project/project-10.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-10</a>
                                        </h4>
                                        <div class="tags">Backdrop, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-11.jpg">
                                        <img src="/website/assets/img/project/project-11.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-11</a>
                                        </h4>
                                        <div class="tags">Backdrop, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-12.jpg">
                                        <img src="/website/assets/img/project/project-12.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-12</a>
                                        </h4>
                                        <div class="tags">Urban, Equipment</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-13.jpg">
                                        <img src="/website/assets/img/project/project-13.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-13</a>
                                        </h4>
                                        <div class="tags">Blueprint, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-14.jpg">
                                        <img src="/website/assets/img/project/project-14.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-14</a>
                                        </h4>
                                        <div class="tags">Drawing, Design</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-15.jpg">
                                        <img src="/website/assets/img/project/project-15.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-15</a>
                                        </h4>
                                        <div class="tags">Engineering, Backdrop</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="real-estate" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-10.jpg">
                                        <img src="/website/assets/img/project/project-10.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-10</a>
                                        </h4>
                                        <div class="tags">Backdrop, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-11.jpg">
                                        <img src="/website/assets/img/project/project-11.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-11</a>
                                        </h4>
                                        <div class="tags">Backdrop, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-12.jpg">
                                        <img src="/website/assets/img/project/project-12.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-12</a>
                                        </h4>
                                        <div class="tags">Urban, Equipment</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-13.jpg">
                                        <img src="/website/assets/img/project/project-13.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-13</a>
                                        </h4>
                                        <div class="tags">Blueprint, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-14.jpg">
                                        <img src="/website/assets/img/project/project-14.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-14</a>
                                        </h4>
                                        <div class="tags">Drawing, Design</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-15.jpg">
                                        <img src="/website/assets/img/project/project-15.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-15</a>
                                        </h4>
                                        <div class="tags">Engineering, Backdrop</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="architecture" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-7.jpg">
                                        <img src="/website/assets/img/project/project-7.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-7</a>
                                        </h4>
                                        <div class="tags">Engineering, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-8.jpg">
                                        <img src="/website/assets/img/project/project-8.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-8</a>
                                        </h4>
                                        <div class="tags">Design, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-9.jpg">
                                        <img src="/website/assets/img/project/project-9.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-9</a>
                                        </h4>
                                        <div class="tags">Blueprint, Equipment</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-10.jpg">
                                        <img src="/website/assets/img/project/project-10.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-10</a>
                                        </h4>
                                        <div class="tags">Backdrop, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-11.jpg">
                                        <img src="/website/assets/img/project/project-11.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-11</a>
                                        </h4>
                                        <div class="tags">Backdrop, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-12.jpg">
                                        <img src="/website/assets/img/project/project-12.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-12</a>
                                        </h4>
                                        <div class="tags">Urban, Equipment</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="construction" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-4.jpg">
                                        <img src="/website/assets/img/project/project-4.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-4</a>
                                        </h4>
                                        <div class="tags">Skyline, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-5.jpg">
                                        <img src="/website/assets/img/project/project-5.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-5</a>
                                        </h4>
                                        <div class="tags">Drawing, Equipment</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-6.jpg">
                                        <img src="/website/assets/img/project/project-6.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-6</a>
                                        </h4>
                                        <div class="tags">Blueprint, Backdrop</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-7.jpg">
                                        <img src="/website/assets/img/project/project-7.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-7</a>
                                        </h4>
                                        <div class="tags">Engineering, Urban</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="1600">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-8.jpg">
                                        <img src="/website/assets/img/project/project-8.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-8</a>
                                        </h4>
                                        <div class="tags">Design, Skyline</div>
                                    </div>
                                </div>
                            </div>
                            <div class="full-col col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="single-project">
                                    <a class="popup-btn" href="/website/assets/img/project/project-9.jpg">
                                        <img src="/website/assets/img/project/project-9.jpg" alt="Image" class="project-img">
                                    </a>
                                    <div class="fancybox">
                                        <i class="bx bx-expand" aria-hidden="true"></i>
                                    </div>
                                    <div class="project-content">
                                        <h4 class="project-title">
                                            <a href="project-details.html">Project-9</a>
                                        </h4>
                                        <div class="tags">Blueprint, Equipment</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    <!-- End Project Area -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-area pb-60">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                <h2>Our Clients Feedback</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="single-testimonial-box">
                    <img src="/website/assets/img/testimonial/testimonial-img-1.jpg" class="shadow-sm" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="client-info">
                        <h3>Matthew Self</h3>
                        <span>Real Estate Brokerage Manager</span>
                    </div>
                </div>

                <div class="single-testimonial-box">
                    <img src="/website/assets/img/testimonial/testimonial-img-2.jpg" class="shadow-sm" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="client-info">
                        <h3>Gordon Kelly</h3>
                        <span>Commercial Investment Member</span>
                    </div>
                </div>

                <div class="single-testimonial-box">
                    <img src="/website/assets/img/testimonial/testimonial-img-3.jpg" class="shadow-sm" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="client-info">
                        <h3>Lauren Wilcher</h3>
                        <span>Accredited Land Consultant</span>
                    </div>
                </div>

                <div class="single-testimonial-box">
                    <img src="/website/assets/img/testimonial/testimonial-img-4.jpg" class="shadow-sm" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="client-info">
                        <h3>Janene Barker</h3>
                        <span>Certified Residential Specialist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Start Team Area -->
    <div class="team-area pb-60">
        <div class="container">
            <div class="section-title" data-aos="fade-up"
                    data-aos-duration="1200">
                <h2>Our Agent</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="row justify-content-center">
                <div class="team-col col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team-box" data-aos="fade-up"
                    data-aos-duration="1200">
                        <div class="image">
                            <a href="agent-details.html">
                                <img src="/website/assets/img/team/team-1.jpg" alt="image">
                            </a>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Rose Jennings</h3>
                            <span>Accredited Land Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="team-col col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team-box" data-aos="fade-up"
                    data-aos-duration="1400">
                        <div class="image">
                            <a href="agent-details.html">
                                <img src="/website/assets/img/team/team-2.jpg" alt="image">
                            </a>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Tim Cavanaugh</h3>
                            <span>Seller Representative Specialist</span>
                        </div>
                    </div>
                </div>
                <div class="team-col col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team-box" data-aos="fade-up"
                    data-aos-duration="1600">
                        <div class="image">
                            <a href="agent-details.html">
                                <img src="/website/assets/img/team/team-3.jpg" alt="image">
                            </a>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Sarah Cooper</h3>
                            <span>Commercial Investment Member</span>
                        </div>
                    </div>
                </div>
                <div class="team-col col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team-box" data-aos="fade-up"
                    data-aos-duration="1800">
                        <div class="image">
                            <a href="agent-details.html">
                                <img src="/website/assets/img/team/team-4.jpg" alt="image">
                            </a>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Claire Archer</h3>
                            <span>Certified Property Manager</span>
                        </div>
                    </div>
                </div>
                <div class="team-col col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team-box" data-aos="fade-up"
                    data-aos-duration="2000">
                        <div class="image">
                            <a href="agent-details.html">
                                <img src="/website/assets/img/team/team-5.jpg" alt="image">
                            </a>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Sharon Golban</h3>
                            <span>International Property Specialist</span>
                        </div>
                    </div>
                </div>
                <div class="team-col col-lg-4 col-sm-6 col-md-6">
                    <div class="single-team-box" data-aos="fade-up"
                    data-aos-duration="2200">
                        <div class="image">
                            <a href="agent-details.html">
                                <img src="/website/assets/img/team/team-6.jpg" alt="image">
                            </a>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Kenneth Tinkle</h3>
                            <span>Real Estate Brokerage Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

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

    <!-- Start Booking Form -->
    <section class="submit-property-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                        <h2>Book Any Property for Sell or Rent</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form data-aos="fade-up" data-aos-duration="1200">
                                <div class="row">
                                    <div class="mt-3 col-md-6">
                                        <label class="form-label">Your Name</label>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="mt-3 col-md-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="mt-3 col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mt-3 col-md-6">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="mt-3 col-md-6 select-border">
                                        <label class="form-label">Property Status</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">For Sale</option>
                                            <option value="value 02">For Rent</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-6 select-border">
                                        <label class="form-label">Property Type</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">Villa</option>
                                            <option value="value 02">Building</option>
                                            <option value="value 03">Commercial</option>
                                            <option value="value 04">Office</option>
                                            <option value="value 05">Residential</option>
                                            <option value="value 06">Shop</option>
                                            <option value="value 07">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-6 select-border">
                                        <label class="form-label">Select Property</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">2 Bedroom Bungalow for Rent in Private Gated</option>
                                            <option value="value 02">Modern Pool Villa for Sale in Suthep Area</option>
                                            <option value="value 03">Luxury Modern Pool Villa House for Rent</option>
                                            <option value="value 04">Supanich Condo – Studio Condo for Sale PPC</option>
                                            <option value="value 05">4 Bedrooms Luxury Modern Pool Villa for Sale</option>
                                            <option value="value 06">3 Bedrooms Exclusive Pool Villa House for Rent</option>
                                            <option value="value 07">2 Bedroom Condo for Rent at Moda Condo</option>
                                            <option value="value 08" selected="selected">Nordic Pool Villa House for Sale in San Phak</option>
                                            <option value="value 09">2 Bedroom House for Rent at Siwalee Lake Vie</option>
                                            <option value="value 10">3 Bedroom House for Sale at San Na Meng</option>
                                            <option value="value 11">4 Bedroom House with Pool for Sale at San Ka</option>
                                            <option value="value 12">[Monthly Rental] Studio for Rent at Hillside</option>
                                            <option value="value 13">Luxury Pool Villa House for Rent near Kad Fa</option>
                                            <option value="value 14">Elegance House Style for Sale in Nong Khwai</option>
                                            <option value="value 15">2 Bedroom Luxury Modern Pool Villa for Rent</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-6 select-border">
                                        <label class="form-label">Property Area</label>
                                        <select class="form-control basic-select">
                                            <option value="hang-dong-nam-phrae" selected="selected">Hang Dong, Nam Phrae</option>
                                            <option value="mueang-chiang-tha -sala">Mueang Chiang, Tha Sala</option>
                                            <option value="mae-rim-mae-sa">Mae Rim, Mae Sa</option>
                                            <option value="mueang-chiang-wat-ket">Mueang Chiang, Wat Ket</option>
                                            <option value="hang-Dong-nong-khwai">Hang Dong, Nong Khwai</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-6 select-border">
                                        <label class="form-label">Bedrooms</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">01</option>
                                            <option value="value 02">02</option>
                                            <option value="value 03">03</option>
                                            <option value="value 04">04</option>
                                            <option value="value 05">05</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-6 select-border">
                                        <label class="form-label">Bathrooms</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">01</option>
                                            <option value="value 02">02</option>
                                            <option value="value 03">03</option>
                                            <option value="value 04">04</option>
                                            <option value="value 05">05</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <a class="mt-4 btn btn-primary style3 icon" href="#"><i class="bx bx-plus-circle"></i>Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <!-- End Booking Form -->

</div>
@stop