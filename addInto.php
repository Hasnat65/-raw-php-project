<?php

  $pdo = new PDO("mysql:host=localhost;dbname=userdata", 'root','');
   // set the PDO error mode to exception
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['p1']) &&
 isset($_POST['p2']))
 {
  $sql='INSERT INTO user_table (name,email,password1,password2)
  VALUSE(:name,:email,:password1,:password2)';
  $stmt=$pdo->prepare($sql);
  $stmt->execute(array(':name' =>$_POST['name'] ,
                          ':email' =>$_POST['email'] ,
                          ':password1' =>$_POST['p1'],  ':password2' =>$_POST['p2'] ));


echo "Succefully added"."<br>";
}

else "Failed ,try again please.";
 
 ?>
