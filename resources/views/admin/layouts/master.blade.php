<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        @include('admin.partials.navbar')

        @include('admin.partials.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        @include('admin.partials.footer')
    </div>
</div>

@include('admin.partials.scripts')
</body>
</html>
