<?php
include('../conn.php');

//print_r($_POST);
$EditedName = $_POST['prod-edit-name'];
$EditedPrice = $_POST['prod-edit-price'];
$EditedDesc = $_POST['prod-edit-desc'];
$EditedImg = $_POST['prod-edit-img'];
$EditedCat = $_POST['prod-edit-cat'];

if(isset($_POST['prod-edit-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $ProdID = $_SESSION['prod-id'];
    echo $query = "UPDATE products SET name_PR = '$EditedName ', price_PR = $EditedPrice, desc_PR = '$EditedDesc',
    img_PR = '$EditedImg', cat_PR = $EditedCat WHERE ID_PROD = $ProdID";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['prod-add-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $ProdID = $_SESSION['prod-id'];
    echo $query = "INSERT INTO products (name_PR, price_PR, desc_PR, img_PR, cat_PR) 
    VALUES ('$EditedName', $EditedPrice, '$EditedDesc', '$EditedImg', $EditedCat)";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['prod-remove-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $ProdID = $_SESSION['prod-id'];
    echo $query = "DELETE FROM products WHERE ID_PROD = $ProdID";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
}
?>