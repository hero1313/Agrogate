@extends('admin.index')
@section('content')
    <div class="layout-page">

            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="px-0 nav-item nav-link me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input type="text" class="border-0 shadow-none form-control ps-1 ps-sm-2"
                                placeholder="Search..." aria-label="Search..." />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="flex-row navbar-nav align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                        <li class="nav-item lh-1 me-3">
                            <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free"
                                data-icon="octicon-star" data-size="large" data-show-count="true"
                                aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                        </li>

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="/admin/assets/img/avatars/1.png" alt class="h-auto w-px-40 rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="/admin/assets/img/avatars/1.png" alt
                                                        class="h-auto w-px-40 rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-medium d-block">John Doe</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="align-middle d-flex align-items-center">
                                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                            <span class="align-middle flex-grow-1 ms-1">Billing</span>
                                            <span
                                                class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                                <li class="nav-item">
                                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
                                        Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-account-settings-notifications.html"><i
                                            class="bx bx-bell me-1"></i> Notifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-account-settings-connections.html"><i
                                            class="bx bx-link-alt me-1"></i> Connections</a>
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
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>

                                            <p class="mb-0 text-muted">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input class="form-control" type="text" id="firstName"
                                                    name="firstName" value="John" autofocus />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input class="form-control" type="text" name="lastName"
                                                    id="lastName" value="Doe" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input class="form-control" type="text" id="email" name="email"
                                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Organization</label>
                                                <input type="text" class="form-control" id="organization"
                                                    name="organization" value="ThemeSelection" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">US (+1)</span>
                                                    <input type="text" id="phoneNumber" name="phoneNumber"
                                                        class="form-control" placeholder="202 555 0111" />
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    placeholder="Address" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="state" class="form-label">State</label>
                                                <input class="form-control" type="text" id="state" name="state"
                                                    placeholder="California" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="zipCode" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" id="zipCode" name="zipCode"
                                                    placeholder="231465" maxlength="6" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="country">Country</label>
                                                <select id="country" class="select2 form-select">
                                                    <option value="">Select</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="China">China</option>
                                                    <option value="France">France</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea, Republic of</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Russia">Russian Federation</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="language" class="form-label">Language</label>
                                                <select id="language" class="select2 form-select">
                                                    <option value="">Select Language</option>
                                                    <option value="en">English</option>
                                                    <option value="fr">French</option>
                                                    <option value="de">German</option>
                                                    <option value="pt">Portuguese</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="timeZones" class="form-label">Timezone</label>
                                                <select id="timeZones" class="select2 form-select">
                                                    <option value="">Select Timezone</option>
                                                    <option value="-12">(GMT-12:00) International Date Line West
                                                    </option>
                                                    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                                    <option value="-10">(GMT-10:00) Hawaii</option>
                                                    <option value="-9">(GMT-09:00) Alaska</option>
                                                    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                                    <option value="-7">(GMT-07:00) Arizona</option>
                                                    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                    <option value="-6">(GMT-06:00) Central America</option>
                                                    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                                    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey
                                                    </option>
                                                    <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                                    </option>
                                                    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                    <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                                    <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="currency" class="form-label">Currency</label>
                                                <select id="currency" class="select2 form-select">
                                                    <option value="">Select Currency</option>
                                                    <option value="usd">USD</option>
                                                    <option value="euro">Euro</option>
                                                    <option value="pound">Pound</option>
                                                    <option value="bitcoin">Bitcoin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>
                            <div class="card">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <!-- Content wrapper -->
        </div>
    </div>
@stop
