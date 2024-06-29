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
                                    <h6>{{ __('public._filters') }}</h6>
                                    <a class="ms-auto" data-bs-toggle="collapse" href="#filter-property" role="button"
                                        aria-expanded="false" aria-controls="filter-property"> <i
                                            class="bx bx-chevron-down"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            @foreach ($services as $service)
                                <div class="col-sm-3">
                                    <a href="{{ route('website.service.item.show', $service->id) }}"></a>
                                    <div class="property-item" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="property-image bg-overlay-gradient-04">
                                            @if ($image = $image->where('service_item_id', $service->id)->first())
                                                <img class="img-fluid hotel-img" src="{{ $image->image }}" alt="">
                                            @endif
                                        </div>
                                        <div class="property-details">
                                            <div class="property-details-inner">
                                                <h5 class="property-title">
                                                    <a href="properties-details.html">
                                                        @if (session('locale') == 'en')
                                                            {{ $service->name_en }}
                                                        @else
                                                            {{ $service->name_ge }}
                                                        @endif
                                                    </a>
                                                </h5>
                                                <span class="property-address">
                                                    <i class="bx bx-location-plus"></i>
                                                    @if (session('locale') == 'en')
                                                        {{ $service->address_en }}
                                                    @else
                                                        {{ $service->address_ge }}
                                                    @endif
                                                </span>
                                                <div class="property-price price d-flex">
                                                    <span class="api-price">{{ $service->price }}</span>
                                                    <span class="price-logo api-currency">₾</span>
                                                </div>
                                            </div>
                                            <div class="property-btn">
                                                <a class="property-link"
                                                    href="{{ route('website.service.item.show', $service->id) }}">{{ __('public._details') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination">
                            {{ $services->links() }}
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
