@extends('website.index')
@section('content')
    <div class="container main page-wrapper">

        <!-- Breadscrumb Section Start -->
        <section class="breadscrumb-section ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadscrumb-contain">
                            <h2>{{__('public._register_company')}}</h2>
                            <nav>
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="bx bx-home-circle"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{__('public._register_company')}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadscrumb Section End -->

        <!-- Start Submit Property -->
        <section class="submit-property-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="m-auto custom-card register-card">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h2 class="section-title title">{{__('public._registration')}}</h2>

                                <div class="form-group">
                                    <input type="text" name="name" required :value="old('name')" class="form-control"
                                        placeholder="{{__('public._name')}}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company_name" required :value="old('company_name')" class="form-control"
                                        placeholder="{{__('public._company_name')}}">
                                    @if ($errors->has('company_name'))
                                        <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required :value="old('email')" class="form-control"
                                        placeholder="{{__('public._email')}}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="number" name="number" required :value="old('number')" class="form-control"
                                        placeholder="{{__('public._number')}}">
                                    @if ($errors->has('number'))
                                        <span class="text-danger">{{ $errors->first('number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="number" name="id_number" required :value="old('id_number')" class="form-control"
                                        placeholder="{{__('public._id_number')}}">
                                    @if ($errors->has('id_number'))
                                        <span class="text-danger">{{ $errors->first('id_number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" required class="form-control"
                                        placeholder="{{__('public._password')}}">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" required class="form-control"
                                        placeholder="{{__('public._repeat_password')}}">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">
                                        {{__('public._already_register')}}
                                    </a>
                                    <x-button class="ms-4">
                                        {{__('public._registration')}}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Submit Property -->
    </div>
@stop
