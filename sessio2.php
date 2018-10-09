<?php
session_start();
if(isset($_SESSION['hi']))
echo $_SESSION['hi'];
$number=1503065;
function count_digit($number) {

    return strlen((string) $number);
   

} echo "legnth:".count_digit($number);
?>
<html>
<body>
 
</body></html>