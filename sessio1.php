<?php
$pdo = new PDO("mysql:host=localhost;dbname=userdata", 'root','');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($pdo)  echo 'connected';



require_once 'bootstrap.php';
require_once 'pdo.php';
$stmt=$pdo->query("SELECT * FROM user_table where 1");

echo "<table  border='1'>."."<br>";
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>";
    echo ($row['name']);
    echo ("</td><td>");
    echo ($row['email']);
    echo ("</td><td>");
    echo ($row['password1']);
    echo ("</td></tr>");
}echo "<table  border='1'>."."<br>";
?>
