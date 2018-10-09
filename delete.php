<?php
require_once "pdo.php";
session_start();
$stmt=$pdo->query("SELECT  id,name FROM user_table ");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
   $id=$row['id'];
   $name=$row['name'];


}
//$table=$_GET['table_name'];
if (isset($_GET['ad_id']) ) {
    $sql = "DELETE FROM  myadd WHERE ad_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_GET['ad_id']));
    $_SESSION['delete'] = 'Record deleted';
    //header( 'Location: profile.php') ;
    header("location:profile.php?id=$id");
    return;
}
else echo "failed to delete?";
?>
