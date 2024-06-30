@extends('company.index')
@section('content')
    <div class="layout-page">

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">სერვისი /</span>
                    @if (session('locale') == 'en')
                        {{ $service->name_en }}
                    @else
                        {{ $service->name_ge }}
                    @endif
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                            <li class="nav-item">
                                @if ($service->permission == 0)
                                    <a class="nav-link active" href="javascript:void(0);">
                                        არავერიფიცირებული</a>
                                @else
                                    <a class="nav-link active" href="javascript:void(0);">
                                        ვერიფიცირებული</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bx bx-user me-1"></i>
                                    @if (session('locale') == 'en')
                                        {{ $service->name_en }}
                                    @else
                                        {{ $service->name_ge }}
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i>
                                    {{ $service->address_ge }}</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('company.service.item.destroy', $service->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">სერვისის წაშლა</button>
                                </form>
                            </li>
                        </ul>
                        <div class="mb-4 card">
                            <h5 class="card-header">სერვისის დეტალები</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="gap-4 align-items-start align-items-sm-center">
                                    <form action="{{ route('company.service.image.destroy') }}" method="post"
                                        id="remove_image_form">
                                        @csrf
                                        @method('delete')
                                        <div class="row">
                                            @foreach ($images as $image)
                                                <div class="mb-4 col-3 col-md-1 d-flex">
                                                    <label for="img_{{ $image->id }}"><img src="{{ $image->image }}"
                                                            alt="user-avatar" class="rounded d-block" height="100"
                                                            width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" value="{{ $image->id }}"
                                                        type="checkbox" name="image[]" id="img_{{ $image->id }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </form>
                                    <div class="button-wrapper">
                                        <form id="new-img"
                                            action="{{ route('company.service.image.store', $service->id) }}"
                                            enctype='multipart/form-data' method="post">
                                            @csrf
                                            <label for="image" class="mb-4 btn btn-primary" tabindex="0">
                                                <span class="d-none d-sm-block">სურათის დამატება</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" name="image[]" id="image" multiple
                                                    class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button" id="remove_image_button"
                                                class="mb-4 btn btn-danger account-image-reset">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">წაშლა</span>
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('company.service.item.update', $service->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="name_ge" class="form-label">დასახელება (ქარ)</label>
                                            <input class="form-control" type="text" id="name_ge" name="name_ge"
                                                value="{{ $service->name_ge }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="name_en" class="form-label">დასახელება (ინგ)</label>
                                            <input class="form-control" type="text" id="name_en" name="name_en"
                                                value="{{ $service->name_en }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="address_ge" class="form-label">მისამართი (ქარ)</label>
                                            <input class="form-control" type="text" id="address_ge" name="address_ge"
                                                value="{{ $service->address_ge }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="address_en" class="form-label">მისაართი(ინგ)</label>
                                            <input class="form-control" type="text" id="address_en" name="address_en"
                                                value="{{ $service->address_en }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="city_ge" class="form-label">ქალაქი (ქარ)</label>
                                            <input class="form-control" type="text" id="city_ge" name="city_ge"
                                                value="{{ $service->city_ge }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="city_en" class="form-label">ქალაქი (ინგ)</label>
                                            <input class="form-control" type="text" id="city_en" name="city_en"
                                                value="{{ $service->city_en }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="description_ge" class="form-label">აღწერა (ქარ)</label>
                                            <textarea class="form-control" type="text" id="description_ge" name="description_ge">{{ $service->description_ge }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="description_en" class="form-label">აღწერა (ინგ)</label>
                                            <textarea class="form-control" type="text" id="description_en" name="description_en">{{ $service->description_en }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="price" class="form-label">ფასი</label>
                                            <input class="form-control" type="number" id="price" name="price"
                                                value="{{ $service->price }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="google_map" class="form-label">რუკის კოდი</label>
                                            <textarea class="form-control" type="text" id="google_map" name="google_map">{{ $service->google_map }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="seo_description" class="form-label">SEO აღწერა</label>
                                            <textarea class="form-control" type="text" id="seo_description" name="seo_description">{{ $service->seo_description }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="seo_title" class="form-label">SEO დასახელება</label>
                                            <input class="form-control" type="text" id="seo_title" name="seo_title"
                                                value="{{ $service->seo_title }}" />
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">დამახსოვრება</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#remove_image_button").click(function() {
                $("#remove_image_form").submit();
            });
        });
    </script>

    <script>
        $('#image').on('change', function(event) {
            const imageList = $('#image_list');
            imageList.find('.new-image').empty(); // Clear previous new images

            const files = event.target.files;

            $.each(files, function(index, file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = $('<img>').attr({
                        src: e.target.result,
                        alt: 'user-avatar',
                        class: 'rounded d-block',
                        height: 100,
                        width: 100
                    });

                    const div = $('<div>').addClass('mb-4').append(img);

                    imageList.find('.new-image').eq(index).append(div);
                }
                reader.readAsDataURL(file);
                $('#new-img').submit();
            });
        });
    </script>
@stop
