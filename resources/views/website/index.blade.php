<!DOCTYPE html>
<html lang="zxx">
    @include('website.layouts.head')

    <body onload="initialize()">

        <!-- Preloader Start -->
        <div class="loader js-preloader">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!-- Preloader End -->

        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>

        <!-- Page Wrapper Start -->
        <div class="page-wrapper">

            @include('website.layouts.header')

            @yield('content')

            @include('website.layouts.footer')
        </div>
        @include('website.layouts.script')
    </body>
</html>
