<?php
//print_r($_GET);
$id_prod = $_GET['ID_PROD'];
$path = 'SCRIPT/ADMIN/MEDIA/';

include('SCRIPT/conn.php');
$query = "SELECT * FROM products WHERE ID_PROD = $id_prod";
$result = mysqli_query($mysqli, $query);
$rows = mysqli_num_rows($result);
while($info = mysqli_fetch_array($result)) {
    echo '
    <!-- Product Area Start -->

    <div class="container main">
        <div class="container product-title">
            <h1>
            '.$info['name_PR'].'
            </h1>
        </div>

        <div class="container slide justify-content-center">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="'.$path.$info['img_PR'].'" alt="product-photo">
                            </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-5 price">
                    <p>
                        <b>Cena:</b>
                        <br>
                        '.$info['price_PR'].'
                    </p>
                    <button class="btn btn-light">Dodaj do koszyka</button>

                    <button class="btn btn-light plus" onclick="amount_minus()">-</button>
                    <button class="btn btn-light" id="amount" disabled></button>
                    <button class="btn btn-light" onclick="amount_plus()">+</button>
                    <br><br>
                    <button class="btn btn-light last">Kup teraz</button>

                </div>
                <div class="col-2"></div>
                <div class="col-5 shipment">
                    <p>
                        <p class="deliver">
                            Sposób dostawy:<br>
                        </p>
                        <p class="deliver">
                            Czas dostawy:<br>
                        </p>
                        <p class="deliver">
                            Koszt dostawy:<br>
                        </p>
                    </p>
                </div>
            </div>
        </div>

        <div class="container main">
            Opis produktu:
        </div>
    </div>

    <!-- Product Area End -->
    ';
}
/*



$resultset=array(); 
// Associative array 
while($row=mysqli_fetch_assoc($result)) 
{ 
  $resultset[]=$row; 
} 
//print_r($resultset); 
// Free result set 
mysqli_free_result($result);
mysqli_close($mysqli);
*/
?>
