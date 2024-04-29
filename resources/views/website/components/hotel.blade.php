@extends('website.index')
@section('content')
<div class="container main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Properties Details</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Properties Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadscrumb Section End -->

    <!-- Start Properties Details -->
    <section class="property-details-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="mb-5 col-lg-4 mb-lg-0 order-lg-2">
                    <div class="sticky-top">
                        <div data-aos="fade-up" data-aos-duration="1200" class="mb-4">
                            <h3 class="title">2 Bedroom Bungalow for Rent in Private Gated</h3>
                            <span class="mb-3 d-block">
                                <i class="bx bx-location-plus pe-2"></i>Hang Dong, Nam Phrae.
                            </span>
                            <span class="price d-block">$200.00</span>
                            <ul class="property-detail-meta list-unstyled ">
                                <li>
                                    <a href="#">
                                        <i class="bx bx-star text-warning pe-2"></i>4.9/5
                                    </a>
                                </li>
                                <li class="share-box">
                                    <a href="#">
                                        <i class="bx bx-share-alt"></i>
                                    </a>
                                    <ul class="list-unstyled share-box-social">
                                        <li>
                                            <a href="#">
                                                <i class="ri-facebook-fill"></i>
                                            </a> 
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-transfer"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-printer"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1400" class="p-4 agent-contact-inner bg-dark">
                            <div class="mb-4 d-flex align-items-center">
                                <div class="agent-contact-avatar me-3">
                                    <img class="img-fluid rounded-circle avatar avatar-lg" src="/website/assets/img/team/team-1.jpg" alt="">
                                </div>
                                <div class="agent-contact-name">
                                    <a href="agent-details.html"><h6 class="text-white">Rose Jennings</h6></a>
                                    <span class="text-white">Accredited Land Consultant</span>
                                </div>
                            </div>
                            <div class="mb-4 contact-info d-flex align-items-center">
                                <h6 class="p-2 mb-0 border text-primary">
                                    <a href="#"><i class="text-white fas fa-phone-volume pe-2"></i>+12 345 678 999</a>
                                </h6>
                                <a class="p-0 btn btn-link ms-auto" href="properties-grid-three-columns.html"><u>View All Properties</u></a>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email Address">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Your Phone Number">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Write Message"></textarea>
                                </div>
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="text-white form-check-label" for="flexCheckDefault">
                                        I here by agree for processing my personal data.
                                    </label>
                                </div>
                                <a class="btn btn-primary d-grid style5" href="#">Send Message</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <div data-aos="fade-up" data-aos-duration="1200" class="overflow-hidden property-detail-gallery">
                        <ul class="mb-4 nav nav-tabs nav-tabs-02" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="shadow nav-link active" id="photo-tab" data-bs-toggle="pill" href="#photo" role="tab" aria-controls="photo" aria-selected="true">Photos</a>
                            </li>
                            <li class="nav-item">
                                <a class="shadow nav-link" id="map-tab" data-bs-toggle="pill" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                                <div class="slider-slick">
                                    <div class="slider slider-for detail-big-car-gallery">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-2.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-3.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-4.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-5.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-6.jpg" alt="">
                                    </div>
                                    <div class="slider slider-nav">
                                        <img class="img-fluid" src="/website/assets/img/property/property-1.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-2.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-3.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-4.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-5.jpg" alt="">
                                        <img class="img-fluid" src="/website/assets/img/property/property-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.02560011993!2d153.34829181506035!3d-27.623723782826637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b916f83ff49ce55%3A0x974857d5f6dd6fcd!2s124%20Western%20Rd%2C%20MacLeay%20Island%20QLD%204184%2C%20Australia!5e0!3m2!1sen!2sbd!4v1645960528528!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1400" class="mt-5 property-info">
                        <div class="row">
                            <div class="mb-3 col-sm-3 mb-sm-0">
                                <h5>Property Details</h5>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <ul class="property-list list-unstyled">
                                            <li><b>Property ID:</b> RV151</li>
                                            <li><b>Price:</b> $200.00</li>
                                            <li><b>Property Size:</b> 250 Sqft</li>
                                            <li><b>Bedrooms:</b> 2</li>
                                            <li><b>Bathrooms:</b> 3</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="property-list list-unstyled">
                                           <li><b>Garage:</b> 1</li>
                                           <li><b>Garage Size:</b> 458 SqFt</li>
                                           <li><b>Year Built:</b> 2023-01-09</li>
                                           <li><b>Property Type:</b> Full  Family Home</li>
                                           <li><b>Property Status:</b> For Rent</li>
                                        </ul>
                                    </div>
                                </div>
                                <h6 class="text-primary">Additional details</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                       <ul class="mb-0 property-list list-unstyled">
                                           <li><b>Deposit:</b> 30%</li>
                                           <li><b>Pool Size:</b> 457 Sqft</li>
                                           <li><b>Last remodel year:</b> 2000</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="mb-0 property-list list-unstyled">
                                            <li><b>Amenities:</b> Clubhouse</li>
                                            <li><b>Additional Rooms:</b> Guest Bat</li>
                                            <li><b>Equipment:</b> Grill - Gas - light</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                    <div data-aos="fade-up" data-aos-duration="1600" class="property-description">
                        <div class="row">
                            <div class="mb-3 col-sm-3 mb-sm-0">
                                <h5>Description</h5>
                            </div>
                            <div class="col-sm-9">
                                <p>Phasellus dictum ipsum nec rutrum tristique. Aliquam a mauris lacinia, condimentum tellus a, mattis nisl. Sed hendrerit viverra elit tempus venenatis. Morbi vel faucibus odio. Nunc vulputate convallis scelerisque. Mauris sollicitudin elit eget ante pharetra, nec suscipit nisl sagittis. Suspendisse euismod a augue pretium dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Sed do eiusmod tempor incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                    <div data-aos="fade-up" data-aos-duration="2000" class="property-features">
                        <div class="row">
                            <div class="mb-3 col-sm-3 mb-sm-0">
                                <h5>Features</h5>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="mb-0 property-list-style-2 list-unstyled">
                                            <li>TV Cable</li>
                                            <li>Air Conditioning</li>
                                            <li>Barbeque</li>
                                            <li>Gym</li>
                                            <li>Swimming Pool</li>
                                            <li>Laundry</li>
                                            <li>Microwave</li>
                                            <li>Outdoor Shower</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="mb-0 property-list-style-2 list-unstyled">
                                            <li>Lawn</li>
                                            <li>Refrigerator</li>
                                            <li>Sauna</li>
                                            <li>Washer</li>
                                            <li>Dryer</li>
                                            <li>WiFi</li>
                                            <li>Window Coverings</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                    <div data-aos="fade-up" data-aos-duration="2200" class="property-address">
                        <div class="row">
                            <div class="mb-3 col-sm-3 mb-sm-0">
                                <h5>Address</h5>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="mb-0 property-list list-unstyled">
                                            <li><b>Address:</b> Hang Dong, Nam Phrae.</li>
                                            <li><b>State:</b> Chiang Mai</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="mb-0 property-list list-unstyled">
                                            <li><b>City:</b> Hang Dong</li>
                                            <li><b>Country:</b> Thailand</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                    <div data-aos="fade-up" data-aos-duration="2600" class="property-video">
                        <div class="row">
                            <div class="mb-3 col-sm-3 mb-sm-0">
                                <h5>Property Video</h5>
                            </div>
                            <div class="col-sm-9">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/6h7Kt0LMNxM" title="BREATHTAKING MODERN LUXURY HOUSE TOUR NEAR HOUSTON TEXAS | TEXAS REAL ESTATE | $656,990+" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Properties Details -->

</div>
@stop