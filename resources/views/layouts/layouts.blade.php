<!doctype html>
<html>
<head>

    @include('includes.head')

</head>

<body>

<div class="container">
    <header class="row">
       @include('includes.navbar')
    </header>

<div>
    @include('includes.googlemapsapi')
</div>


<div id="main" class="row">
         @yield('content')
</div>


<footer class="row">
       @include('includes.footer')
</footer>

</body>

</html>
