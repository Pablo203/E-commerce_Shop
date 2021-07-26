<!DOCTYPE html>
<html style="overflow-x : hidden;">

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
</head>

<body>

    <!-- Nav Menu Area Start  flex-row-reverse-->
    <?php
    include('SCRIPT/header.php');
    ?>
    <!-- Nav Menu Area End -->


    <!-- Banner Area Start -->

    <div class="jumbotron-fluid" id="banner">
        <img src="IMG/parcel2.jpeg" class="img-fluid">
        <div class="centered">
            <p class="banner-text-head">
                Dream
            </p>
            <br>
            <p class="banner-text">
                Wszystko czego kiedykolwiek<br>
                możesz zapragnąć
            </p>
        </div>
    </div>

    <!-- Banner Area End -->


    <!-- Main Segment Area Start -->
    <div class="container-fluid text-center">
        <p>
            <h2>
                Co wyróżnia nasz sklep?
            </h2>
        </p>
    </div>

    <div class="container-fluid" id="category-section">
        <div class="row">
            <div class="col-sm-12 col-lg-1">
            </div>
            <div class="col-sm-12 col-lg-5 order-1">
                <p class="category-text-left">
                    <h3>
                        Jakość
                    </h3>
                    <br>
                    Nasze produkty są wykonywane<br>
                    z największą dbałością o szczegóły,<br>
                    oraz z najlepszych materiałów<br>
                    aby dostarczyć kupującemu jak najlepszy produkt
                </p>
            </div>
            <div class="col-sm-12 col-lg-6 order-2">
                <img class="img-fluid photo-right" src="IMG/jam-jar.jpg">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="category-section">
        <div class="row">
            <div class="col-sm-12 col-lg-6 order-4">
                <img class="img-fluid photo-right" src="IMG/jam-jar.jpg">
            </div>
            <div class="col-sm-12 col-lg-5 order-3">
                <p class="category-text-left">
                    <h3>
                        Trwałość
                    </h3>
                    <br>
                    Aby czerpać satysfakcję z użytkowania produktu<br>
                    nie można się przejmować o to czy produkt wytrzyma<br>
                    nawet najcięższe próby. Aby dostarczyć przyjemność<br>
                    z użytkowania poszczególne sztuki z partii<br>
                    są poddawane próbom sprawdzającym ich trwałość.
                </p>
            </div>
            <div class="col-sm-12 col-lg-1">

            </div>
        </div>
    </div>

    <div class="container-fluid" id="category-section">
        <div class="row">
            <div class="col-sm-12 col-lg-1">
            </div>
            <div class="col-sm-12 col-lg-5 order-5">
                <p class="category-text-left">
                    <h3>
                        Gwarancja
                    </h3>
                    <br>
                    Nawet pomimo najlepszych materiałów oraz<br>
                    testów którym poddawane są produkty zanim<br>
                    trafią do sprzedaży może zdarzyć się, że produkt<br>
                    nie podoła wyzwaniom.<br>
                    Gwarancja obejmuje produkt na dwa lata na <br>
                    wszelkie wypadki nie spowodowane przez nieprawidłowe<br>
                    użytkowanie produktu.
                </p>
            </div>
            <div class="col-sm-12 col-lg-6 order-6">
                <img class="img-fluid photo-right" src="IMG/jam-jar.jpg">
            </div>
        </div>
    </div>

    <!-- Main Segment Area End -->

    <!-- Footer Segment Area Start -->
    <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Segment Area End -->
    <script src="JS/main.js"></script>
</body>

</html>