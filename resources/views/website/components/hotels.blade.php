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
                                    <h6>{{ __('public._filter') }}</h6>
                                    <a class="ms-auto" data-bs-toggle="collapse" href="#filter-property" role="button"
                                        aria-expanded="false" aria-controls="filter-property"> <i
                                            class="bx bx-chevron-down"></i> </a>
                                </div>
                                <div class="collapse show" id="filter-property">
                                    <form class="mt-3" action="{{ route('website.hotels') }}">
                                        <div class="mb-2 select-border">
                                            <select name="food" class="form-control basic-select">
                                                <option value="">{{ __('public._food') }}</option>
                                                <option value="1">{{ __('public._food_1') }}</option>
                                                <option value="2">{{ __('public._food_2') }}</option>
                                                <option value="3">{{ __('public._food_3') }}</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 select-border">
                                            <select name="adult" class="form-control basic-select">
                                                <option value="">{{ __('public._adult') }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                        <div class="mb-2 select-border">
                                            <select name="kid" class="form-control basic-select">
                                                <option value="">{{ __('public._kid') }}</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                        <div class="mt-4 mb-4 options">
                                            <div class="options-item">
                                                <label for="conditioner"
                                                    class="btn btn-options">კონდინციონერი{{ __('public._condintioner') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="conditioner"
                                                    name="conditioner" value="1">
                                            </div>
                                            <div class="options-item">
                                                <label for="Protection"
                                                    class="btn btn-options">დაცვა{{ __('public._Protection') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="Protection"
                                                    name="Protection" value="1">
                                            </div>
                                            <div class="options-item">
                                                <label for="porch"
                                                    class="btn btn-options">ვერანდა{{ __('public._porch') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="porch"
                                                    name="porch" value="1">
                                            </div>
                                            <div class="options-item">
                                                <label for="internet"
                                                    class="btn btn-options">ინტერნეტი{{ __('public._internet') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="internet"
                                                    name="internet" value="1">
                                            </div>
                                            <div class="options-item">
                                                <label for="kitchen"
                                                    class="btn btn-options">სამზარეულო{{ __('public._kitchen') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="kitchen"
                                                    name="kitchen" value="1">
                                            </div>
                                            <div class="options-item">
                                                <label for="pool"
                                                    class="btn btn-options">აუზი{{ __('public._pool') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="pool"
                                                    name="pool" value="1">
                                            </div>
                                            <div class="options-item">
                                                <label for="sauna"
                                                    class="btn btn-options">საუნა{{ __('public.ვ') }}</label>
                                                <input type="checkbox" class="options-checkbox" id="sauna"
                                                    name="sauna" value="1">
                                            </div>
                                        </div>

                                        <div class="mb-2 daterange">
                                            <label class="form-label">თარიღი{{ __('public._date') }}</label>
                                            <div class="date-picker">
                                                <input type="text" id="daterange" name="date" />
                                            </div>
                                        </div>
                                        <div class="mb-2 d-grid">
                                            <button class="btn btn-primary align-items-center filter-button"
                                                type="submit"><i
                                                    class="bx bx-filter-alt me-1"></i><span>{{ __('public._filtering') }}</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            @foreach ($hotels as $hotel)
                                <div class="col-sm-3">
                                    <a href="{{ route('website.hotel.show', $hotel->id) }}">
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
                                                        <a href="{{ route('website.hotel.show', $hotel->id) }}">
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
                                                    <div class="property-price price d-flex">
                                                        <span class="api-price">{{ $hotel->price }}</span>
                                                        <span class="price-logo api-currency">₾</span>
                                                    </div>
                                                </div>
                                                <div class="property-btn">
                                                    <a class="property-link"
                                                        href="{{ route('website.hotel.show', $hotel->id) }}">{{ __('public._detil') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination">
                            {{ $hotels->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->

        {{-- datepicker --}}
        <script>
            $(document).ready(function() {
                $('.btn-options').on('click', function() {
                    $(this).toggleClass('active-option');
                });
            });
        </script>

    </div>
@stop
