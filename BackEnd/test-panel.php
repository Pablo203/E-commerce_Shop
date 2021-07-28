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
    <form method="GET" action="test-panel.php">
        <input class="form-option" type="radio" id="add" name="admin-select-table" value="categories">
        <label class="option-text" for="select">categories</label><br>
        <input class="form-option" type="radio" id="add" name="admin-select-table" value="products">
        <label class="option-text" for="select">products</label><br>
        <input class="form-option" type="radio" id="add" name="admin-select-table" value="users">
        <label class="option-text" for="select">users</label><br>
    <br>
    <input type="submit" class="btn btn-light" name="AdminConfirmSelect">
    </form>
    <?php
    $db_operation_buttons = '
    <form method="POST" action="SCRIPT/AdminPanelControls.php">
    <p>podaj email/id produktu/id kategorii:
    <input type="text" class="form-text" name="admin-db-lookup"><br>
    <input type="submit" class="btn btn-light" value="Edytuj" name="admin-controls-edit">
    </form>';

    $table_select = $_GET['admin-select-table'];
    session_destroy();
    session_start();
    $_SESSION['table'] = $table_select;
    if(isset($_GET['AdminConfirmSelect'])) {
        echo $db_operation_buttons;
    } else {
        //echo 'admin-select-table not set';
    }

    ?>
    <!-- Footer Segment Area Start -->
    <?php
    include('SCRIPT/footer.php');
    ?>
    <!-- Footer Segment Area End -->
</body>

</html>