@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი</span> სერვისები</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#add_service">სერვისის დამატება</button>
            <div class="row">
                @foreach ($services as $service)
                <div class="pb-3 mt-4 col-md-4 card service-card">
                    <a href="{{route('company.service.item.show', $service->id)}}">
                        <div class="d-flex verification">
                            <h5 class="my-4">სერვისი {{$service->name_ge}}</h5>
                            @if($service->permission == 1)
                                <div class="btn btn-primary" >ვერიფიცირებული</div>
                            @else
                                <div class="btn btn-danger" >არავერიფიცირებული</div>
                            @endif
                        </div>
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    @if($image = $image->where('service_id', $service->id)->first())
                                        <img src="{{$image->image}}" alt="service Image">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- create service --}}

    <div class="modal fade" id="add_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <form action="{{route('company.service.item.store')}}" enctype='multipart/form-data' method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">სერვისის დამატება</h5>
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
                                <label for="price" class="form-label">ფასი</label>
                                <input class="form-control" type="number" id="price" name="price" value=""/>
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
                                <label for="image" class="form-label">სურათების დამატება</label>
                                <input class="form-control" type="file" multiple id="image" name="image[]"
                                    value="" />
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
