<?php
// Define database variables

//localhost:
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sistema";

//$mysqli = new mysqli("localhost", "root", "", "sistema");
$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

/* check connection */
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}  else {
    //echo "<i>connection-ok</i><br />";
}


// return name of current default database
/*
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf(" <br /> Default database is %s.\n", $row[0]);
    $result->close();
}
*/
?>