
<?php
require_once 'index.php';
require_once 'bootstrap.php';
require_once 'pdo.php';
          $id=$_GET['id'] ;
      $stmt=$pdo->query("SELECT name,email,password1 FROM user_table where id=$id");
if(isset( $_SESSION['cmt'])) echo  "<p>".$_SESSION['cmt']."<p>";

        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

            $name = htmlentities($row['name']);
$p = htmlentities($row['password1']);

        }

       ?>
<script>
function f()
    {
      var x = confirm("Are you sure you want to update?");
      if (x)
          return true;
      else
        return false;
    }
</script>
       <!DOCTYPE html>
<html lang="en">
<head>

    <title>Setting</title>
    <style>
    h4{
color:red;

    }
    p{
color:green;
text-align:center;

    }
    a{

    }
    h3,labeel{
        color:#214CEB;
    }</style>
</head>
<body>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <div class="container">
   <h3>Change Username or Password:</h3>
   <form action="  " method="post">
          <div class="form-group">

          <label for="newname">Username:</label>
          <input class="form-control" type="text" name="newname"    value="<?=$_SESSION['name'] ?>">
          </div>
          <div class="form-group">
          <label for='newp'>Password:</label>
          <input class="form-control"  type="text" name="newp"   value="<?=$p ?>" ></div>
          <button onclick="f() "; class="btn btn-warning" type="submit" name="update"> Update</button>

         <a name='cancel' type=" "   href="home.php" >Back</a> </div>
          </form>


          </div>
        </body>
</html>
<?php

 if (isset($_POST['newname']) && isset($_POST['newp']) && isset($_POST['update']))
 {
    $sql="UPDATE user_table SET name=:newname,password1=:newp,password2 = :newp WHERE  id= :id ";


   $ln=strlen($_POST['newp']);
    if($ln>5 )  {
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute(array(':newname' => $_POST['newname'],':id'=>$_GET['id'], ':newp' => $_POST['newp']));
        $_SESSION['name']= $_POST['newname'];

return;
    }
    elseif($ln<5)
     $_SESSION['p']= "Password shoulde be more than 6 charecter!!!!!!!";
}


/*if(isset($_POST['back']))
{
    header('location:home.php');

} */

?>
