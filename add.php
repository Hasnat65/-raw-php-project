<?php
 require_once "bootstrap.php";
require_once "pdo.php";
$stmt=$pdo->query("SELECT  id,name FROM user_table ");
date_default_timezone_set("Asia/Dhaka");
 $time=date('Y-m-d H:i:s');
 //echo $time;
if(isset($_POST['back'])) header("location:home.php");
 
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
   $id=$row['id'];
   $name=$row['name'];


}
?>
<html  >
    <title>        add    </title>
    <head><style>
    a{
        font-size:20px;
        font-weight:bold;
        color:red;

     
    }
    </style></head>
    <body>
   <div class="container">
        <form  method="post" action="action.php?id=<?php echo $id;?>" enctype="multipart/form-data">
        <div class="form-group">
       <label for="image">Choose image:</label>
      <input type="file" name="image"   required > </div>

      <select name="select" id="" >
      <option  value="">Choose a Catagory</option>
      <option value="books">Books</option>
      <option value="furniture">Furniture</option>
      <option value="musical">Musical Instruments</option>
      <option value="tickets">Tickets</option>
      <option value="eee">Electric Devices</option>
          <option value="others">Others</option>
  </select>

          <div class="form-group">
       <label for="">Product title:</label>
              <textarea  class="form-control"  type="text" rows='3' cols="19" name="title"   required></textarea> </div>
       <div class="form-group">
       <label for="">Price:</label>
      <input  class="form-control" type="number" name="price" required> </div>
       <div class="form-group">
       <label for="">Address(hall name,room no if available):</label>
      <input  class="form-control" type="text" name="address" required> </div>
      <div class="form-group">
       <label for="">Contact Number:</label>
      <input  class="form-control" type="text"  name="phone" required> </div>
      <input   type="hidden"  name="date" value="<?=$time ?>"> 
      <button  class="btn btn-success" type="submit" name="submit"  >OK</button>
 
      <a href="home.php">cancel</a>
</form>

   </div>
</body>
 </html>
