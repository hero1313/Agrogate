@extends('website.index')
@section('content')
    <div class="container main page-wrapper">

        <!-- Start Properties Details -->
        <section class="property-details-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="mb-5 col-lg-3 mb-lg-0 order-lg-2">
                        <div class="sticky-top">
                            <div data-aos="fade-up" data-aos-duration="1200" class="mb-4">
                                <h3 class="title">{{ $service->name_ge }}</h3>
                                <span class="mb-3 d-block">
                                    <i class="bx bx-location-plus pe-2"></i>{{ $service->address_ge }}
                                </span>
                                <span class="price d-block">{{ $service->price }}</span>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1400" class="p-4 agent-contact-inner bg-dark">
                                <div class="mb-4 d-flex align-items-center">
                                    <div class="agent-contact-avatar me-3">
                                        <img class="img-fluid rounded-circle avatar avatar-lg"
                                            src="/website/assets/img/team/team-1.jpg" alt="">
                                    </div>
                                    <div class="agent-contact-name">
                                        <a href="agent-details.html">
                                            <h6 class="text-white">{{ $company->company_name }}</h6>
                                        </a>
                                        <span class="text-white ">{{ $company->name }}</span>
                                    </div>
                                </div>
                                <div class="agent-contact-name">
                                    <h6 class="text-white service-description">{{ $service->description_ge }}</h6>
                                </div>
                                <div class="mb-4 contact-info d-flex align-items-center">
                                    <button class="btn btn-booking" data-toggle="modal"
                                        data-target="#booking">დაჯავშნა</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-1">
                        <div data-aos="fade-up" data-aos-duration="1200" class="overflow-hidden property-detail-gallery">
                            @if ($service->google_map)
                                <ul class="mb-4 nav nav-tabs nav-tabs-02" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="shadow nav-link active" id="photo-tab" data-bs-toggle="pill"
                                            href="#photo" role="tab" aria-controls="photo"
                                            aria-selected="true">Photos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="shadow nav-link" id="map-tab" data-bs-toggle="pill" href="#map"
                                            role="tab" aria-controls="map" aria-selected="false">Map</a>
                                    </li>
                                </ul>
                            @endif
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active service-images" id="photo" role="tabpanel"
                                    aria-labelledby="photo-tab">
                                    <div class="swiper mySwipers">
                                        <div class="swiper-wrapper">
                                            @foreach ($images as $image)
                                                <div class="swiper-slide"><img class="service-image"
                                                        src="{{ $image->image }}" alt=""></div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                @if ($service->google_map)
                                    <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                                        {!! $service->google_map !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1400" class="mt-5 property-info">
                            <div class="row">
                                <div class="mb-3 col-sm-3 mb-sm-0">
                                    <h5>დეტალები</h5>
                                </div>
                                <div class="col-sm-9">
                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <ul class="property-list list-unstyled">
                                                <li><b>ქალაქი:</b> {{ $service->city_ge }}</li>
                                                <li><b>მისამართი:</b> {{ $service->address_ge }}</li>
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
                                    <h5>აღწერა</h5>
                                </div>
                                <div class="col-sm-9">
                                    <p>{{ $service->description_ge }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Properties Details -->

    </div>
    <!-- Modal -->
    <div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{ route('service.item.booking.store', $service->id) }}" method="post">
                @csrf
                <div class="modal-content row">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">სერვისის დაჯავშნა</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="d-flex">
                        <div class="col-sm-12">
                            <div class="modal-body booking-body-1">
                                <div class="d-flex">
                                    <img src="{{ $images->first()->image }}" alt="">
                                    <div class="booking-text">
                                        <h5>{{ $service->name_ge }}</h5>
                                        <div class="mt-2 date-picker booking-date-picker">
                                            <label for="dateInput">
                                                <span>აირჩიე თარიღი <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="#fff" class="ml-3 bi bi-calendar-week"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                </svg>
                                            </span>
                                            </label>
                                            <div class="calendar-box">
                                                <input type="text" id="dateInput" autocomplete="false" name="date">
                                                <div class="calendar single-calendar" id="calendar">
                                                    <div class="header">
                                                        <button id="prevBtn">&lt;</button>
                                                        <h2 id="monthYear">Month Year</h2>
                                                        <button id="nextBtn">&gt;</button>
                                                    </div>
                                                    <div class="days" id="daysContainer"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 col-6 form-group serv-quantity">
                                        <label for="quantity">რაოდენობა</label>
                                        <input type="number" value="1" min="1" name="quantity"
                                            id="quantity" class="mt-2 form-control">
                                    </div>
                                </div>
                                <div class="mt-4 add-info row">
                                    <h5>დამატებით ინფორმაცია</h5>
                                    <div class="mt-2 col-6 form-group">
                                        <label for="exampleInputEmail1">სახელი</label>
                                        <input type="text" required name="visitor_name" class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 col-6 form-group">
                                        <label for="exampleInputEmail1">გვარი</label>
                                        <input type="text" required name="visitor_last_name"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 col-6 form-group">
                                        <label for="exampleInputEmail1">ელ-ფოსტა</label>
                                        <input type="email" required name="visitor_email" class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 col-6 form-group">
                                        <label for="exampleInputEmail1">ტელეფონის ნომერი</label>
                                        <input type="number" required name="visitor_number" class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 col-6 form-group">
                                        <label for="exampleInputEmail1">პირადი ნომერი</label>
                                        <input type="number" required name="visitor_id_number"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 col-6 form-group">
                                        <label for="exampleInputEmail1">გადახდის მეთოდი</label>
                                        <select class="mt-2 form-select" name="pay_method"
                                            aria-label="Default select example">
                                            <option value="1">ინვოისი</option>
                                            <option value="2">ქეში</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">დაჯავშნა</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwipers", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });



        const daysContainer = document.getElementById("daysContainer");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const monthYear = document.getElementById("monthYear");
        const dateInput = document.getElementById("dateInput");
        const calendar = document.getElementById("calendar");

        let currentDate = new Date();
        let selectedDate = null;

        function handleDayClick(day) {
            selectedDate = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth(),
                day
            );
            dateInput.value = selectedDate.toLocaleDateString("en-US");
            calendar.style.display = "none";
            renderCalendar();
        }

        function createDayElement(day) {
            const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
            const dayElement = document.createElement("div");
            dayElement.classList.add("day");

            if (date.toDateString() === new Date().toDateString()) {
                dayElement.classList.add("current");
            }
            if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
                dayElement.classList.add("selected");
            }

            dayElement.textContent = day;
            dayElement.addEventListener("click", () => {
                handleDayClick(day);
            });
            daysContainer.appendChild(dayElement);
        }

        function renderCalendar() {
            daysContainer.innerHTML = "";
            const firstDay = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth(),
                1
            );
            const lastDay = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth() + 1,
                0
            );

            monthYear.textContent = `${currentDate.toLocaleString("default", {
        month: "long"
        })} ${currentDate.getFullYear()}`;

                    for (let day = 1; day <= lastDay.getDate(); day++) {
                        createDayElement(day);
                    }
                }

                prevBtn.addEventListener("click", () => {
                    currentDate.setMonth(currentDate.getMonth() - 1);
                    renderCalendar();
                });

                nextBtn.addEventListener("click", () => {
                    currentDate.setMonth(currentDate.getMonth() + 1);
                    renderCalendar();
                });

                dateInput.addEventListener("click", () => {
                    calendar.style.display = "block";
                    positionCalendar();
                });

                document.addEventListener("click", (event) => {
                    if (!dateInput.contains(event.target) && !calendar.contains(event.target)) {
                        calendar.style.display = "none";
                    }
                });

                function positionCalendar() {
                    const inputRect = dateInput.getBoundingClientRect();
                    calendar.style.top = 'auto';
                    calendar.style.left = 'auto';
                }

                window.addEventListener("resize", positionCalendar);

                renderCalendar();
    </script>
@stop
