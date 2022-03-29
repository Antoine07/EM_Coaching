<html>

<head>
    <title>App Name - Book</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container">
        @include('partials.menu')
        <div class="row">
            <div class="col">
            @section('sidebar')
            This is the master sidebar.
            @show
            </div>
            <div class="col">
                <nav>
                    <a href="{{ route('home') }}">Home</a>
                </nav>
            @yield('content')
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>