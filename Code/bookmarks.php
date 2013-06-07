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
</head>
<body>
<?php
                require_once ('db.php');
?>



<div data-role="page" id ="bookmark-page">
	<div data-role="header" data-position="fixed">
		<h1>Lesezeichen</h1>
	</div>
	<div data-role="content">

        <div id="bookmarkContainer" class="generalContainer">
                <?php
                     $sqlProducts = 'SELECT product_name, katalog_name, description, bookmarked FROM tbl_product';
                     $queryProducts = $db->prepare($sqlProducts);
                     $queryProducts->execute();

                    $rowProducts = $queryProducts->fetchAll();
                    $sqlCatalogs = '
                            SELECT * FROM tbl_product
                            GROUP BY katalog_name
                    ';
                    $queryCatalogs = $db->prepare($sqlCatalogs);
                    $queryCatalogs->execute();

                    $rowsCatalogs = $queryCatalogs->fetchAll();


                    foreach ($rowProducts as $product){
                        if ($product['bookmarked'] == 1)
                        echo '

                        <div class="productBox">
                            <div class="info">
                                <span>'.$product['katalog_name'].'</span><span>'.$product['product_name'].'</span>
                            </div>
        	            <a  href="products.php"><img src="images/'.$product['katalog_name'].'.jpg"></a>
                        </div>
                	';
                    }

                ?>

        </div>

    </div>
<!-- /content -->
	<div data-role="footer" data-id="footer_1" data-position="fixed">
	<div data-role="navbar">
		<ul>
	<li><a id="mehr" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="">Mehr</a></li>
	<li><a id="bookmark" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" class="ui-state-persist ui-btn-active" href="bookmarks.php">Lesezeichen</a></li>
		<li><a id="home" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="catalogs.php">Start</a></li>
		<li><a id="search" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" href="">Suche</a></li>
		<li><a id="categories" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="categories.php">Kategorien</a></li>
		</ul>

	</div>
	</div>
	</div><!-- /page -->
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>