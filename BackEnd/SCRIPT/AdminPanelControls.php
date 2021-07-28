<!DOCTYPE html>
<html style="overflow-x : hidden;">

<head>
    <title>Dream</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta author="Paweł Rosa, Kamil Oberaj">
    <link rel="stylesheet" href="../SCSS/main.css">
</head>
<body>

<?php include('header.php'); ?>

<?php
session_destroy();
session_start();
$table = $_SESSION['table'];

if(isset($_POST['admin-controls-edit'])) {
    include('conn.php');
    //print_r($_POST);
    //print_r($_SESSION);
    if($table == "categories") {
        $query = "SELECT * FROM categories WHERE ID_CAT LIKE '%".$_POST['admin-db-lookup']."%'";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);
        session_destroy();
        session_start();
        $_SESSION['cat-id'] = $_POST['admin-db-lookup'];
        if($result) {
            echo '<br><br>';
            echo '
            <form method="POST" action="ADMIN/CategoryEdit.php">
            <p>NAME_CAT</p>
            <input type="text" name="cat-edit-name" placeholder="'.$row["NAME_CAT"].'">
            <input type="submit" name="cat-edit-submit" value="edit">
            <input type="submit" name="cat-add-submit" value="add">
            <input type="submit" name="cat-remove-submit" value="remove">
            </form> <br>
            <p style="color: red;">Wypełnij pola domyślnymi wartościami i/lub dopisz nowe</p>';
        } else {
            echo 'something went wrong! - CATEGORIES (no results or multiple)';
        }

    } else if ($table == "products") {
        $query = "SELECT * FROM products WHERE ID_PROD LIKE '%".$_POST['admin-db-lookup']."%'";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);
        session_destroy();
        session_start();
        $_SESSION['prod-id'] = $_POST['admin-db-lookup'];
        if($result) {
            echo '<br><br>';
            echo '
            <form method="POST" action="ADMIN/ProductEdit.php" enctype="multipart/form-data"> 
            <p>name_PR</p>
            <input type="text" name="prod-edit-name" placeholder="'. $row["name_PR"] .'">
            <p>price_PR</p>
            <input type="text" name="prod-edit-price" placeholder="'. $row["price_PR"] .'">
            <p>desc_PR</p>
            <input type="text" name="prod-edit-desc" placeholder="'. $row["desc_PR"] .'">
            <p>img_PR</p>
            <input type="file" name="prod-edit-img">
            <p>cat_PR</p>
            <input type="text" name="prod-edit-cat" placeholder="'. $row["cat_PR"] .'">
            <input type="submit" name="prod-edit-submit" value="edit">
            <input type="submit" name="prod-add-submit" value="add">
            <input type="submit" name="prod-remove-submit" value="remove">
            </form>
            <br>
            <p style="color: red;">Wypełnij pola domyślnymi wartościami i/lub dopisz nowe</p>';
        } else {
            echo 'something went wrong! - PRODUCTS (no results or multiple)';
        }

    } else {
        $query = "SELECT * FROM users WHERE email_US LIKE '%".$_POST['admin-db-lookup']."%'";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($result);
        session_destroy();
        session_start();
        $_SESSION['user-id'] = $_POST['admin-db-lookup'];
        if($result) {
            echo '<br><br>';
            echo '
            <form method="POST" action="ADMIN/UsersEdit.php">
            <p>user_US</p>
            <input type="text" name="user-edit-user" placeholder="'. $row["user_US"] .'">
            <p>email_US</p>
            <input type="text" name="user-edit-email" placeholder="'. $row["email_US"] .'">
            <p>role_US</p>
            <input type="text" name="user-edit-role" placeholder="'. $row["role_US"] .'">
            <input type="submit" name="user-edit-submit" value="edit">
            <input type="submit" name="user-remove-submit" value="remove">
            </form><br>
            <p style="color: red;">Wypełnij pola domyślnymi wartościami i/lub dopisz nowe</p>';
        } else {
            echo 'something went wrong! - USERS (no results or multiple)';
        }


    }
}
?>

<?php include('footer.php'); ?>

</body>

</html>