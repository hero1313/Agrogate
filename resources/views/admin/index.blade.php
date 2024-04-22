<!doctype html>
<html lang="en">
@include('website.layouts.head')
<body>
    @include('website.layouts.sidenav')
    <div class="main-content position-relative max-height-vh-100 h-100">
        @include('website.layouts.header')

        @yield('content')
    </div>
    @include('website.layouts.js')
</body>

</html>
