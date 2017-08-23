<?php
$dbhost = "172.30.89.192";
$dbport = "3306";
$dbuser = "root";
$dbpwd = "omali";
$dbname = "saeid";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "Name  Alte <BR>";
echo "----------------------------------------<br>";
$query = "SELECT * from costumer";
$rs = $connection->query($query);
while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    echo $row['name'] . " " . $row['age'] . "\n <BR>";
}
$rs->close();
$connection->close();
?>
