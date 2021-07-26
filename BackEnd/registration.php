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
    <?php
    include('SCRIPT/header.php');
    ?>
    <!-- Nav Menu Area End -->
    <div class="row">
        <div class="col-lg-4 col-sm-0"></div>
        <div class="col-lg-3 col-sm-9">
            <div class="login-block header-text-center">

                <br>
                <h1>
                    Zarejestruj się
                </h1>
                <form method="POST" action="SCRIPT/register.php">
                    <div class="login-element"><br>
                        <label for="login">Login:</label><br>
                        <input type="text" id="login" name="user" required><br><br>
                    </div>

                    <div class="login-element">
                        <label for="exampleInputEmail1">Email:</label><br />
                        <input type="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                        id="email" name="email" required><br /><br />
                      </div>

                    <div class="login-element">
                        <label for="password">Hasło:</label><br>
                        <input type="password" id="password" name="pass" required method="POST">
                        <small id="emailHelp" class="form-text text-white" style="color: white;">Twoje hasło będzie znane tylko tobie!</small>
                    </div>
                    <div class="login-element">
                        <br><br>
                        <input type="submit" class="btn btn-light" value="Zarejestruj się" name="register">
                    </div>
                </form>
                <br><br>
                <h6>
                    <a href="log.html">
                        Zaloguj się
                    </a>
                </h6>
            </div>
        </div>
        <div class="col-lg-4 col-sm-2"></div>
    </div>
    <!-- Footer Segment Area Start -->
    <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Segment Area End -->
</body>

</html>