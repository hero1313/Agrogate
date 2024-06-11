@extends('company.index')
@section('content')
    <div class="layout-page">

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">სასტუმრო /</span> {{ $hotel->name_ge }}</h4>

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
                                <a class="nav-link" href="#"><i class="bx bx-user me-1"></i>{{ $hotel->name_ge }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i>
                                    {{ $hotel->address_ge }}</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('company.hotel.destroy', $hotel->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">სასტუმროს წაშლა</button>
                                </form>
                            </li>
                        </ul>
                        <div class="mb-4 card">
                            <h5 class="card-header">სასტუმროს დეტალები</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="gap-4 align-items-start align-items-sm-center">
                                    <form action="{{ route('company.image.destroy') }}" method="post"
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
                                        <form action="{{ route('company.image.store', $hotel->id) }}"
                                            enctype='multipart/form-data' method="post">
                                            @csrf
                                            <label for="image" class="mb-4 btn btn-primary" tabindex="0">
                                                <span class="d-none d-sm-block">სურათის დამატება</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" name="image[]" id="image" multiple
                                                    class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="submit"
                                                class="mb-4 btn btn-outline-secondary account-image-reset">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">შენახვა</span>
                                            </button>
                                        </form>
                                        <button type="button" id="remove_image_button"
                                            class="mb-4 btn btn-danger account-image-reset">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">წაშლა</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('company.hotel.update', $hotel->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="name_ge" class="form-label">დასახელება (ქარ)</label>
                                            <input class="form-control" type="text" id="name_ge" name="name_ge"
                                                value="{{ $hotel->name_ge }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="name_en" class="form-label">დასახელება (ინგ)</label>
                                            <input class="form-control" type="text" id="name_en" name="name_en"
                                                value="{{ $hotel->name_en }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="address_ge" class="form-label">მისამართი (ქარ)</label>
                                            <input class="form-control" type="text" id="address_ge" name="address_ge"
                                                value="{{ $hotel->address_ge }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="address_en" class="form-label">მისაართი(ინგ)</label>
                                            <input class="form-control" type="text" id="address_en" name="address_en"
                                                value="{{ $hotel->address_en }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="city_ge" class="form-label">ქალაქი (ქარ)</label>
                                            <input class="form-control" type="text" id="city_ge" name="city_ge"
                                                value="{{ $hotel->city_ge }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="city_en" class="form-label">ქალაქი (ინგ)</label>
                                            <input class="form-control" type="text" id="city_en" name="city_en"
                                                value="{{ $hotel->city_en }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="description_ge" class="form-label">აღწერა (ქარ)</label>
                                            <textarea class="form-control" type="text" id="description_ge" name="description_ge">{{ $hotel->description_ge }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="description_en" class="form-label">აღწერა (ინგ)</label>
                                            <textarea class="form-control" type="text" id="description_en" name="description_en">{{ $hotel->description_en }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="price" class="form-label">ოთახის მინიმალური ფასი</label>
                                            <input class="form-control" type="number" id="price" name="price" value="{{ $hotel->price }}"/>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="check_in" class="form-label">ჩექინის დრო</label>
                                            <input class="form-control" type="time" id="check_in" name="check_in"
                                                value="{{ $hotel->check_in }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="check_out" class="form-label">ჩექაუთის დრო</label>
                                            <input class="form-control" type="time" id="check_out" name="check_out"
                                                value="{{ $hotel->check_out }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="google_map" class="form-label">რუკის კოდი</label>
                                            <textarea class="form-control" type="text" id="google_map" name="google_map">{{ $hotel->google_map }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="seo_description" class="form-label">SEO აღწერა</label>
                                            <textarea class="form-control" type="text" id="seo_description" name="seo_description">{{ $hotel->seo_description }}</textarea>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="seo_title" class="form-label">SEO დასახელება</label>
                                            <input class="form-control" type="text" id="seo_title" name="seo_title"
                                                value="{{ $hotel->seo_title }}" />
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="priority" class="form-label">პრიორიტეტი</label>
                                            <select class="form-select" name="priority" aria-label="Default select example">
                                                <option value="{{ $hotel->priority }}">{{ $hotel->priority }}</option>
                                                <option value="0">არ აქვს პრიორიტეტი</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="food" class="form-label">კვება</label>
                                            <select class="form-select" name="food"
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
                                            <input class="form-check-input detail-prp" type="checkbox" name="Protection"
                                                value="1" id="Protection"
                                                {{ $hotel->Protection == 1 ? 'checked' : '' }}>
                                            <label for="Protection" class="ml-3 form-label">24 საათიანი დაცვა</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" name="conditioner"
                                                value="1" id="conditioner"
                                                {{ $hotel->conditioner == 1 ? 'checked' : '' }}>
                                            <label for="conditioner" class="ml-3 form-label">კონდინციონერი</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" name="internet"
                                                value="1" id="internet"
                                                {{ $hotel->internet == 1 ? 'checked' : '' }}>
                                            <label for="internet" class="ml-3 form-label">ინტერნეტი</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" name="kitchen"
                                                value="1" id="kitchen"
                                                {{ $hotel->kitchen == 1 ? 'checked' : '' }}>
                                            <label for="kitchen" class="ml-3 form-label">სამზარეულო</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" name="pool"
                                                value="1" id="pool" {{ $hotel->pool == 1 ? 'checked' : '' }}>
                                            <label for="pool" class="ml-3 form-label">აუზი</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" name="sauna"
                                                value="1" id="sauna" {{ $hotel->sauna == 1 ? 'checked' : '' }}>
                                            <label for="sauna" class="ml-3 form-label">საუნა</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" name="porch"
                                                value="1" id="porch" {{ $hotel->porch == 1 ? 'checked' : '' }}>
                                            <label for="porch" class="ml-3 form-label">ვერანდა</label>
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">შენახვა</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="mb-4 d-flex">
                    <h4 class="py-3"><span class="text-muted fw-light">სასტუმრო /</span> სერვისები</h4>
                    <button type="button" class="ml-auto btn btn-primary add-item" data-toggle="modal"
                        data-target="#add_service">დამატება</button>
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
                                            <span class="ml-3">{{ $service->name_ge }}</span>
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
                    <button type="button" data-toggle="modal" data-target="#add_room"
                        class="ml-auto btn btn-primary add-item">დამატება</button>
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


    <!-- add service Modal -->
    <div class="modal fade" id="add_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('company.service.store', $hotel->id) }}" method="post">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">სერვისების დამატება</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="name_ge" class="form-label">სახელი ქართული</label>
                                <input class="form-control" type="text" id="name_ge" name="name_ge" />
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name_en" class="form-label">სახელი ინგლისური</label>
                                <input class="form-control" type="text" id="name_en" name="name_en" />
                            </div>
                            <div class="mb-3 col-12 col-md-12">
                                <label for="description_ge" class="form-label">აღწერა ქართული</label>
                                <textarea class="form-control" type="text" id="description_ge" name="description_ge"></textarea>
                            </div>
                            <div class="mb-3 col-12 col-md-12">
                                <label for="description_en" class="form-label">აღწერა ინგლისური</label>
                                <textarea class="form-control" type="text" id="description_en" name="description_en"></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="price" class="form-label">ფასი ერთ ადამიანზე</label>
                                <input class="form-control" type="number" id="price" name="price" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                        <button type="submit" class="btn btn-primary">დამახსოვრება</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @foreach ($services as $service)
        <!-- add service Modal -->
        <div class="modal fade" id="edit_service_{{ $service->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('company.service.update', $service->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">სერვისების რედაქტირება</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="name_ge" class="form-label">სახელი ქართული</label>
                                    <input class="form-control" value="{{ $service->name_ge }}" type="text"
                                        id="name_ge" name="name_ge" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_en" class="form-label">სახელი ინგლისური</label>
                                    <input class="form-control" value="{{ $service->name_en }}" type="text"
                                        id="name_en" name="name_en" />
                                </div>
                                <div class="mb-3 col-12 col-md-12">
                                    <label for="description_ge" class="form-label">აღწერა ქართული</label>
                                    <textarea class="form-control" value="{{ $service->description_ge }}" type="text" id="description_ge"
                                        name="description_ge"></textarea>
                                </div>
                                <div class="mb-3 col-12 col-md-12">
                                    <label for="description_en" class="form-label">აღწერა ინგლისური</label>
                                    <textarea class="form-control" value="{{ $service->description_en }}" type="text" id="description_en"
                                        name="description_en"></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="price" class="form-label">ფასი ერთ ადამიანზე</label>
                                    <input class="form-control" value="{{ $service->price }}" type="number"
                                        id="price" name="price" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                            <button type="submit" class="btn btn-primary">რედაქტირება</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- add service Modal -->
        <div class="modal fade" id="delete_service_{{ $service->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('company.service.destroy', $service->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">სერვისების წაშლა</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                            <button type="submit" class="btn btn-primary">წაშლა</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach
    <!-- add room Modal -->
    <div class="modal fade" id="add_room" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('company.room.store', $hotel->id) }}" method="post">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">ოთახის დამატება</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="seats" class="form-label">რამდენ ადამიანზეა გათვლილი</label>
                                <input class="form-control" type="number" value="2" id="seats"
                                    name="seats" />
                            </div>
                            <div class="mb-3 col-12">
                                <label for="child_seats" class="form-label">რამდენ ბავშვზეა გათვლილი</label>
                                <input class="form-control" type="number" id="child_seats" name="child_seats" />
                            </div>
                            <div class="mb-3 col-12">
                                <label for="quantity" class="form-label">ასეთი რამდენი ნომერი გაქვთ?</label>
                                <input class="form-control" type="number" value="1" min="1" id="quantity"
                                    name="quantity" />
                            </div>
                            <div class="mb-3 col-12">
                                <label for="price" class="form-label">ნომრის ღირებულება 1 ღამე</label>
                                <input class="form-control" type="number" id="price" name="price" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                        <button type="submit" class="btn btn-primary">დამახსოვრება</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @foreach ($rooms as $room)
        <!-- add service Modal -->
        <div class="modal fade" id="edit_room_{{ $room->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('company.room.update', $room->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">ოთახის რედაქტირება</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="seats" class="form-label">რამდენ ადამიანზეა გათვლილი</label>
                                    <input class="form-control" type="number" value="2" id="seats"
                                        name="seats" value="{{ $room->seats }}" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="child_seats" class="form-label">რამდენ ბავშვზეა გათვლილი</label>
                                    <input class="form-control" type="number" id="child_seats" name="child_seats"
                                        value="{{ $room->child_seats }}" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="quantity" class="form-label">ასეთი რამდენი ნომერი გაქვთ?</label>
                                    <input class="form-control" type="number" value="1" min="1"
                                        id="quantity" name="quantity" value="{{ $room->quantity }}" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="price" class="form-label">ნომრის ღირებულება</label>
                                    <input class="form-control" type="number" id="price" name="price"
                                        value="{{ $room->price }}" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                            <button type="submit" class="btn btn-primary">რედაქტირება</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- add service Modal -->
        <div class="modal fade" id="delete_room_{{ $room->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('company.room.destroy', $room->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">სერვისების წაშლა</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">გაუქმება</button>
                            <button type="submit" class="btn btn-primary">წაშლა</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach
    <script>
        $(document).ready(function() {
            $("#remove_image_button").click(function() {
                $("#remove_image_form").submit();
            });
        });
    </script>
@stop
