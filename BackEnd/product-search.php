<!DOCTYPE html>
<html>
<?php

    include('SCRIPT/conn.php');
    //check if user inputted text to search bar
    $path = 'SCRIPT/ADMIN/MEDIA/';
    
    if(isset($_GET['submit'])) {
        $product = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
        //print_r($_GET);
        $query = "SELECT * FROM products WHERE name_PR LIKE '%$product%'";
        $result = mysqli_query($mysqli, $query);
        $rows = mysqli_num_rows($result);
/*        session_start();
        $_SESSION['ID_PROD'] = $info['ID_PROD'];
        $_SESSION['name_PR'] = $info['name_PR'];
        $_SESSION['price_PR'] = $info['price_PR'];
        $_SESSION['desc_PR'] = $info['desc_PR'];
        $_SESSION['img_PR'] = $info['img_PR'];
        $_SESSION['cat_PR'] = $info['cat_PR'];
        session_destroy();
*/
    } else {
        header('Location: ../index.html');
    }
?>
<head>
    <title>Dream</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta author="Paweł Rosa, Kamil Oberaj">
    <link rel="stylesheet" href="SCSS/main.css">
    <link rel="stylesheet" href="SCSS/product_search.css">
</head>

<body>

    <!-- Nav Menu Area Start -->
    <?php
    include('SCRIPT/header.php');
    ?>
    <!-- Nav Menu Area End -->

    <!-- Search Output Area Start -->

    

    <div class="container">

        <div class="row">
            <div class="container searched-category">
                    <p class="searched-text">Wyszukana fraza: "<?php echo $product;?>"</p>
            </div>
            <!--<div class="col-3 filter-menu">
                <p class="segment-head">
                    Sortowanie:<br>
                </p>
                <p class="segment-body">
                    <form class="segment-body">
                        <input type="checkbox"> Od najniższej ceny<br><br>
                        <input type="checkbox"> Od najwyższej ceny<br><br>
                        <input type="checkbox"> Od najszybszej dostawy<br><br>
                        <input type="checkbox"> Od najdłuższej dostawy<br>
                    </form>
                </p>
            </div>-->
            <div class="col-1"></div>
            <?php
            //
            while($info = mysqli_fetch_array($result)) {
                echo '<center><div class="row">
                <div class="col-4"></div>
                <div class="col-8 position">
                    <div class="row">
    
                        <div class="col-6">
                            <div class="photo-position">
                                <img class="img-fluid" src="'.$path.$info['img_PR'].'">
                            </div>
                        </div>
                        <a href="product-page.php?ID_PROD='.$info['ID_PROD'].'">
                            <div class="col-6">
                                <br>
                                <p>
                                    <b>
                                    '.$info['name_PR'].'
                                    </b>
                                </p><br>
                                <p>
                                    '.$info['price_PR'].'
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div><center>';
            }
            ?>
    </div>

    </div>
    <!-- Products List End-->

    <!-- Search Output Area End -->

    <!-- Footer Area Start -->
    <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Area End -->
</body>