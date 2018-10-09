


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
  <style>
img{
  width:180px;
  height: 160px;
  margin-left: 200px;
  margin-right: 40px;
}
p{margin-left: 50px}
.vl{
    border: 6px solid green;
    height: 50px;
}hr {
    border: none;
    height: 2px;
    /* Set the hr color */
    color: #orange; /* old IE */
    background-color: pink; /* Modern Browsers */
}
.color{
  background-color: rgb(173, 167, 150);
  color:  rgb(173, 32, 34);
  font-size:24px;
  font-weight:bolt;
  border:2px solid rgb(124, 141, 13);
  border-radius:20px;
}
.color h4{
  color: blue;}
  .margin{
    text-align:center;
    background-color:rgb(220, 195, 119);
  }
  .button{
    margin-left: 200px;
  }
  h3{text-align:  center;
  color:pink;
  font-weight: lighter;

}
  </style>

</head>

<body>

<?php require_once 'index.php';
 require_once 'bootstrap.php';
 //require_once 'pdo.php';
 //unset($_SESSION['record']);}
 ?>
<div class="container color">
    <?php
       $id=$_GET['id'] ;
      $stmt=$pdo->query("SELECT name,email,password1 FROM user_table where id=$id");

echo "<table class='table'>";
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>";
            echo "<h4>Name: </h4>".($row['name']);
            echo ("</td><td>");
            echo "<h4>Email: </h4>".($row['email']);
            echo ("</td><td>");
            echo "<h4>Password: </h4>".($row['password1']);
            echo ("</td></tr>");

        }
       echo "</table>";
       ?>
</div>


<div class="container">
  <div class="row">
    <div class="col">
<?php
$stmt=$pdo->query("SELECT image,title,ad_id FROM myadd where user_id=$id");
echo "<h4 class=margin".">YOUR ADDS..........</h4>"."<br>"."<hr>";?>
<div class="v1"><div>
  <hr size="30">
  <script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>
<?php


  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
   /// if($row===false) echo "You have no adds";
  echo "<img src=".$row['image'].">"." ";
      echo " <p style='margin-left: 200px;'>".$row['title']."</p>";

    echo('<a href="delete.php?ad_id='.$row['ad_id'].'&table_name='."books".'">.<br>.<button class="btn btn-outline-success " margin-left: 200px; Onclick="return ConfirmDelete();" type="submit">DELETE</button></a><br><br>');
  }if($row==false){
    echo "<h3> You have no adds</h3>";
  }

    ?>
</div>
</div>

<?php

require_once "footer.php";

?>
</body></html>
