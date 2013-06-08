<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">

    <!-- Need to get a proper redirect hooked up. Blech. -->
    <meta name="robots" content="noindex, follow">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Mobile</title>
    <link rel="stylesheet"  href="css/jquery.mobile-1.3.1.css">
    <link rel="stylesheet"  href="css/jquery.mobile.theme-1.3.1.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.3.1.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<?php
                require_once ('db.php');
?>

<div data-role="page" id ="product-page">
	<div data-role="header" data-position="fixed">
		<h1>Produkte</h1>
	</div>
	<div data-role="content">

            <div class="generalContainer">
            <?php


                $sqlProducts = 'SELECT product_name, katalog_name, description, bookmarked FROM tbl_product';
                $queryProducts = $db->prepare($sqlProducts);
                $queryProducts->execute();

                $rowProducts = $queryProducts->fetchAll();



                foreach($rowProducts as $product){
                  echo '
                  <div class="productContainer">
                  <div class="pic">

                   </div>
                   <div class="description">
                   <h3>'.$product['product_name'].'</h3>
                   <p>
                        '.$product['description'].'
                   </p>
		</div>
                   <div class="buttonGroup clearfix" data-role="controlgroup" >
                    <a href="http://www.mediamarkt.de/" target="_blank" data-role="button" >Zum Shop</a>';


                if ($product['bookmarked'] == 1)
                    echo '<a id="'.$product['product_name'].'" class="bookmark unset" href="" data-icon="custom" data-theme="b" data-role="button" > Lesezeichen gesetzt</a>';
                else if ($product['bookmarked'] == 0)
                    echo '<a id="'.$product['product_name'].'" class="bookmark set" data-theme="c" href="" data-icon="custom" data-role="button" > Lesezeichen setzen </a>';
                echo '
                </div>
                </div>';
                }
            ?>




        </div>

    </div>
<!-- /content -->
	<div data-role="footer" data-id="footer_1" data-position="fixed"  >
	<div data-role="navbar">
		<ul>
	    <li><a id="mehr" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="">Mehr</a></li>
	    <li><a id="bookmark" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" href="bookmarks.php">Lesezeichen</a></li>
		<li><a id="home" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="catalogs.php">Start</a></li>
		<li><a id="search" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" href="">Suche</a></li>
		<li><a id="categories" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"   href="categories.php">Kategorien</a></li>
		</ul>

	</div>
	</div>
</div><!-- /page -->
</body>
</html>
