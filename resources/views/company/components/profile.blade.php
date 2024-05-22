@extends('company.index')
@section('content')
    <div class="layout-page">

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი /</span> პროფილი</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                                <li class="nav-item">
                                    <a class="nav-link active" href="javascript:void(0);">
                                        ვერიფიცირებული</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-user me-1"></i> აჭარა ჯგუფი</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-account-settings-connections.html"><i
                                            class="bx bx-link-alt me-1"></i> 599 14 52 31</a>
                                </li>
                            </ul>
                            <div class="mb-4 card">
                                <h5 class="card-header">Profile Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="gap-4 d-flex align-items-start align-items-sm-center">
                                        <img src="/admin/assets/img/avatars/1.png" alt="user-avatar" class="rounded d-block"
                                            height="100" width="100" id="uploadedAvatar" />
                                        <div class="button-wrapper">
                                            <label for="upload" class="mb-4 btn btn-primary me-2" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" hidden
                                                    accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="mb-4 btn btn-outline-secondary account-image-reset">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">შენახვა</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">სახელი გვარი</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="John" autofocus />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="lastName" class="form-label">კომპანიის დასახელება</label>
                                                <input class="form-control" type="text" name="lastName"
                                                    id="lastName" value="Doe" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">ელ-ფოსტა</label>
                                                <input class="form-control" type="text" id="email" name="email"
                                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">ნომერი</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">საქ (+995)</span>
                                                    <input type="text" id="phoneNumber" name="phoneNumber"
                                                        class="form-control" placeholder="202 555 0111" />
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">პირადი ნომერი</label>
                                                <input type="text" class="form-control" id="organization"
                                                    name="organization" value="ThemeSelection" />
                                            </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">შენახვა</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>
                            {{-- <div class="card">
                                <h5 class="card-header">Delete Account</h5>
                                <div class="card-body">
                                    <div class="mb-0 mb-3 col-12">
                                        <div class="alert alert-warning">
                                            <h6 class="mb-1 alert-heading">Are you sure you want to delete your account?
                                            </h6>
                                            <p class="mb-0">Once you delete your account, there is no going back. Please
                                                be certain.</p>
                                        </div>
                                    </div>
                                    <form id="formAccountDeactivation" onsubmit="return false">
                                        <div class="mb-3 form-check">
                                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                                id="accountActivation" />
                                            <label class="form-check-label" for="accountActivation">I confirm my account
                                                deactivation</label>
                                        </div>
                                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate
                                            Account</button>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <!-- Content wrapper -->
        </div>
    </div>
@stop
