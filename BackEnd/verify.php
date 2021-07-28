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
<center> <h1> Verify Email!</h1> </center>    
    <?php
    include('SCRIPT/conn.php'); 
    print_r($_GET);       
    if(isset($_GET['email']) AND isset($_GET['code'])){
        // Verify data
        $email = $_GET['email']; // Set email variable
        $VerCode = $_GET['code']; // Set hash variable           
        $query = "SELECT email_US, VerCode_US, confirmed_US FROM users WHERE email_US = '$email' AND VerCode_US = '$VerCode' AND confirmed_US = 0";
        $result = mysqli_query($mysqli, $query);
        if($result == 1){
            // We have a match, activate the account
            $query = "UPDATE users SET confirmed_US = 1 WHERE email_US = '$email' AND VerCode_US = '$VerCode' AND confirmed_US = 0";
            $result = mysqli_query($mysqli, $query);
            header('Location: log.php');
        } else {
            // No match -> invalid url or account has already been activated.
            echo '<b>Link uzyty lub konto juz zostalo aktywowane</b>';
        }
                  
    } else {
        // Invalid approach
        echo '<b>Url nie jest poprawny, uzyj linku z twojego emaila!</b>';
    }
    ?>
<?php
    include('SCRIPT/footer.php');
?>
    <script src="JS/main.js"></script>
</body>

</html>