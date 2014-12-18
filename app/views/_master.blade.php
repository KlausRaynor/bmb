
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

	<img class=banner src='/images/logo_img.jpg' alt='Bite Me Bouquet Logo'>

   @yield('content')

<div id='footer'>

   <!-- MAYBE UNNECESSARY?@yield('footer')-->

<span class='social'>
<a class='center' href="https://twitter.com/bitemebouquet" ><img src='/images/iso-white/twitter-iso-white.png' alt="Come follow us on twitter!"></a>
</span>
<span class='social'>
<a class='center' href="https://www.facebook.com/pages/Bite-Me-Bouquet/362499124162" ><img src='/images/iso-white/facebook-iso-white.png' alt="Check out our facebook!"></a>
</span>
<span class='social'>
<a class='center' href="http://instagram.com/bitemebouquet" ><img src='/images/iso-white/instagram-iso-white.png' alt="Like us on Instagram!"></a>
</span>
<span class='social'>
<a class='center' href="http://bitemebouquet.tumblr.com/" ><img src='/images/iso-white/tumblr-iso-white.png' alt="Follow our Tumblr page!"></a>
</span>
   @yield('footer')
<p id='copyright'>&copy;2014 Bite Me Bouquet, LLC. All rights reserved.</p>

</div>
</body>
</html>