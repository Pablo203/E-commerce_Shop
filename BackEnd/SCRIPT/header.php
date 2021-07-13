<?php

echo '
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
';

?>