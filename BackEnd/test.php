<?php
include('SCRIPT/conn.php');
$product = filter_var("test", FILTER_SANITIZE_STRING);
$query = "SELECT * FROM products WHERE name_PR LIKE '%$product%'";
//echo $query = "SELECT ID_PROD, name_PR, price_PR, desc_PR, img_PR, cat_PR FROM products WHERE name_PR LIKE '%$product%'";
$result = mysqli_query($mysqli, $query);
$info = mysqli_fetch_array($result);
$rows = mysqli_num_rows($result);

for($x = 0; $x < $rows; $x++) {
    echo '        <!--Product Position Area Start-->
    <div class="row">
        <div class="col-4"></div>
        <div class="col-8 position">
            <div class="row">

                <div class="col-6">
                    <div class="photo-position">
                        <img class="img-fluid" src="IMG/jam-jar.jpg">
                    </div>
                </div>
                <a href="#">
                    <div class="col-6">
                        <br>
                        <p>
                            <b>
                                Produkt 3
                            </b>
                        </p><br>
                        <p>
                            127<sup>99</sup>zł
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--Product Position Area End--><br><br><br>';
}


?>