<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')
    <div class="overflow-x-hidden">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts.foot')
</body>

</html>
