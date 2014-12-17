
<?php 
error_reporting(-1);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Bite Me Bouquet')</title>

    <meta charset='utf-8'>


    	<!--Imports style sheet from public folder-->
	{{ HTML::style('css/style.css'); }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


    @yield('head')

</head>
<body>

	<center><img class=banner src='/images/logo_img.jpg' alt='Bite Me Bouquet Logo'></center>

   @yield('content')


   @yield('footer')

</body>
</html>