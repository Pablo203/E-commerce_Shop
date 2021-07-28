<?php
include('conn.php');
//check if user inputted text to search bar

if(isset($_GET['submit'])) {
    $product = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
    //print_r($_GET);
    $query = "SELECT ID_PROD, name_PR, price_PR, desc_PR, img_PR, cat_PR FROM products WHERE name_PR LIKE '%$product%'";
    $result = mysqli_query($mysqli, $query);
    $info = mysqli_fetch_array($result);
    session_start();
    $_SESSION['ID_PROD'] = $info['ID_PROD'];
    $_SESSION['name_PR'] = $info['name_PR'];
    $_SESSION['price_PR'] = $info['price_PR'];
    $_SESSION['desc_PR'] = $info['desc_PR'];
    $_SESSION['img_PR'] = $info['img_PR'];
    $_SESSION['cat_PR'] = $info['cat_PR'];
    //print_r($_SESSION);
    header('Location: ../product-search.php');
} else {
    header('Location: ../index.html');
}
?>