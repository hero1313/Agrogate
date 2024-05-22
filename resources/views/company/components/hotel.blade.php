@extends('company.index')
@section('content')
    <div class="layout-page">

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">სასტუმრო /</span> კაჭრეთი</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                                <li class="nav-item">
                                    <a class="nav-link active" href="javascript:void(0);">
                                        ვერიფიცირებული</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-user me-1"></i>კაჭრეთი</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-account-settings-connections.html"><i
                                            class="bx bx-link-alt me-1"></i> თელავი ცინცაძის 12</a>
                                </li>
                            </ul>
                            <div class="mb-4 card">
                                <h5 class="card-header">სასტუმროს დეტალები</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="gap-4  align-items-start align-items-sm-center">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-3 col-md-1 d-flex mb-4">
                                                    <label for="img_1"><img src="https://static.leonardo-hotels.com/image/leonardohotelbucharestcitycenter_room_comfortdouble2_2022_4000x2600_7e18f254bc75491965d36cc312e8111f_1200x780_mobile_3.jpeg" alt="user-avatar" class="rounded d-block"
                                                        height="100" width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" type="checkbox" value="" id="img_1">
                                                </div>
                                                <div class="col-3 col-md-1 d-flex mb-4">
                                                    <label for="img_1"><img src="https://static.leonardo-hotels.com/image/leonardohotelbucharestcitycenter_room_comfortdouble2_2022_4000x2600_7e18f254bc75491965d36cc312e8111f_1200x780_mobile_3.jpeg" alt="user-avatar" class="rounded d-block"
                                                        height="100" width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" type="checkbox" value="" id="img_1">
                                                </div>
                                                <div class="col-3 col-md-1 d-flex mb-4">
                                                    <label for="img_1"><img src="https://static.leonardo-hotels.com/image/leonardohotelbucharestcitycenter_room_comfortdouble2_2022_4000x2600_7e18f254bc75491965d36cc312e8111f_1200x780_mobile_3.jpeg" alt="user-avatar" class="rounded d-block"
                                                        height="100" width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" type="checkbox" value="" id="img_1">
                                                </div>
                                                <div class="col-3 col-md-1 d-flex mb-4">
                                                    <label for="img_1"><img src="https://static.leonardo-hotels.com/image/leonardohotelbucharestcitycenter_room_comfortdouble2_2022_4000x2600_7e18f254bc75491965d36cc312e8111f_1200x780_mobile_3.jpeg" alt="user-avatar" class="rounded d-block"
                                                        height="100" width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" type="checkbox" value="" id="img_1">
                                                </div>
                                                <div class="col-3 col-md-1 d-flex mb-4">
                                                    <label for="img_1"><img src="https://static.leonardo-hotels.com/image/leonardohotelbucharestcitycenter_room_comfortdouble2_2022_4000x2600_7e18f254bc75491965d36cc312e8111f_1200x780_mobile_3.jpeg" alt="user-avatar" class="rounded d-block"
                                                        height="100" width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" type="checkbox" value="" id="img_1">
                                                </div>
                                                <div class="col-3 col-md-1 d-flex mb-4">
                                                    <label for="img_1"><img src="https://static.leonardo-hotels.com/image/leonardohotelbucharestcitycenter_room_comfortdouble2_2022_4000x2600_7e18f254bc75491965d36cc312e8111f_1200x780_mobile_3.jpeg" alt="user-avatar" class="rounded d-block"
                                                        height="100" width="100" id="uploadedAvatar" /></label>
                                                    <input class="form-check-input img-cackbox" type="checkbox" value="" id="img_1">
                                                </div>

                                            </div>
                                        </form>

                                        <div class="button-wrapper">
                                            <label for="upload" class="mb-4 btn btn-primary" tabindex="0">
                                                <span class="d-none d-sm-block">სურათის დამატება</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden
                                                    accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="mb-4 btn btn-outline-secondary account-image-reset">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">შენახვა</span>
                                            </button>
                                            <button type="button"
                                                class="mb-4 btn btn-danger account-image-reset">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">წაშლა</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <form id="formAccountSettings" method="POST" onsubmit="return false">

                                <hr class="my-0" />
                                <div class="card-body">
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">დასახელება (ქარ)</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">დასახელება (ინგ)</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">მისამართი (ქარ)</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">მისაართი(ინგ)</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">ქალაქი (ქარ)</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">ქალაქი (ინგ)</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">აღწერა (ქარ)</label>
                                                <textarea class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus></textarea>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">აღწერა (ინგ)</label>
                                                <textarea class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus></textarea>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">ჩექინის დრო</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">ჩექაუთის დრო</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">რუკის კოდი</label>
                                                <textarea class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus></textarea>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">SEO აღწერა</label>
                                                <textarea class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus></textarea>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">SEO დასახელება</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="" autofocus />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="firstName" class="form-label">კვება</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="">კვების ტიპი</option>
                                                    <option value="0">არ აქვს კვება</option>
                                                    <option value="1">ერთჯერადი</option>
                                                    <option value="2">ორჯერადი</option>
                                                    <option value="3">სამჯერადი</option>
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">შენახვა</button>
                                        </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="row hotel-det">
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">24 საათიანი დაცვა</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">კონდინციონერი</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">ინტერნეტი</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">სამზარეულო</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">აუზი</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">საუნა</label>
                                        </div>
                                        <div class="mb-3 col-6 col-md-3 d-flex">
                                            <input class="form-check-input detail-prp" type="checkbox" value="" id="flexCheckDefault">
                                            <label for="firstName" class="form-label ml-3">ვერანდა</label>
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
                    <div class="d-flex mb-4">
                      <h4 class="py-3"><span class="text-muted fw-light">სასტუმრო /</span> სერვისები</h4>
                      <button type="submit" class="btn btn-primary ml-auto add-item">დამატება</button>
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
                                        <th>ღირებულება 1 ადამიანზე</th>
                                        <th>მოქმედება</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <span class="fw-medium">31</span>
                                        </td>
                                        <td class="d-flex">
                                            <span class="ml-3">ცხენზე ჯირითი</span>
                                        </td>
                                        <td>25 ₾</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> სტატუსის ცვლილება</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> წაშლა</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="d-flex mb-4">
                        <h4 class="py-3"><span class="text-muted fw-light">სასტუმრო /</span> ოთახები</h4>
                        <button type="submit" class="btn btn-primary ml-auto add-item">დამატება</button>
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
                                        <th>კვადრატულობა</th>
                                        <th>მოქმედება</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td class="d-flex">
                                            <span class="ml-3">2</span>
                                        </td>
                                        <td>2</td>
                                        <td>
                                            200 ₾
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            40 კვ
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> სტატუსის ცვლილება</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> წაშლა</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
