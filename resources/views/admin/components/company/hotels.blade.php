@extends('admin.index')
@section('content')
    <div class="layout-page">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span> სასტუმროები</h4>
            <div class="row">
                <div class="col-md-4">
                    <h5 class="my-4">სასტუმრო #1</h5>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/admin/assets/img/elements/13.jpg" alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>First slide</h3>
                                    <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/admin/assets/img/elements/2.jpg" alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Second slide</h3>
                                    <p>In numquam omittam sea.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
