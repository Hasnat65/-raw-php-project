<?php
require_once "pdo.php";
 require_once "bootstrap.php";
session_start();

//unset($_SESSION['msg']);

 $stmt=$pdo->query("SELECT  id,name FROM user_table ");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    $id=$row['id'];
    $name=$row['name'];


}
if(!isset($_SESSION['name'])){$id=$row['id']=0;}      ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script></head>
  <script src="assets/js/jquery.min.js"></script>
    <style>
        .margin{text-align:center; }
         .navv{
            margin-top:5px;
         }

    </style>
</head>
<body>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
             <div class="navbar-header" style="margin-top:10px"><a class="navbar-brand navbar-link" href="home.php"><span  style="color:green;font-weight:bold"; class="fa fa-home" >HOME</a>
             <div  class="navbar-header"><a class="navbar-brand navbar-link" href="https://www.facebook.com/groups/397884516890187/"><span style="color:blue"; class="fa fa-facebook-official" ></span>COMMON ROOM </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            </div>
         <div class="collapse navbar-collapse "  id="navcol-1">
                <ul class="nav navbar-nav ">

                    <li role="presentation fixed" style="margin-top:10px"><a href="#">Top Sellers</a></li>
                    <li role="presentation" style="margin-top:10px"><a href="#">Blog</a></li>
                    <li role="presentation">  <div class="dropdown" >
 <?php $myname="profile"; if(isset($_SESSION['name'])){ $myname=" ".$_SESSION['name'] ;
 echo ' <button class="btn btn-info btn-md dropdown-toggle" style="margin-top: 18px"  data-toggle="dropdown">'.' '.$myname.'<span class="caret"></span></button>';}?>

                   <ul class="dropdown-menu dropdown-menu-right" >
                   <?php if(!isset($_SESSION['name'])) //echo '<li style="margin-top:10px"><a href="login.php">login</a></li>';?>
                       <li style="margin-top:10px"><a href="add.php?id=<?php echo $id; ?>"> Give Add</a></li>
                 <li><a href="profile.php?id=<?php echo $id; ?>"> View Profile</a></li>
                        <li><a href="logout.php"><?php if(isset($_SESSION['name'])) echo "Logout ";?></a></li>
                        <li><a href="settings.php?id=<?php echo $id; ?>"><?php if(isset($_SESSION['name'])) echo "Settings";?></a></li>
                   </ul>
               </div>
               <li role="presentation" style="margin-top:10px"><a href=" "><?php if(isset($_SESSION['name'])) echo " ";
  else
  echo '<li style="margin-top:10px"><a href="login.php"><span class= ""> </span>'." ". 'Login</a></li>';
  if(!isset($_SESSION['name'])) echo '<li style="margin-top:10px"><a href="signup.php">Signup</a></li>';
  ?></a></li></li>
                </ul>


            </div>
        </div>
    </nav>
    <ol class="breadcrumb margin">
        <li class=" "><a href="books.php"><span>Books</span></a></li>

             <li><a href="music.php"><span>Musical Instruments</span></a></li>
                  <li><a href="furniture.php"><span>Furniture</span></a></li>
             <li><a href="eee.php"><span>Electric Devices</span></a></li>
                          <li><a href="ticket.php"><span>Tickets</span></a></li>

        <li><a href="others.php"><span>Others</span></a></li>
    </ol>

</body>
 </body>
 </html>
