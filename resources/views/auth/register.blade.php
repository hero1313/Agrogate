<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        @extends('website.index')
@section('content')
    <div class="container main page-wrapper">

        <!-- Breadscrumb Section Start -->
        <section class="breadscrumb-section ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadscrumb-contain">
                            <h2>Submit Property</h2>
                            <nav>
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="bx bx-home-circle"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Submit Property</li>
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
                        <div class="custom-card m-auto register-card">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h2 class="section-title title">Register Now</h2>
                                <div class="form-group">
                                    <input type="text" name="name" :value="old('name')" required class="form-control"
                                        placeholder="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company_name" :value="old('company_name')" required class="form-control"
                                        placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" :value="old('email')" required class="form-control"
                                        placeholder="email">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="number" :value="old('number')" required class="form-control"
                                        placeholder="number">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="id_number" :value="old('id_number')" required class="form-control"
                                        placeholder="id number">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" required class="form-control"
                                        placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" required class="form-control"
                                        placeholder="repeat password">
                                </div>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ms-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' =>
                                                            '<a target="_blank" href="' .
                                                            route('terms.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                            __('Terms of Service') .
                                                            '</a>',
                                                        'privacy_policy' =>
                                                            '<a target="_blank" href="' .
                                                            route('policy.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                            __('Privacy Policy') .
                                                            '</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif
                                <x-validation-errors class="mb-4" />
                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button class="ms-4">
                                        {{ __('Register') }}
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

    </x-authentication-card>
</x-guest-layout>
