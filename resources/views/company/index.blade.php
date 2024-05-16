<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="/admin/assets/" data-template="vertical-menu-template-free">
    @include('company.layouts.head')
    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('company.layouts.navbar')
                @yield('content')
            </div>

            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        @include('company.layouts.script')

    </body>
</html>
