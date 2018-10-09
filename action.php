 <?php
$pdo = new PDO("mysql:host=localhost;dbname=userdata", 'root','');
 // set the PDO error mode to exception
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id=$_GET['id'];
if ( isset($_POST['title']) &&  isset($_POST['price']) && isset($_POST['phone'])  && isset($_POST['address'])) {
  $id=$_GET['id'] ;
    $image_file=$_FILES['image']['name'];
$path="Images/".$image_file;
$tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($tmp,$path);
    echo "<img src='$path'>";
$select=$_POST['select'];
echo '$select';

  $sql = "INSERT INTO myadd (image,title,price,address,phone,user_id,date,catagory)
           VALUES ( '$path' ,:title,:price,:address,:phone,$id,:date,'$select')";

  echo("<pre>\n".$sql."\n</pre>\n");
$stmt=$pdo->prepare($sql);
$stmt->execute(array( ':price' =>$_POST['price'],
                     ':title' =>$_POST['title'],
                     ':date' =>$_POST['date'],
                     ':phone' =>$_POST['phone'],
                      ':address' =>$_POST['address']));
                      $_SESSION['msg']="Add Included Successfully";
                      header('location:home.php');


}
?>
