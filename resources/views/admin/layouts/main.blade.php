<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',' Dashboard ')</title>

    @include('admin.layouts.style')
</head>

<body>
    <div class="wrapper">
        @include('admin.layouts.nav')
        <div class="main">
            @include('admin.layouts.header')
            <main class="content">
                @yield('content')
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
    @include('admin.layouts.script')
    @yield('page-script')
</body>

</html>