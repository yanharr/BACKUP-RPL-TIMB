<!doctype html>
<html lang="en">

@include('templates.partials.head')

<body>
    @include('templates.partials.top_nav')

    <div class="mt-3">
        @yield('content')
    </div>

    @include('templates.partials.footer')
    @include('templates.partials.scripts')
</body>

</html>