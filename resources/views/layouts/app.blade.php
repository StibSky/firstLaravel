<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Acme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')
<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <br>
            <br>
            <br>
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            <br>
            <br>
            <br>
            @include('inc.sidebar')
        </div>
    </div>
</div>

<footer id="footer" class="text-center">
    <p>Owned by Steve 2017 &copy; ACME</p>
</footer>


</body>
</html>
