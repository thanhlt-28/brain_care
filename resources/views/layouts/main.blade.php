<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Braincare')</title>
    @include('layouts.style')
</head>

<body>

    <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

        @include('layouts.nav')
    </div>

    @yield('content')

    @include('layouts.footer')

    @include('layouts.script')

    @yield('page-script')

</body>

</html>