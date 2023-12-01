<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('layout.partials.sidebar')
    <div class="body-wrapper">
    @include('layout.partials.header')
    @yield('content')
    </div>
    @include('layout.partials.footer')
    </div>
    @include('layout.partials.footer-scripts')
</body>

</html>
