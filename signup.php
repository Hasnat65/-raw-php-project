<script>
  function ConfirmDelete()
  {
    var x = confirm("<h4>Password Don.t match</h4>");
    if (x)
        return true;
    else
      return false;
  }
</script>

  <?php
  $pdo = new PDO("mysql:host=localhost;dbname=userdata", 'root','');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  require_once 'bootstrap.php';
  require_once 'pdo.php';

  //function declaration
session_start();
$_SESSION["psw"]="Password must have atleast 6 charecter"."<br>";
$_SESSION["err"]="Password Does't match";
  function count_digit($number) {

      return strlen((string) $number);
  }

  //function call

  $number="2222222222222";
  $number_of_digits = count_digit($number); //this is call :)



  if(isset($_POST['name']) && isset($_POST['mail'])   && isset($_POST['pass1']) &&
   isset($_POST['pass2'])) {

     unset($_SESSION['name']);
     $pass1=$_POST['pass1'];
     $pass2=$_POST['pass2'];
     $_SESSION['name']=$_POST['name'];
     $number_of_digits = count_digit($_POST['pass1']);

     if ($pass1 !== $pass2 ) {
      echo('<h4 style="color:red">'.$_SESSION["err"]."</h4>\n");



  } if ($number_of_digits < 6) {
    echo('<h4 style="color:red">'.$_SESSION["psw"]."</h4>\n");
 // header('location:signup.php');

     unset($_SESSION['psw']);


}


      if (!empty($_POST['pass1']) && !empty($_POST['pass2']) && $number_of_digits > 5 && (($_POST['pass1']) === ($_POST['pass2'])))
       {
  $email=$_POST['mail'];
      //  echo $email;
           $duplicate = $pdo->query("SELECT * FROM user_table where email='$email' " );
           //$duplicate->execute(array( $email => $_POST['mail']));
            $count=0;
             while($rows=$duplicate->fetch(PDO::FETCH_ASSOC)){
           $count++;
           //echo $rows['email'];

         }



if($count<1){
        $sql = "INSERT INTO user_table (name,email,password1,password2)
  VALUES (:name,:email,:password1,:password2)";
        $stmnt = $pdo->prepare($sql);
        $stmnt->execute(array(':name' => $_POST['name'], ':email' => $_POST['mail'],
            ':password1' => $_POST['pass1'], ':password2' => $_POST['pass2']));

            $_SESSION['name']= $_POST['name'];
            $number = ($_POST['pass1']);
            header('location:home.php');
              return;
}else echo "<p class='email'>Email already in use ! Try Another One</p>";
      }


     }
   ?>


   <!DOCTYPE html>
   <html>

   <head>
       <meta charset="utf-8">

       <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>signup account</title>
    <style>
    h4{
      color:RED;
      margin-left:40%;
    margin-top:30px;
    }
  .email{
text-align: center;
font-size: 30px;
color: orange;

font-family: serif;
font-weight: bold;
}</style>

   </head>
  <body>  <div style="margin-top:60px;" class="container">

          <header>

              <h3>SignUp Your Account
              </h3><br><br>
          </header>
      <form  method="post">
          <div class="form-group">

          <label for="name">Username:</label>
          <input class="form-control" type="text" name="name"   required  value="">
          </div>
          <div class="form-group">
          <label for='mail'>  E-mail:</label>
          <input class="form-control"  type="text" name="mail" required ></div>
<div class="form-group">
          <label>password:</label>
          <input class="form-control" type="password" name="pass1" required placeholder="atleast 6 charecters:"></div>
                <div class="form-group">
                 <label>Confirm password:</label>
          <input  class="form-control " type="password" name="pass2" required placeholder="re-enter" value="">
              </div>
          <button   type="submit" name='submit' class="btn btn-danger"  >Submit</button>
          <p><i>Already a member?</i><a href="login.php">Log in</a></p>
      </form>



   </body>
  </html>
