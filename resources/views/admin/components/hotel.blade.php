@extends('admin.index')
@section('content')
    <div class="layout-page">

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">სასტუმრო /</span>
                    @if (session('locale') == 'en')
                        {{ $hotel->name_en }}
                    @else
                        {{ $hotel->name_ges }}
                    @endif
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                            <li class="nav-item">
                                @if ($hotel->permission == 0)
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
                                        {{ $hotel->name_en }}
                                    @else
                                        {{ $hotel->name_ge }}
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i>
                                    @if (session('locale') == 'en')
                                        {{ $hotel->address_en }}
                                    @else
                                        {{ $hotel->address_ge }}
                                    @endif
                                </a>
                            </li>
                        </ul>
                        <div class="mb-4 card">
                            <h5 class="card-header">სასტუმროს დეტალები</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="gap-4 align-items-start align-items-sm-center">
                                    <div class="row">
                                        @foreach ($images as $image)
                                            <div class="mb-4 col-3 col-md-1 d-flex">
                                                <label for="img_{{ $image->id }}"><img src="{{ $image->image }}"
                                                        alt="user-avatar" class="rounded d-block" height="100"
                                                        width="100" id="uploadedAvatar" /></label>
                                                <input disabled class="form-check-input img-cackbox"
                                                    value="{{ $image->id }}" type="checkbox" name="image[]"
                                                    id="img_{{ $image->id }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="name_ge" class="form-label">დასახელება (ქარ)</label>
                                        <input disabled class="form-control" type="text" id="name_ge" name="name_ge"
                                            value="{{ $hotel->name_ge }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="name_en" class="form-label">დასახელება (ინგ)</label>
                                        <input disabled class="form-control" type="text" id="name_en" name="name_en"
                                            value="{{ $hotel->name_en }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="address_ge" class="form-label">მისამართი (ქარ)</label>
                                        <input disabled class="form-control" type="text" id="address_ge"
                                            name="address_ge" value="{{ $hotel->address_ge }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="address_en" class="form-label">მისაართი(ინგ)</label>
                                        <input disabled class="form-control" type="text" id="address_en"
                                            name="address_en" value="{{ $hotel->address_en }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="city_ge" class="form-label">ქალაქი (ქარ)</label>
                                        <input disabled class="form-control" type="text" id="city_ge" name="city_ge"
                                            value="{{ $hotel->city_ge }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="city_en" class="form-label">ქალაქი (ინგ)</label>
                                        <input disabled class="form-control" type="text" id="city_en" name="city_en"
                                            value="{{ $hotel->city_en }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="description_ge" class="form-label">აღწერა (ქარ)</label>
                                        <textarea disabled class="form-control" type="text" id="description_ge" name="description_ge">
                                            {{ $hotel->description_ge }}
                                        </textarea>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="description_en" class="form-label">აღწერა (ინგ)</label>
                                        <textarea disabled class="form-control" type="text" id="description_en" name="description_en">{{ $hotel->description_en }}</textarea>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="check_in" class="form-label">ჩექინის დრო</label>
                                        <input disabled class="form-control" type="time" id="check_in"
                                            name="check_in" value="{{ $hotel->check_in }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="check_out" class="form-label">ჩექაუთის დრო</label>
                                        <input disabled class="form-control" type="time" id="check_out"
                                            name="check_out" value="{{ $hotel->check_out }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="google_map" class="form-label">რუკის კოდი</label>
                                        <textarea disabled class="form-control" type="text" id="google_map" name="google_map">{{ $hotel->google_map }}</textarea>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="seo_description" class="form-label">SEO აღწერა</label>
                                        <textarea disabled class="form-control" type="text" id="seo_description" name="seo_description">{{ $hotel->seo_description }}</textarea>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="seo_title" class="form-label">SEO დასახელება</label>
                                        <input disabled class="form-control" type="text" id="seo_title"
                                            name="seo_title" value="{{ $hotel->seo_title }}" />
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="food" class="form-label">კვება</label>
                                        <select disabled class="form-select" name="food"
                                            aria-label="Default select example">
                                            <option value="{{ $hotel->food }}">
                                                @if ($hotel->food == 1)
                                                    ერთჯერადი
                                                @elseif ($hotel->food == 2)
                                                    ორჯერადი
                                                @elseif ($hotel->food == 3)
                                                    სამჯერადი
                                                @else
                                                    არ აქვს კვება
                                                @endif
                                            </option>
                                            <option value="0">არ აქვს კვება</option>
                                            <option value="1">ერთჯერადი</option>
                                            <option value="2">ორჯერადი</option>
                                            <option value="3">სამჯერადი</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="mt-4 row hotel-det">
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="Protection" value="1" id="Protection"
                                            {{ $hotel->Protection == 1 ? 'checked' : '' }}>
                                        <label for="Protection" class="ml-3 form-label">24 საათიანი დაცვა</label>
                                    </div>
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="conditioner" value="1" id="conditioner"
                                            {{ $hotel->conditioner == 1 ? 'checked' : '' }}>
                                        <label for="conditioner" class="ml-3 form-label">კონდინციონერი</label>
                                    </div>
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="internet" value="1" id="internet"
                                            {{ $hotel->internet == 1 ? 'checked' : '' }}>
                                        <label for="internet" class="ml-3 form-label">ინტერნეტი</label>
                                    </div>
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="kitchen" value="1" id="kitchen"
                                            {{ $hotel->kitchen == 1 ? 'checked' : '' }}>
                                        <label for="kitchen" class="ml-3 form-label">სამზარეულო</label>
                                    </div>
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="pool" value="1" id="pool"
                                            {{ $hotel->pool == 1 ? 'checked' : '' }}>
                                        <label for="pool" class="ml-3 form-label">აუზი</label>
                                    </div>
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="sauna" value="1" id="sauna"
                                            {{ $hotel->sauna == 1 ? 'checked' : '' }}>
                                        <label for="sauna" class="ml-3 form-label">საუნა</label>
                                    </div>
                                    <div class="mb-3 col-6 col-md-3 d-flex">
                                        <input disabled class="form-check-input detail-prp" type="checkbox"
                                            name="porch" value="1" id="porch"
                                            {{ $hotel->porch == 1 ? 'checked' : '' }}>
                                        <label for="porch" class="ml-3 form-label">ვერანდა</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="mb-4 d-flex">
                    <h4 class="py-3"><span class="text-muted fw-light">სასტუმრო /</span> სერვისები</h4>
                </div>



                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">სერვისები</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>დასახელება</th>
                                    <th>ღირებულება</th>
                                    <th>მოქმედება</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <span class="fw-medium">{{ $service->id }}</span>
                                        </td>
                                        <td class="d-flex">
                                            <span class="ml-3">
                                                @if (session('locale') == 'en')
                                                    {{ $service->name_en }}
                                                @else
                                                    {{ $service->name_ge }}
                                                @endif
                                            </span>
                                        </td>
                                        <td>{{ $service->price }} ₾</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item " data-toggle="modal"
                                                        data-target="#edit_service_{{ $service->id }}">
                                                        <i class="bx bx-edit-alt me-1"></i> რედაქტირება
                                                    </button>
                                                    <button class="dropdown-item " data-toggle="modal"
                                                        data-target="#delete_service_{{ $service->id }}">
                                                        <i class="bx bx-trash me-1"></i> წაშლა
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="mb-4 d-flex">
                    <h4 class="py-3"><span class="text-muted fw-light">სასტუმრო /</span> ოთახები</h4>
                </div>

                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">ოთახები</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ადგილების რაოდენობა</th>
                                    <th>საბავშვო ადგილები</th>
                                    <th>ღირებულება</th>
                                    <th>ნომრების რაოდენობა</th>
                                    <th>მოქმედება</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td class="d-flex">
                                            <span class="ml-3">{{ $room->seats }}</span>
                                        </td>
                                        <td>{{ $room->child_seats }}</td>
                                        <td>
                                            {{ $room->price }} ₾
                                        </td>
                                        <td>
                                            {{ $room->quantity }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item " data-toggle="modal"
                                                        data-target="#edit_room_{{ $room->id }}">
                                                        <i class="bx bx-edit-alt me-1"></i> რედაქტირება
                                                    </button>
                                                    <button class="dropdown-item " data-toggle="modal"
                                                        data-target="#delete_room_{{ $room->id }}">
                                                        <i class="bx bx-trash me-1"></i> წაშლა
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
@stop
