{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Link of CSS files -->
    <link rel="stylesheet" href="/website/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/website/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="/website/assets/css/remixicon.css">
    <link rel="stylesheet" href="/website/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/website/assets/css/owl-theme-default-min.css">
    <link rel="stylesheet" href="/website/assets/css/odometer.min.css">
    <link rel="stylesheet" href="/website/assets/css/fancybox.css">
    <link rel="stylesheet" href="/website/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="/website/assets/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/website/assets/css/aos.css">
    <link rel="stylesheet" href="/website/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/website/assets/css/style.css">
    <link rel="stylesheet" href="/website/assets/css/responsive.css">
    <link rel="stylesheet" href="/website/assets/css/dark-theme.css">
    <title>Emlak - Real Estate, Architecture, and Construction HTML Website Template</title>
    <link rel="icon" type="image/png" href="/website/assets/img/favicon.png">
    <link rel="stylesheet" href="/website/assets/css/main.css" />

</head>

<body>

    <!-- Page Wrapper Start -->
    <div class="page-wrapper">

        <!-- Main Wrapper Start -->
        <div class="main page-wrapper">
            <!-- My Account Section Start -->
            <div class="my-account-area ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="m-auto col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="custom-card">
                                <div class="mb-3 center"> 
                                    <img src="/website/assets/img/logo.png" alt="">
                                </div>
                                @if (session('status'))
                                    <div class="mb-4 text-sm font-medium text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div>
                                        <x-label for="email" value="{{ __('ელ-ფოსტა') }}" />
                                        <x-input id="email" class="mt-2 form-control" type="email" name="email"
                                            :value="old('email')" required   />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="password" value="{{ __('პაროლი') }}" />
                                        <x-input id="password" class="block w-full mt-1" type="password"
                                            name="password" required  />
                                    </div>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="text-sm text-gray-600 ms-2">{{ __('დამახსოვრება') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('დაგასვიწყდათ პაროლი?') }}
                                            </a>
                                        @endif

                                        <x-button class="ms-4">
                                            {{ __('შესვლა') }}
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End -->

        </div>
    </div>
    <!-- Page Wrapper End -->

    <!-- Back-to-top Button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top Button End -->

    <!-- Link of JS Files -->
    <script src="/website/assets/js/jquery.min.js"></script>
    <script src="/website/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/website/assets/js/form-validator.min.js"></script>
    <script src="/website/assets/js/contact-form-script.js"></script>
    <script src="/website/assets/js/aos.js"></script>
    <script src="/website/assets/js/owl.carousel.min.js"></script>
    <script src="/website/assets/js/owl-thumb.min.js"></script>
    <script src="/website/assets/js/odometer.js"></script>
    <script src="/website/assets/js/fancybox.js"></script>
    <script src="/website/assets/js/magnific-popup.min.js"></script>
    <script src="/website/assets/js/ion.rangeSlider.min.js"></script>
    <script src="/website/assets/js/slick.min.js"></script>
    <script src="/website/assets/js/jquery.appear.js"></script>
    <script src="/website/assets/js/main.js"></script>
</body>

</html>
