<?php
$dbServername="studmysql01.fhict.local";
$dbUsername="dbi414237";
$dbPassword="TempPass18";
$dbName="dbi414237";

//localhost version(for development purposes)
/*<?php
$dbServername="localhost";
$dbUsername="root";
$dbServername="";
$dbName="dbi414237";

$conn=mysqli_connect($dbServername, $dbUsername, $dbServername, $dbName);
*/

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
