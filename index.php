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
//?>
<?php
echo "Hallo Saeid vom Server = ".gethostname()
?>
<?php
//$dbhost = getenv("MYSQL_SERVICE_HOST");
//$dbport = getenv("MYSQL_SERVICE_PORT");
//$dbuser = getenv("MYSQL_USER");
//$dbpwd = getenv("MYSQL_PASSWORD");
//$dbname = getenv("MYSQL_DATABASE");

$dbhost = "172.30.89.192                                                                                                                                                                         
$dbport = "3306";                                                                                                                                                                                   
$dbuser = "saeid";                                                                                                                                                                                  
$dbpwd = "omali";                                                                                                                                                                                   
$dbname = "saeid-db";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<br>-----------------------------------------------------------------<br>";
echo "productID" . "\t" . "productCode" . "\t" . "quantity" . "\t" . "price" . "\n <br>";
$query = "select * from customer";
$rs = $connection->query($query);
echo 'Name' . "\t" . 'Alte' . "\n";
echo "-----------------------------------------\n";
while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    echo $row['name'] . "\t" . $row['age'] . "\n";
    //echo $row['productID'] . "\t" . $row['productCode'] . "\t" . $row['quantity'] . "\t" . $row['price'] . "\n <br>";
}
$rs->close();
$connection->close();
?>
