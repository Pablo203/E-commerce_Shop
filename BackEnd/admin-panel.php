<!DOCTYPE html>
<html>
<?php
include('SCRIPT/conn.php');
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
    <link rel="stylesheet" href="SCSS/admin_panel.css">
</head>

<body>
    <header class="container-fluid header">
        <div class="page-title">
            <img class="logo" alt="Something went wrong" src="IMG/logo.png">
        </div>
    </header>
    <div class="row">
        <div class="col-2 side-menu">
            <div class="logged-user-area">
                <div class="logged-user-photo-area">
                    <div class="logged-user-photo">
                        <img class="user-photo" src="IMG/user_photo.png" alt="Something went wrong">
                    </div>
                </div>
                <div class="logged-user-name-area">
                    <div class="logged-user-name">
                        Paweł Rosa
                    </div>
                </div>
                <div class="logged-user-deegre-area">
                    <div class="logged-user-deegre">
                        Engineer
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 statistic-area">
            <div class="row">
                <div class="col-12 ">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-block">
                                <form method="POST" action="SCRIPT/AdminPanelControls.php">
                                    <div class="form-options">
                                        <input class="form-option" type="radio" id="add" name="admin-add-content" value="add">
                                        <label class="option-text" for="add">Add</label>
                                        <input class="form-option" type="radio" id="remove" name="admin-remove-content" value="remove">
                                        <label for="remove" class="option-text" >Remove</label>
                                        <input class="form-option" type="radio" id="show" name="admin-show-content" value="show">
                                        <label for="show" class="option-text" >Show</label>
                                    </div>
                                    <input type="text" class="form-text">
                                    <input type="admin-submit" class="form-btn" value="Znajdź">
                                </form>
                                <?php
                                if(isset($_POST['admin-add-content']) AND isset($_POST['admin-submit'])) {
                                    $query = "SELECT ";
                                    $result = mysqli_query($mysqli, $query);
                                    $info = mysqli_fetch_array($result);
                                }

                                ?>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="search-output">
                                <table>
                                    <div>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Surname
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                        </tr>
                                    </div>
                                    <div>
                                        <tr>
                                            <th>
                                                1
                                            </th>
                                            <th>
                                                Paweł
                                            </th>
                                            <th>
                                                Rosa
                                            </th>
                                            <th>
                                                pawlix12412@gmail.com
                                            </th>
                                        </tr>
                                    </div>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bottom-part">
                <div class="col-6 bottom-block">
                    <p class="chart-title">Sprzedaż w ostatnich dwóch kwartałach</p>
                    <div class="chart" id="chartDivFirst"></div>
                </div>
                <div class="col-6 bottom-block">
                    <p class="chart-title">Sprzedaż przez ostatnie 6 miesięcy</p>
                    <div class="chart" id="chartDivSecond"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jscharting.com/2.9.0/jscharting.js"></script>
    <script src="JS/chart.js"></script>
</body>

</html>