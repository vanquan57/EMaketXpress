<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body>
    <div class="app">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
    </div>
    @include('admin.layouts.foot')
</body>
</html>