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
    <link rel="stylesheet" href="SCSS/log.css">
</head>

<body>
    <!-- Nav Menu Area Start -->
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
        <a class="navbar-brand" style="width: 15%;" href="http://localhost/sistema/index.php">
            <img class="img-fluid" src="IMG/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline" method="GET" action="SCRIPT/general-search.php" >
                    <div class="col-sm-3 col-lg-12">
                        <input type="search" class="form-control" name="search" placeholder="Czego szukasz?" style="width: 70%; float: left;">
                        <button type="submit" class="btn btn-light justify-content-center" name="submit" style="float: left;"
                            id="search-button">&#x1F50D;</button>
                    </div>
                </form>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a class="navbar-brand">
                    <img class="img-fluid" href="http://localhost/sistema/index.php" src="IMG/cart.png" alt="Something went wrong">
                </a>
            </ul>
        </div>
    </nav>
</div>
<!-- Nav Menu Area End -->

<?php
session_start();
echo '<center><h1>Witaj <b>'. $_SESSION['user']. '!</b></h1><br><p>(User ID: '.$_SESSION['UserID'].')</p></center>';
//print_r($_SESSION);
//$_SESSION['email'];
?>
<br><br>
<center><h4>Wyloguj się!</h4>
<form method="POST" action="SCRIPT/logout.php">
    <input type="submit" class="btn btn-light" value="Wyloguj się!" name="logout">
</form>
</center>

    <!-- Footer Segment Area Start -->
    <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Segment Area End -->
</body>

</html>