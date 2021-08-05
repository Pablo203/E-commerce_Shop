<!DOCTYPE html>
<html>

<?php
//print_r($_GET);
$id_prod = $_GET['ID_PROD'];
$path = 'SCRIPT/ADMIN/MEDIA/';

include('SCRIPT/conn.php');
$query = "SELECT * FROM products WHERE ID_PROD = $id_prod";
$result = mysqli_query($mysqli, $query);
$rows = mysqli_num_rows($result);

?>

<head>
    <title>Dream</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta author="Paweł Rosa, Kamil Oberaj">
    <link rel="stylesheet" href="SCSS/main.css">
    <link rel="stylesheet" href="SCSS/product-page.css">
</head>

<body>

    <!-- Nav Menu Area Start -->
    <!--
    <div class="container d-flex justify-content-end">
        <button class="btn btn-light" onclick="languagepl()">
            pl
        </button>
        <button class="btn btn-light" onclick="languageen()">
            en
        </button>
    </div>
        <!-- Nav Menu Area End -->
    <?php
    include('SCRIPT/header.php');
    ?>
    <?php
    while($info = mysqli_fetch_array($result)) {
    echo '
    <!-- Product Area Start -->

    <div class="container main">
        <div class="container product-title">
            <h1>
            '.$info['name_PR'].'
            </h1>
        </div>

        <div class="container slide justify-content-center">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="'.$path.$info['img_PR'].'" alt="product-photo" style="width:1100px; height:500px;">
                            </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-5 price">
                    <p>
                        <b>Cena:</b>
                        <br>
                        '.$info['price_PR'].'
                    </p>
                    <button class="btn btn-light">Dodaj do koszyka</button>

                    <button class="btn btn-light plus" onclick="amount_minus()">-</button>
                    <button class="btn btn-light" id="amount" disabled></button>
                    <button class="btn btn-light" onclick="amount_plus()">+</button>
                    <br><br>
                    <button class="btn btn-light last">Kup teraz</button>

                </div>
                <div class="col-2"></div>
                <div class="col-5 shipment">
                    <p>
                        <p class="deliver">
                            Sposób dostawy:<br>
                        </p>
                        <p class="deliver">
                            Czas dostawy:<br>
                        </p>
                        <p class="deliver">
                            Koszt dostawy:<br>
                        </p>
                    </p>
                </div>
            </div>
        </div>

        <div class="container main">
            Opis produktu:<br>
            '.$info['desc_PR'].'
            <br><br>
            Protuct ID:
            '.$info['ID_PROD'].'
        </div>
    </div>

    <!-- Product Area End -->
    ';
}
?>
    <!-- Footer Area Start -->
        <?php
    include('SCRIPT/footer.php');
    ?>
    <script src="JS/product_page.js"></script>
    <!-- Footer Area End -->
</body>

</html>