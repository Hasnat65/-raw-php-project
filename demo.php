 
<?php  require_once "bootstrap.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script></head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>demo</title>
  <style>
  body{
    background-color:#DCDDDE;
    font-family:fantasy;
    
  }
  </style>
</head>
<body>
<div style="text-align:center;padding:1em 0;">
 <h3><a style="text-decoration:none;"
  href="https://www.zeitverschiebung.net/en/timezone/asia--dhaka">
  <span style="color:gray;">Current local time in</span><br />Asia/Dhaka</a></h3> 
  <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FDhaka" width="100%" height="115" frameborder="0" seamless></iframe> </div>
  
  <h1 style="text-align:center">Welcome Hasnat</h1>
  <h3 style="text-align:center">
  <?php
  

date_default_timezone_set("Asia/Dhaka");
 $time=date('Y-m-d H:i:s');
 echo $time;
 echo '</br>';
$i= rand(1,6);
if($i==1)echo "books";
if($i==2)echo "ticket";
if($i==3)echo "others";
if($i==4)echo "eee";
if($i==5)echo "musical";
if($i==6)echo "furniture";



  
?></h3>
<button class="btn btn-primary btn-lg">info</button>
</body>
</html>
