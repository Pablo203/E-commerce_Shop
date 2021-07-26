<!DOCTYPE html>
<html>

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
-->
    <?php
    include('SCRIPT/header.php');
    ?>
    <!-- Nav Menu Area End -->


    <!-- Product Area Start -->

    <div class="container main">
        <div class="container product-title">
            <h1>
                Nazwa produktu
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
                    <img src="IMG/la.jpg" alt="Los Angeles">
                  </div>
                  <div class="carousel-item">
                    <img src="IMG/chicago.jpg" alt="Chicago">
                  </div>
                  <div class="carousel-item">
                    <img src="IMG/ny.jpg" alt="New York">
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
                        127<sup>99</sup>zł<br>
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
            Opis produktu:
        </div>
    </div>

    <!-- Product Area End -->


    <!-- Footer Area Start -->
        <!-- Footer Segment Area Start -->
        <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Segment Area End -->
    <script src="JS/product_page.js"></script>
    <!-- Footer Area End -->
</body>

</html>