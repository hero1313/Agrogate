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
                                <h3 class="title">
                                    @if (session('locale') == 'en')
                                        {{ $hotel->name_en }}
                                    @else
                                        {{ $hotel->name_ge }}
                                    @endif
                                </h3>
                                <span class="mb-3 d-block">
                                    <i class="bx bx-location-plus pe-2"></i>
                                    @if (session('locale') == 'en')
                                        {{ $hotel->address_en }}
                                    @else
                                        {{ $hotel->address_ge }}
                                    @endif
                                </span>
                                <div class="d-flex">
                                    <span class="price d-block">{{ $hotel->price }}</span>
                                    <span class="api-currency">₾</span>
                                </div>
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
                                <div class="mb-4 contact-info d-flex align-items-center">
                                    <button class="btn btn-booking" data-toggle="modal"
                                        data-target="#booking">{{ __('public._reservation') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-1">
                        <div data-aos="fade-up" data-aos-duration="1200" class="overflow-hidden property-detail-gallery">
                            @if ($hotel->google_map)
                                <ul class="mb-4 nav nav-tabs nav-tabs-02" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="shadow nav-link active" id="photo-tab" data-bs-toggle="pill"
                                            href="#photo" role="tab" aria-controls="photo"
                                            aria-selected="true">{{ __('public.images') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="shadow nav-link" id="map-tab" data-bs-toggle="pill" href="#map"
                                            role="tab" aria-controls="map"
                                            aria-selected="false">{{ __('public._map') }}</a>
                                    </li>
                                </ul>
                            @endif
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active hotel-images" id="photo" role="tabpanel"
                                    aria-labelledby="photo-tab">
                                    <div class="swiper mySwipers">
                                        <div class="swiper-wrapper">
                                            @php
                                                $imagess = $images->filter(function ($image) use ($hotel) {
                                                    return $image->hotel_id == $hotel->id;
                                                });
                                            @endphp

                                            @if ($imagess->isNotEmpty())
                                                @foreach ($imagess as $image)
                                                    <div class="swiper-slide"><img class="hotel-image" src="{{ $image->image }}" alt=""></div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                @if ($hotel->google_map)
                                    <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                                        {!! $hotel->google_map !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1400" class="mt-5 property-info">
                            <div class="row">
                                <div class="mb-3 col-sm-3 mb-sm-0">
                                    <h5>{{ __('public._details') }}</h5>
                                </div>
                                <div class="col-sm-9">
                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <ul class="property-list list-unstyled">
                                                <li><b>{{ __('public._city') }}:</b>
                                                    @if (session('locale') == 'en')
                                                        {{ $hotel->city_en }}
                                                    @else
                                                        {{ $hotel->city_ge }}
                                                    @endif
                                                </li>
                                                <li><b>{{ __('public._address') }}:</b>
                                                    @if (session('locale') == 'en')
                                                        {{ $hotel->address_en }}
                                                    @else
                                                        {{ $hotel->address_ge }}
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="property-list list-unstyled">
                                                <li><b>{{ __('public._food') }}:</b>
                                                    @if ($hotel->food == 1)
                                                        {{ __('public._food_1') }}
                                                    @elseif($hotel->food == 2)
                                                        {{ __('public._food_2') }}
                                                    @elseif($hotel->food == 3)
                                                        {{ __('public._food_3') }}
                                                    @else
                                                        {{ __('public._food_0') }}
                                                    @endif
                                                </li>
                                                <li><b>{{ __('public._price') }}:</b> <span
                                                        class="api-price">{{ $hotel->price }}</span> <span
                                                        class="api-currency">₾</span></li>
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
                                    <h5>{{ __('public._description') }}</h5>
                                </div>
                                <div class="col-sm-9">
                                    <p>
                                        @if (session('locale') == 'en')
                                            {{ $hotel->description_en }}
                                        @else
                                            {{ $hotel->description_ge }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                        <div data-aos="fade-up" data-aos-duration="2000" class="property-features">
                            <div class="row">
                                <div class="mb-3 col-sm-3 mb-sm-0">
                                    <h5>{{ __('public._additional') }}</h5>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        @if ($hotel->condintioner)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._condintioner') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($hotel->internet)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._internet') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($hotel->kitchen)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._kitchen') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($hotel->pool)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._pool') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($hotel->sauna)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._sauna') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($hotel->porch)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._porch') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($hotel->Protection)
                                            <div class="col-sm-6">
                                                <ul class="mb-0 property-list-style-2 list-unstyled">
                                                    <li>{{ __('public._Protection') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
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
            <form action="{{ route('booking.store', $hotel->id) }}" method="post">
                @csrf
                <div class="modal-content row">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('public._reservation') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="d-flex">
                        <div class="col-sm-6">
                            <div class="modal-body booking-body-1">
                                <div class="d-flex">
                                    @if ($image = $images->where('hotel_id', $hotel->id)->first())
                                        <img src="{{ $image->image }}" alt="">
                                    @endif
                                    <div class="booking-text">
                                        <h5>
                                            @if (session('locale') == 'en')
                                                {{ $hotel->name_en }}
                                            @else
                                                {{ $hotel->name_ge }}
                                            @endif
                                        </h5>
                                        <div class="mt-2 date-picker booking-date-picker">
                                            <span>{{ __('public._chose_date') }} <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="#fff"
                                                    class="ml-3 bi bi-calendar-week" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                </svg></span>
                                            <input type="text" id="daterange" value="" name="date" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 add-info row">
                                    <h5>{{ __('public._additional_information') }}</h5>
                                    <div class="mt-2 form-group">
                                        <label for="exampleInputEmail1">{{ __('public._name') }}</label>
                                        <input type="text" maxlength="200" required name="visitor_name"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 form-group">
                                        <label for="exampleInputEmail1">{{ __('public._lastname') }}</label>
                                        <input type="text" maxlength="200" required name="visitor_last_name"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 form-group">
                                        <label for="exampleInputEmail1">{{ __('public._email') }}</label>
                                        <input type="email" maxlength="200" required name="visitor_email"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 form-group">
                                        <label for="exampleInputEmail1">{{ __('public._phone_number') }}</label>
                                        <input type="number" maxlength="200" required name="visitor_number"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 form-group">
                                        <label for="exampleInputEmail1">{{ __('public._id_number') }}</label>
                                        <input type="number" maxlength="200" required name="visitor_id_number"
                                            class="mt-2 form-control">
                                    </div>
                                    <div class="mt-2 form-group">
                                        <label for="exampleInputEmail1">{{ __('public._pay_method') }}</label>
                                        <select class="mt-2 form-select" name="pay_method"
                                            aria-label="Default select example">
                                            <option value="1">{{ __('public._invoice') }}</option>
                                            <option value="2">{{ __('public._cash') }}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="modal-body booking-body-3 row">
                                <h5>{{ __('public._services') }}</h5>
                                @foreach ($services as $service)
                                    <div class="mt-3 col-12">
                                        <div class="service-card">
                                            <label for="service_{{ $service->id }}">
                                                <span>
                                                    @if (session('locale') == 'en')
                                                        {{ $service->name_en }}
                                                    @else
                                                        {{ $service->name_ge }}
                                                    @endif
                                                </span>
                                                <div class="d-flex">
                                                    <span class="ml-3 price v-price api-price">
                                                        {{ $service->price }}
                                                    </span>
                                                    <span class="api-currency">₾</span>
                                                </div>
                                            </label>
                                            <input type="checkbox" name="services[{{ $service->id }}][service_id]"
                                                value="{{ $service->id }}" id="service_{{ $service->id }}">
                                            <input type="number" name="services[{{ $service->id }}][quantity]"
                                                min="1" value="1" class="service-quantity">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="modal-body booking-body-2 row">
                            <div id="availableRooms" class="row"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="checkRoom" class="btn btn-primary">{{ __('public._next') }}</button>
                        <button type="submit" id="reserve" class="btn btn-primary">{{ __('public._close') }}</button>
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
    </script>

    <script>
        $(document).ready(function() {
            $('#checkRoom').on('click', function() {
                $('#checkRoom').toggle();
                $('#reserve').toggle();
                var hotel_id = $('#hotel_id').val();
                var date = $('#daterange').val();

                $.ajax({
                    url: "{{ route('check-availability') }}",
                    method: 'GET',
                    data: {
                        hotel_id: {{ $hotel->id }},
                        date: date,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#availableRooms').empty(); // Clear previous results
                        var availableRooms = response.availableRooms;

                        // Loop through each available room
                        availableRooms.forEach(function(room) {
                            var cardHtml = '<div class="col-4">';
                            cardHtml += '<div class="card">';
                            cardHtml += '<div class="card-body">';
                            cardHtml += '<h5 class="card-title">ოთახი #' + room.id +
                                '</h5>';
                            cardHtml +=
                                '<p class="card-text">ფასი: <span class="ajax-api-price"> ' +
                                room.price +
                                '</span><span class="ajax-api-curency">₾</span></p>';
                            cardHtml += '<p class="card-text">ზრდასრული: ' + room
                                .seats + '</p>';
                            cardHtml += '<p class="card-text">ბავშვი: ' + room
                                .child_seats + '</p>';
                            cardHtml +=
                                '<input type="radio" required name="room_id" value="' +
                                room.id + '"> აირჩევა';
                            cardHtml += '</div></div></div>';

                            $('#availableRooms').append(cardHtml);
                        });
                    },
                    error: function(response) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "დაჯავშნა წარმატებით განხორციელდა",
                text: "დაელოდეთ ადმინისტრატორის დასტურს ელ-ფოსტაზე",
                icon: "success"
            });
        </script>
    @endif


@stop
