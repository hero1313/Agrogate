@extends('website.index')
@section('content')
    <div class="main page-wrapper">



        <!-- Property Section Start -->
        <section class="property-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar left-sidebar" data-aos="fade-up" data-aos-duration="1200">
                            <div class="widget">
                                <div class="widget-title widget-collapse">
                                    <h6>Advanced Filter</h6>
                                    <a class="ms-auto" data-bs-toggle="collapse" href="#filter-property" role="button"
                                        aria-expanded="false" aria-controls="filter-property"> <i
                                            class="bx bx-chevron-down"></i> </a>
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
                                            <input type="text" id="property-price-slider" name="example_name"
                                                value="" />
                                        </div>
                                        <div class="mb-2 d-grid">
                                            <button class="btn btn-primary align-items-center" type="submit"><i
                                                    class="bx bx-filter-alt me-1"></i><span>Filter</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->

    </div>
@stop
