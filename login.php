<?php
$pdo = new PDO("mysql:host=localhost;dbname=userdata", 'root','');
 // set the PDO error mode to exception
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();


if ( isset($_POST['name']) && isset($_POST['password'])  ) {
    unset($_SESSION['name']);
    $name= $_POST['name'];
    $_SESSION['name']= $_POST['name'];
    $p = $_POST['password'];

 $sql = "SELECT name FROM user_table
       WHERE name = '$name'
       AND password2 = '$p'";

    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ( $row === FALSE ) {
      $_SESSION['error']='<h2 style="color:red">Login failed! try again.</h2> ';
      header("location:login.php");
      return;
    } else {
      header("location:home.php");

        return;

    }
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
h2{
 color:red;
}
</style>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">

  <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
  <body>
    <div class="container">
      <header>
        <h3>Login To Account
        </h3>
        <?php
if ( isset($_SESSION["error"]) ) {
    echo('<p   style="color:red">'.$_SESSION["error"]."</p> ");
    unset($_SESSION["error"]);
}
?>
      </header>
      <form method="post">
        <div class="form-group">
       <label for="">Username:</label>
      <input class="form-control" type="text" name="name" required  > </div>
          <div class="form-group">
       <label for="">Password:</label>
      <input  class="form-control" type="password" name="password" required> </div>
      <button  class="btn btn-danger" type="submit" name="submit"  >Login</button>
      <p><i>Not a member?</i><a href="signup.php">Sign Up</a></p>

</form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    </body>
</html>
