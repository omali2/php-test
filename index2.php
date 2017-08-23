<?php

// Create a 55x30 image
//$im = imagecreatetruecolor(200, 200);
//$white = imagecolorallocate($im, 255, 255, 255);
//$blue = imagecolorallocate($im, 0, 0, 255);
//$green = imagecolorallocate($im, 0, 255, 0);
/// Draw a filled rectangle
//imagefilledrectangle($im, 0, 0, 199, 199, $blue);
///imagefilledrectangle($im, 0, 0, 199, 199, $green);
/// Save the image
//header('Content-Type: image/png');
//imagePNG($im);
//imagedestroy($im);

echo "Hallo Saeid vom Server = ".gethostname()

//$dbhost = getenv("MYSQL_SERVICE_HOST");
//$dbport = getenv("MYSQL_SERVICE_PORT");
//$dbuser = getenv("MYSQL_USER");
//$dbpwd = getenv("MYSQL_PASSWORD");
//$dbname = getenv("MYSQL_DATABASE");

$dbhost = "172.30.89.192";
$dbport = "3306";
$dbuser = "root";
$dbpwd = "omali";
$dbname = "saeid";
$dbtable= "customer"

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<B> Name  Alte <br>";
echo "------------------------------------<BR>";
$query = "SELECT * from customer";
$rs = $connection->query($query);
while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    echo $row['name'] . " " . $row['age'] . "\n";
}
$rs->close();
$connection->close();

?>
