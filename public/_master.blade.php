
<?php 
error_reporting(-1);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Bite Me Bouquet')</title>

    <meta charset='utf-8'>

    @yield('head')

</head>
<body>


    @yield('content')

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

    @yield('footer')

</body>
</html>