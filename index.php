<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bite Me Bouquet&trade;</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    
</head>
<body>
<header>
<div id="head">
	<h1>Bite Me Bouquet&trade;</h1>
</div>
    <ul><!--Javascript bg:color changer-->
        <li class='colorChange' title='teal'><img src='images/thumbnails/teal.png'></li>
        <li class='colorChange' title='blue'><img src='images/thumbnails/blue.png'></li>
        <li><img id="banner" src="images/header.jpg"></li>
        <li class='colorChange' title='purple'><img src='images/thumbnails/purple.png'></li>
        <li class='colorChange' title='marigold'><img src='images/thumbnails/marigold.png'></li>
    </ul>
</header>

<a href="contact.php"> Click here for contact </a>
	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<h2>Gallery</h2>

<!--gallery images-->
<div id="gallery">
<ul>
    <li>
    <a href="images/lemonteacups.jpg" title="Lemon Tea Cups" data-gallery>
        <img src="images/thumbnails/lemonteacups1.png" alt="lemon teacups">
    </a>
    </li>
    <li>
    <a href="images/fruitplatter1.jpg" title="Catered Fruit Platter" data-gallery>
        <img src="images/thumbnails/fruitplatter1.png" alt="fruit platter">
    </a>
    </li>
    <li>
    <a href="images/melonflower.jpg" title="Melon Flower" data-gallery>
        <img src="images/thumbnails/melonflower.png" alt="melon flower">
    </a>
    </li>
    <li>
    <a href="images/pumpkinbuoquet.jpg" title="Pumpkin Bouquet" data-gallery>
        <img src="images/thumbnails/pumpkinbouquet.png" alt="pumpkin bouquet">
    </a>
    </li>
        <li>
    <a href="images/fruitbouquet.jpg" title="Fruit Bouquet" data-gallery>
        <img src="images/thumbnails/fruitbouquet.png" alt="fruit bouquet">
    </a>
    </li>
    <li>
    <a href="images/fruitcone.jpg" title="Fruit Cone" data-gallery>
        <img src="images/thumbnails/fruitcone.png" alt="fruit cone">
    </a>
    </li>
    <li>
    <a href="images/fruitconeplatter.jpg" title="Fruit Cone Platter" data-gallery>
        <img src="images/thumbnails/fruitconeplatter.png" alt="fruit cone platter">
    </a>
    </li>
    <li>
    <a href="images/plantpanda.jpg" title="Panda Fruit Platter" data-gallery>
        <img src="images/thumbnails/pandaplatter.png" alt="fruit platter">
    </a>
    </li>
        <li>
    <a href="images/bouquetfruitplatter.jpg" title="Arranged Fruit Platter" data-gallery>
        <img src="images/thumbnails/fruitplatter2.png" alt="panda platter">
    </a>
    </li>
    <li>
    <a href="images/bitemebouquetwords.jpg" title="Fruit Platter &copy;Bite Me Bouquet" data-gallery>
        <img src="images/thumbnails/fruitplatter3.png" alt="fruit platter">
    </a>
    </li>
    <li>
    <a href="images/lemoncup.jpg" title="Lemon Teacups with Fruit" data-gallery>
        <img src="images/thumbnails/lemonteacups2.png" alt="lemon teacups">
    </a>
    </li>
</ul>
</div>
<footer>
<p>&copy;NightJar Studio.  All content owned by Bite Me Bouquet&trade;. All Rights Reserved.</p>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>
<script src='js/script.js'></script>
</body>
</html>