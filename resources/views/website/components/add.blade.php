@extends('website.index')
@section('content')
<div class="container main page-wrapper">

    <!-- Breadscrumb Section Start -->
    <section class="breadscrumb-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Submit Property</h2>
                        <nav>
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="bx bx-home-circle"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadscrumb Section End -->

    <!-- Start Submit Property -->
    <section class="submit-property-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                        <h2>Submit Your Own Property for Sell or Rent</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul data-aos="fade-up" data-aos-duration="1200" class="nav nav-tabs nav-tabs-03 nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-01-tab" data-bs-toggle="tab" href="#tab-01" role="tab" aria-controls="tab-01" aria-selected="true">
                                        <span>01</span>Basic Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-02-tab" data-bs-toggle="tab" href="#tab-02" role="tab" aria-controls="tab-02" aria-selected="false">
                                        <span>02</span>Gallery
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-03-tab" data-bs-toggle="tab" href="#tab-03" role="tab" aria-controls="tab-03" aria-selected="false"
                                      >
                                        <span>03</span>Location
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-04-tab" data-bs-toggle="tab" href="#tab-04" role="tab" aria-controls="tab-04" aria-selected="false">
                                        <span>04</span>Detailed Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-05-tab" data-bs-toggle="tab" href="#tab-05" role="tab" aria-controls="tab-05" aria-selected="false">
                                        <span>05</span>Floorplans
                                    </a>
                                </li>
                            </ul>
                            <div data-aos="fade-up" data-aos-duration="1600" class="mt-4 tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-01" role="tabpanel" aria-labelledby="tab-01-tab">
                                    <form>
                                        <div class="row">
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Property Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="mt-3 col-md-6 select-border">
                                                <label class="form-label">Property Status</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">For Sale</option>
                                                    <option value="value 02">For Rent</option>
                                                </select>
                                            </div>
                                            <div class="mt-3 col-md-6 select-border">
                                                <label class="form-label">Rental Period</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">Monthly</option>
                                                    <option value="value 02">Yearly</option>
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
                                            <div class="mt-3 col-md-6">
                                                <label class="d-block form-label">Property Price</label>
                                                <div class="input-group input-group-box">
                                                    <div class="input-group-text"><i class="bx bx-dollar"></i></div>
                                                    <input type="text" class="form-control" placeholder="Total Amount">
                                                </div>
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Area</label>
                                                <input type="text" class="form-control" placeholder="Type (Sqft)">
                                            </div>
                                            <div class="mt-3 col-md-6 select-border">
                                                <label class="form-label">Rooms</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">01</option>
                                                    <option value="value 02">02</option>
                                                    <option value="value 03">03</option>
                                                    <option value="value 04">04</option>
                                                    <option value="value 05">05</option>
                                                </select>
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Video</label>
                                                <input type="url" class="form-control" placeholder="URL">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-02" role="tabpanel" aria-labelledby="tab-02-tab">
                                    <div class="input-group file-upload">
                                        <input type="file" class="form-control" id="customFile">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-03" role="tabpanel" aria-labelledby="tab-03-tab">
                                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/6h7Kt0LMNxM" title="BREATHTAKING MODERN LUXURY HOUSE TOUR NEAR HOUSTON TEXAS | TEXAS REAL ESTATE | $656,990+" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    <form>
                                        <div class="mt-4 row">
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Google Maps Address</label>
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">General Address</label>
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Longitude</label>
                                                <input type="text" class="form-control" placeholder="-102.243340">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Latitude</label>
                                                <input type="text" class="form-control" placeholder="21.852270">
                                            </div>
                                            <div class="mt-3 col-md-12 select-border">
                                                <label class="form-label">Regions</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">Los Hang Dong, Nam Phrae</option>
                                                    <option value="value 02">Mueang Chiang, Tha Sala</option>
                                                    <option value="value 03">Mae Rim, Mae Sa</option>
                                                    <option value="value 04">Mueang Chiang, Wat Ket</option>
                                                    <option value="value 05">Hang Dong, Nong Khwai</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-04" role="tabpanel" aria-labelledby="tab-04-tab">
                                    <form>
                                        <div class="mt-4 row">
                                            <div class="mt-3 col-md-6 select-border">
                                                <label class="form-label">Building Age</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">0 to 5 Years</option>
                                                    <option value="value 02">5 to 10 Years</option>
                                                    <option value="value 03">10 to 20 Years</option>
                                                    <option value="value 04">20 to 50 Years</option>
                                                    <option value="value 05">Above 50 Years</option>
                                                </select>
                                            </div>
                                            <div class="mt-3 col-md-6 select-border">
                                                <label class="form-label">Bedrooms</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">1</option>
                                                    <option value="value 02">2</option>
                                                    <option value="value 03">3</option>
                                                    <option value="value 04">4</option>
                                                    <option value="value 05">5</option>
                                                </select>
                                            </div>
                                            <div class="mt-3 col-md-6 select-border">
                                                <label class="form-label">Bathrooms</label>
                                                <select class="form-control basic-select">
                                                    <option value="value 01" selected="selected">1</option>
                                                    <option value="value 02">2</option>
                                                    <option value="value 03">3</option>
                                                    <option value="value 04">4</option>
                                                    <option value="value 05">5</option>
                                              </select>
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Parking</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Cooling</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Heating</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Sewer</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Water</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Exercise Room</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Storage Room</label>
                                                <input type="text" class="form-control" placeholder="Yes or No">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-05" role="tabpanel" aria-labelledby="tab-05-tab">
                                    <form>
                                        <div class="row">
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Browser File</label>
                                                <div class="input-group file-upload">
                                                    <input type="file" class="form-control" id="customFile">
                                                </div>
                                            </div>
                                            <div class="mt-3 col-md-6">
                                                <label class="form-label">Floorplan Title</label>
                                                <input type="text" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="mt-3 col-md-12">
                                                <label class="form-label">Area</label>
                                                <input type="text" class="form-control" placeholder="Type (Sqft)">
                                            </div>
                                            <div class="mt-3 col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="4" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <a class="mt-4 btn btn-primary style3 icon" href="#"><i class="bx bx-plus-circle"></i>Upload Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <!-- End Submit Property -->

</div>
@stop