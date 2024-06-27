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
                                    {{ Auth::user()->company_name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages-account-settings-connections.html"><i
                                        class="bx bx-link-alt me-1"></i> {{ Auth::user()->number }}</a>
                            </li>
                        </ul>
                        <div class="mb-4 card">
                            <h5 class="card-header">პროფილი</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="gap-4 d-flex align-items-start align-items-sm-center">
                                    <img src="/admin/assets/img/avatars/1.png" alt="user-avatar" class="rounded d-block"
                                        height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="mb-4 btn btn-primary me-2" tabindex="0">
                                            <span class="d-none d-sm-block">სურათის ატვირთვა</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden
                                                accept="image/png, image/jpeg" />
                                        </label>
                                        <button type="button" class="mb-4 btn btn-outline-secondary account-image-reset">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">შენახვა</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <form method="POST" action="{{ route('company.profile.update') }}">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="name" class="form-label">სახელი გვარი</label>
                                            <input class="form-control" type="text" id="name" name="name"
                                                value="{{ Auth::user()->name }}" required autofocus />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="company_name" class="form-label">კომპანიის დასახელება</label>
                                            <input class="form-control" type="text" name="company_name" id="company_name"
                                                value="{{ Auth::user()->company_name }}" required />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">ელ-ფოსტა</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                value="{{ Auth::user()->email }}" required  />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="iban" class="form-label">ანგარიშის ნომერი ინვოისის გადახსითვის</label>
                                            <input class="form-control" type="text" id="iban" name="iban"
                                                value="{{ Auth::user()->iban }}"  />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="number">ნომერი</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">საქ (+995)</span>
                                                <input type="text" id="number" name="number"
                                                    class="form-control" required value="{{ Auth::user()->number }}" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="id_number" class="form-label">პირადი ნომერი</label>
                                            <input type="text" class="form-control" id="id_number" name="id_number"
                                                value="{{ Auth::user()->id_number }}" required/>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">შენახვა</button>
                                        </div>
                                </form>
                            </div>
                            <!-- /Account -->
                        </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">სახელი გვარი</label>
                                                <input class="form-control" type="text" id="name" name="name"
                                                    value="{{ Auth::user()->name }}" autofocus />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="company_name" class="form-label">კომპანიის დასახელება</label>
                                                <input class="form-control" type="text" name="company_name" id="company_name"
                                                    value="{{ Auth::user()->company_name }}" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">ელ-ფოსტა</label>
                                                <input class="form-control" type="text" id="email" name="email"
                                                    value="{{ Auth::user()->email }}"  />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="iban" class="form-label">ანგარიშის ნომერი ინვოისის გადახსითვის</label>
                                                <input class="form-control" type="text" id="iban" name="iban"
                                                    value="{{ Auth::user()->iban }}"  />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="number">ნომერი</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">საქ (+995)</span>
                                                    <input type="text" id="number" name="number"
                                                        class="form-control" value="{{ Auth::user()->number }}" />
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="id_number" class="form-label">პირადი ნომერი</label>
                                                <input type="text" class="form-control" id="id_number" name="id_number"
                                                    value="{{ Auth::user()->id_number }}"/>
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">შენახვა</button>
                                            </div>
                                </div>
                                <!-- /Account -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- / Content -->
        </div>
        <!-- Content wrapper -->
    </div>
    </div>
    <script>
        $('#upload').change(function(event) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#uploadedAvatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@stop
