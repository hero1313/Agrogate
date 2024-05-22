@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი</span> სასტუმროები</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#add_hotel">სასტუმროს დამატება</button>
            <div class="row">
                @foreach ($hotels as $hotel)
                <div class="col-md-4">
                    <h5 class="my-4">სასტუმრო #{{$hotel->id}}</h5>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 hotel-main-img"
                                    src="{{$image->where('hotel_id', $hotel->id)->first()->image}}"
                                    alt="First slide" />
                                <button>წაშლა</button>
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>{{$hotel->name_ge}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- create hotel --}}

    <div class="modal fade" id="add_hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <form action="{{route('company.hotel.store')}}" enctype='multipart/form-data' method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">სასტუმროს დამატება</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-12 col-md-6">
                                <label for="name_ge" class="form-label">დასახელება (ქარ)</label>
                                <input class="form-control" type="text" id="name_ge" name="name_ge" value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="name_en" class="form-label">დასახელება (ინგ)</label>
                                <input class="form-control" type="text" id="name_en" name="name_en" value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="address_ge" class="form-label">მისამართი (ქარ)</label>
                                <input class="form-control" type="text" id="address_ge" name="address_ge"
                                    value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="address_en" class="form-label">მისაართი(ინგ)</label>
                                <input class="form-control" type="text" id="address_en" name="address_en"
                                    value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="city_ge" class="form-label">ქალაქი (ქარ)</label>
                                <input class="form-control" type="text" id="city_ge" name="city_ge" value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="city_en" class="form-label">ქალაქი (ინგ)</label>
                                <input class="form-control" type="text" id="city_en" name="city_en" value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="description_ge" class="form-label">აღწერა (ქარ)</label>
                                <textarea class="form-control" type="text" id="description_ge" name="description_ge" value=""></textarea>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="description_en" class="form-label">აღწერა (ინგ)</label>
                                <textarea class="form-control" type="text" id="description_en" name="description_en" value=""></textarea>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="check_in" class="form-label">ჩექინის დრო</label>
                                <input class="form-control" type="time" id="check_in" name="check_in"
                                    value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="check_out" class="form-label">ჩექაუთის დრო</label>
                                <input class="form-control" type="time" id="check_out" name="check_out"
                                    value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="google_map" class="form-label">რუკის კოდი</label>
                                <textarea class="form-control" type="text" id="google_map" name="google_map" value=""></textarea>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="seo_description" class="form-label">SEO აღწერა</label>
                                <textarea class="form-control" type="text" id="seo_description" name="seo_description" value=""></textarea>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="seo_title" class="form-label">SEO დასახელება</label>
                                <input class="form-control" type="text" id="seo_title" name="seo_title"
                                    value="" />
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="food" class="form-label">კვება</label>
                                <select class="form-select" name="food" aria-label="Default select example">
                                    <option value="">კვების ტიპი</option>
                                    <option value="0">არ აქვს კვება</option>
                                    <option value="1">ერთჯერადი</option>
                                    <option value="2">ორჯერადი</option>
                                    <option value="3">სამჯერადი</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="image" class="form-label">სურათების დამატება</label>
                                <input class="form-control" type="file" multiple id="image" name="image[]"
                                    value="" />
                            </div>
                        </div>
                        <div class="row hotel-det mt-4">
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="Protection" value=""
                                    id="Protection">
                                <label for="Protection" class="form-label ml-3">24 საათიანი დაცვა</label>
                            </div>
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="conditioner" value=""
                                    id="conditioner">
                                <label for="conditioner" class="form-label ml-3">კონდინციონერი</label>
                            </div>
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="internet" value=""
                                    id="internet">
                                <label for="internet" class="form-label ml-3">ინტერნეტი</label>
                            </div>
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="kitchen" value=""
                                    id="kitchen">
                                <label for="kitchen" class="form-label ml-3">სამზარეულო</label>
                            </div>
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="pool" value=""
                                    id="pool">
                                <label for="pool" class="form-label ml-3">აუზი</label>
                            </div>
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="sauna" value=""
                                    id="sauna">
                                <label for="sauna" class="form-label ml-3">საუნა</label>
                            </div>
                            <div class="mb-3 col-6 col-md-3 d-flex">
                                <input class="form-check-input detail-prp" type="checkbox" name="porch" value=""
                                    id="porch">
                                <label for="porch" class="form-label ml-3">ვერანდა</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                        <button type="submit" class="btn btn-primary">დამატება</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
