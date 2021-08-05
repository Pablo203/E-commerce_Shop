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
<?php
    include('SCRIPT/header.php');
?>
<center> <h1> Login Error!</h1>    
    <?php
        echo 'Credentials given are incorrect - check and log in again!';
    ?>
</center>
<?php
    include('SCRIPT/footer.php');
?>
    <script src="JS/main.js"></script>
</body>

</html>