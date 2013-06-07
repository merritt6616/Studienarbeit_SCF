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
<div data-role="page" id ="category-page">
	<div data-role="header" data-position="fixed">
		<h1>Kategorien</h1>
	</div>
	<div data-role="content">

        <div id="categoryContainer" class="generalContainer">
       <!-- a-tags müssen data-attributen da das hier jquery-mobile ist. diese attribute machen haufenweise sachen selber.manche, gut, manche eher meh.
	macht ein wenig umständlich oder unfelxibel manchmal.
	 -->
		<a id="buero" class="category" data-icon="custom" data-role="button" href="">Büro</a>
        <a id="gesundheit" class="category" data-icon="custom" data-role="button"  href="">Gesundheit</a>
        <a id="elektronik" class="category" data-icon="custom" data-role="button" href="">Elektronik</a>
        <a id="fotografie" class="category"  data-icon="custom" data-role="button" href="">Fotografie</a>

        </div>

    </div>
<!-- /content -->
	<div data-role="footer" data-id="footer_1" data-position="fixed">
	<div data-role="navbar">
		<ul>
	<li><a id="mehr" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="">Mehr</a></li>
	<li><a id="bookmark" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" href="bookmarks.php">Lesezeichen</a></li>
		<li><a id="home" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top"  href="catalogs.php">Start</a></li>
		<li><a id="search" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" href="">Suche</a></li>
		<li><a id="categories" data-corners="false" data-shadow="false" data-transition="fade" data-icon="custom" data-iconpos="top" class="ui-state-persist ui-btn-active" href="categories.php">Kategorien</a></li>
		</ul>

	</div>
	</div>
	</div><!-- /page -->





</body>
</html>
