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


    <!-- Nav Menu Area Start  flex-row-reverse-->
    <center> <h1> Verify Error! - User not verified</h1> </center>    
    <?php
    session_start();
    // print_r($_SESSION);
    if(isset($_SESSION['user'])) {
       echo 'User ' . '<b>' . $_SESSION['user'] . '</b> user is not verified';
    }
    ?>
    <!-- Main Segment Area End -->

    <!-- Footer Segment Area Start -->
    <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Segment Area End -->
    <script src="JS/main.js"></script>
</body>

</html>