@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი</span> სასტუმროები</h4>
            <div class="row">
                <div class="col-md-4">
                    <h5 class="my-4">სასტუმრო #1</h5>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 hotel-main-img" src="https://www.ambassadori.com/uploads/gallery/1040/5b34ded1a33c0.jpg" alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>კაჭრეთი ამბასადორი</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
