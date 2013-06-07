<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once ('db.php');
$product_name = $_POST['productname'];
$settoggle = $_POST['settoggle'];
$example_catalog = 'Mediamarkt';

if ($settoggle == 'set'){
$sql = 'UPDATE
        tbl_product
        SET bookmarked = 1
        WHERE product_name = :product_name
        AND katalog_name = :katalog_name
        ';
}
else if ($settoggle == 'unset'){
   $sql = 'UPDATE
        tbl_product
        SET bookmarked = 0
        WHERE product_name = :product_name
        AND katalog_name = :katalog_name';
}
$query = $db->prepare($sql);
$query->execute(
    array(
        'product_name'   => $product_name,
        'katalog_name' => $example_catalog

    )
);

?>










