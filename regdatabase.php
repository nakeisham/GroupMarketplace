<?php

$hostName = "localhost";
$dbUser = "njm55_groupuser";
$dbPassword = "Jj?CPYz!6Op5";
$dbName = "njm55_GroupMarketplace";
$conn = mysqli_connect( $hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>