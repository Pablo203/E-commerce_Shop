<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../conn.php');

//print_r($_POST);

// File upload path

if(isset($_POST['prod-edit-submit'])) {
    $EditedName = $_POST['prod-edit-name'];
    $EditedPrice = $_POST['prod-edit-price'];
    $EditedDesc = $_POST['prod-edit-desc'];
    $EditedCat = $_POST['prod-edit-cat'];
    $file_tmp = $_FILES['prod-edit-img']['tmp_name'];
    $file_name = $_FILES['prod-edit-img']['name'];
    $file_size = $_FILES['prod-edit-img']['size'];
    $file_type = $_FILES['prod-edit-img']['type'];
    //echo 'test';
    move_uploaded_file($file_tmp,"/Applications/XAMPP/xamppfiles/htdocs/sistema/SCRIPT/ADMIN/MEDIA/".$file_name);
    //echo 'test2';
    print_r($_FILES);
    //session_destroy();
    session_start();
    $ProdID = $_SESSION['prod-id'];
    //echo 'test3';
    echo $query = "UPDATE products SET name_PR = '$EditedName ', price_PR = $EditedPrice, desc_PR = '$EditedDesc',
    img_PR = '$file_name', cat_PR = $EditedCat WHERE ID_PROD = $ProdID";
    $result = mysqli_query($mysqli, $query);
    //echo 'test4';
    if($result == 1) {
        //header('Location: ProductEdit.php');
        //print_r($_FILES);
        //print_r($_SESSION);
        //echo 'test5';
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['prod-add-submit'])) {
    $EditedName = $_POST['prod-edit-name'];
    $EditedPrice = $_POST['prod-edit-price'];
    $EditedDesc = $_POST['prod-edit-desc'];
    $EditedCat = $_POST['prod-edit-cat'];
    $file_tmp = $_FILES['prod-edit-img']['tmp_name'];
    $file_name = $_FILES['prod-edit-img']['name'];
    $file_size = $_FILES['prod-edit-img']['size'];
    $file_type = $_FILES['prod-edit-img']['type'];
    print_r($_FILES);
    //session_destroy();
    move_uploaded_file($file_tmp,"/Applications/XAMPP/xamppfiles/htdocs/sistema/SCRIPT/ADMIN/MEDIA/".$file_name);
    //session_destroy();
    session_start();
    //print_r($_SESSION);
    $ProdID = $_SESSION['prod-id'];
    echo $query = "INSERT INTO products (name_PR, price_PR, desc_PR, img_PR, cat_PR) 
    VALUES ('$EditedName', $EditedPrice, '$EditedDesc', '$file_name', $EditedCat)";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['prod-remove-submit'])) {
    //session_destroy();
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