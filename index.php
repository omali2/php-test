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
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
echo "<br><br><br><br>dbuser=$dbuser pass=$dbpwd dbname=$dbname";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<br><br><br><br>My awesome PHP test";
$query = "show databases";
$rs = $connection->query($query);
while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    //echo $row['user_id'] . " " . $row['username'] . "\n";
    echo $row "\n";
}
$rs->close();
$connection->close();
?>
