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
    <div class="container d-flex justify-content-end">
        <button class="btn btn-light" onclick="languagepl()">
            pl
        </button>
        <button class="btn btn-light" onclick="languageen()">
            en
        </button>
    </div>
    <div class="jumbotron-fluid head sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" style="width: 15%;" href="index.html">
                <img class="img-fluid" src="IMG/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <form class="form-inline">
                        <div class="col-sm-3 col-lg-12">
                            <input type="search" class="form-control" name="search" placeholder="Szukaj" style="width: 70%; float: left;">
                            <button type="submit" class="btn btn-light justify-content-center" style="float: left;"
                                id="search-button">&#x1F50D;</button>
                        </div>
                    </form>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <a class="navbar-brand">
                        <img class="img-fluid" href="index.html" src="IMG/cart.png" alt="Something went wrong">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="log.html" style="color: #FFFFFF;">
                            <h3 id="log">
                                Logowanie / <br>
                                Rejestracja
                            </h3>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Nav Menu Area End -->


    <!-- Nav Menu Area Start  flex-row-reverse-->
    <center> <h1> Login Success</h1> </center>    
    <?php
    session_start();
    // print_r($_SESSION);
    if(isset($_SESSION['user'])) {
       echo 'Found one user called ' . '<b>' . $_SESSION['user'] . '</b>';
    }
    ?>
    <!-- Main Segment Area End -->

    <!-- Footer Segment Area Start -->
    <footer class="jumbotron-fluid footer">
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <form>
                    <div class="form-group">
                        <p class="footer-text">
                            <div class="col-sm-6 col-lg-12">
                                <label for="footer-email">Adres Email</label>
                                <input type="email" class="form-control" id="footer-email" placeholder="Adres Email"
                                    size="20">
                            </div>

                            <div class="col-lg-6 col-lg-12">
                                <label for="exampleFormControlTextarea1">Wiadomość</label>
                                <textarea class="form-control textarea" id="exampleFormControlTextarea1" rows="5"
                                    cols="3" size="20"></textarea>
                            </div>
                            <div class="col-lg-6 col-lg-12">
                                <button type="submit" class="btn btn-light justify-content-center">Wyślij</button>
                            </div>
                        </p>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-sm-2 col-xs-2"></div>
            <div class="col-lg-4 col-sm-9 col-xs-9">
                <p class="footer-text">
                    <div class="col-sm-6">
                        Kontakt z nami:<br><br>
                        <b>Email:</b><br>
                        example@gmail.com<br>
                        <b>Telefon:</b><br>
                        +48 912 912 912<br>
                        <b>Adres:</b><br>
                        Ul. Polna 12 44-928
                    </div>
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Segment Area End -->
    <script src="JS/main.js"></script>
</body>

</html>