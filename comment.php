<?php
session_start();
require_once "pdo.php";
if(isset($_SESSION['name']))
{
  echo $_SESSION['name'];
}
$user=$_SESSION['name'];
$id=$_GET['id'];
$sql = "INSERT INTO commentbox (username,comments,date )
VALUES (:user,:date,:comments )";
echo("<pre>\n".$sql."\n</pre>\n");
$stmt=$pdo->prepare($sql);
$stmt->execute(array( ':user' =>$_SESSION['name'],
                     ':comments' =>$_POST['comments']));
                     $add =$pdo->query("SELECT  ad_id FROM myadd  ");

                     while ( $rows = $add ->fetch(PDO::FETCH_ASSOC) ){
                echo $rows['ad_id'];
                     }
?>
