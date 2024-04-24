@extends('website.index')
@section('content')
<div class="main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Properties Grid Left Sidebar</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Properties Grid Left Sidebar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadscrumb Section End -->
    
    <!-- Property Section Start -->
    <section class="property-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up"
                    data-aos-duration="1200">
                    <div class="mb-3 result-title mb-lg-4">
                        <h2><span class="text-primary">06</span> Results</h2>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up"
                    data-aos-duration="1600">
                    <div class="property-filter-tag">
                        <ul class="list-unstyled">
                        <li><a href="#">Apartment <i class="bx bx-x"></i> </a></li>
                        <li><a class="filter-clear" href="#">Reset Search <i class="bx bx-redo"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar left-sidebar" data-aos="fade-up"
                data-aos-duration="1200">
                        <div class="widget">
                            <div class="widget-title widget-collapse">
                                <h6>Advanced Filter</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#filter-property" role="button" aria-expanded="false" aria-controls="filter-property"> <i class="bx bx-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="filter-property">
                                <form class="mt-3">
                                    <div class="mb-2 select-border">
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
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>Distance from Location</option>
                                            <option>Within 1 Mile</option>
                                            <option>Within 3 Miles</option>
                                            <option>Within 5 Miles</option>
                                            <option>Within 10 Miles</option>
                                            <option>Within 15 Miles</option>
                                            <option>Within 30 Miles</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>Bedrooms</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>Bathrooms</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>Kitchens</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>Sort by</option>
                                            <option>Most Popular</option>
                                            <option>Highest Price</option>
                                            <option>Lowest Price</option>
                                            <option>Most Reduced</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 select-border">
                                        <select class="form-control basic-select">
                                            <option>Select Floor</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" placeholder="Type (Sqft)">
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" placeholder="Type (Sqft)">
                                    </div>
                                     <div class="mt-3 mb-3 property-price-slider">
                                        <label class="form-label">Select Price Range</label>
                                        <input type="text" id="property-price-slider" name="example_name" value="" />
                                    </div>
                                    <div class="mb-2 d-grid">
                                        <button class="btn btn-primary align-items-center" type="submit"><i class="bx bx-filter-alt me-1"></i><span>Filter</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget" data-aos="fade-up"
                data-aos-duration="1400">
                            <div class="widget-title widget-collapse">
                                <h6>Status of Property</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#status-property" role="button" aria-expanded="false" aria-controls="status-property"> <i class="bx bx-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="status-property">
                                <ul class="pt-3 mb-0 list-unstyled">
                                    <li><a href="#">For Rent<span class="ms-auto">(50)</span></a></li>
                                    <li><a href="#">For Sale<span class="ms-auto">(100)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget" data-aos="fade-up"
                data-aos-duration="1600">
                            <div class="widget-title widget-collapse">
                                <h6>Type of Property</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#type-property" role="button" aria-expanded="false" aria-controls="type-property"> <i class="bx bx-chevron-down"></i></a>
                            </div>
                            <div class="collapse show" id="type-property">
                                <ul class="pt-3 mb-0 list-unstyled">
                                    <li><a href="#">Residential<span class="ms-auto">(12)</span></a></li>
                                    <li><a href="#">Commercial<span class="ms-auto">(45)</span></a></li>
                                    <li><a href="#">Industrial<span class="ms-auto">(23)</span></a></li>
                                    <li><a href="#">Apartment<span class="ms-auto">(05)</span></a></li>
                                    <li><a href="#">Building Code<span class="ms-auto">(10)</span></a></li>
                                    <li><a href="#">Communal Land<span class="ms-auto">(47)</span></a></li>
                                    <li><a href="#">Insurability<span class="ms-auto">(32)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget" data-aos="fade-up"
                data-aos-duration="1800">
                            <div class="widget-title widget-collapse">
                                <h6>Area of Property</h6>
                                <a class="ms-auto" data-bs-toggle="collapse" href="#area-property" role="button" aria-expanded="false" aria-controls="area-property"> <i class="bx bx-chevron-down"></i> </a>
                            </div>
                            <div class="collapse show" id="area-property">
                                <ul class="pt-3 mb-0 list-unstyled">
                                    <li><a href="#">Hang Dong, Nam Phrae<span class="ms-auto">(10)</span></a></li>
                                    <li><a href="#">Mueang Chiang, Tha Sala<span class="ms-auto">(9)</span></a></li>
                                    <li><a href="#">Mae Rim, Mae Sa<span class="ms-auto">(8)</span></a></li>
                                    <li><a href="#">Mueang Chiang, Wat Ket<span class="ms-auto">(7)</span></a></li>
                                    <li><a href="#">Hang Dong, Nong Khwai<span class="ms-auto">(6)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget" data-aos="fade-up"
                data-aos-duration="2000">
                            <div class="widget-title">
                                <h6>Mortgage Calculator</h6>
                            </div>
                            <form>
                                <div class="mb-2">
                                    <div class="input-group input-group-box">
                                        <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                        <input type="text" class="form-control" placeholder="Total Amount">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="input-group input-group-box">
                                        <span class="input-group-text"><i class="bx bx-dollar-circle"></i></span>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Down Payment">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="input-group input-group-box">
                                        <span class="input-group-text"><i class="bx bx-plus-circle"></i></span>
                                        <input type="text" class="form-control" placeholder="Interest Rate">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="input-group input-group-box">
                                        <span class="input-group-text"><i class="bx bx-time-five"></i></span>
                                        <input type="text" class="form-control" placeholder="Loan Term (Years)">
                                    </div>
                                </div>
                                <div class="mb-3 select-border">
                                    <select class="form-control basic-select">
                                        <option>Monthly</option>
                                        <option>Weekly</option>
                                        <option>Yearly</option>
                                    </select>
                                </div>
                                <a class="btn btn-primary d-grid" href="#">Calculate</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="property-filter d-sm-flex" data-aos="fade-up"
                    data-aos-duration="1200">
                        <ul class="mb-0 property-short list-unstyled d-sm-flex">
                            <li>
                                <form class="form-inline">
                                    <div class="d-lg-flex d-block">
                                        <label class="justify-content-start">Sort by:</label>
                                        <div class="short-by">
                                            <select class="basic-select">
                                                <option>Date New to Old</option>
                                                <option>Date Old to New</option>
                                                <option>Price Low to High</option>
                                                <option>Price High to Low</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="mb-0 property-view-list property-short list-unstyled d-flex">
                            <li>
                                <form class="form-inline">
                                    <div class="mb-3 d-lg-flex d-block mb-sm-0">
                                        <label class="mb-2 justify-content-start mb-sm-0">Sort by: </label>
                                        <div class="short-by">
                                            <select class="basic-select">
                                                <option>12</option>
                                                <option>18 </option>
                                                <option>24 </option>
                                                <option>64 </option>
                                                <option>128</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a class="property-list-icon property-icon" href="properties-list-left-sidebar.html">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li>
                                <a class="property-grid-icon property-icon active" href="properties-grid-three-columns.html">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
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
                        <div class="col-sm-4">
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
                        <div class="col-sm-4">
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
                        <div class="col-sm-4">
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
                        <div class="col-sm-4">
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
                        <div class="col-sm-4">
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
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="post-pagination" data-aos="fade-up"
                data-aos-duration="1200">
                                <nav class="navigation pagination" aria-label="Blog">
                                    <ul class="page-numbers">
                                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                                        <li><a class="page-numbers" href="#">2</a></li>
                                        <li><a class="page-numbers" href="#">3</a></li>
                                        <li><a class="page-numbers" href="#">4</a></li>
                                        <li><a class="page-numbers" href="#">5</a></li>
                                        <li><a class="next page-numbers" href="#"><i class="bx bx-right-arrow-alt"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

</div>
@stop