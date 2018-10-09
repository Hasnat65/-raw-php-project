<?php
require_once "index.php";
?>
<title>books</title>
<?php
require_once "pdo.php";
if(isset($_SESSION['msg']))
{
  echo $_SESSION['msg'];
}

//unset($_SESSION['msg']);

 $stmt=$pdo->query("SELECT  image,price,title,address,phone,date FROM myadd where catagory='books' order by date  desc limit 20");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {?>
        <div class="container"><div class="row product">
            <div class="col-md-5 col-md-offset-0"><img class="img-responsive" src="<?php echo  $row['image'];?>"></div>
            <div class="col-md-7">
                <h2>Product Tittle</h2>
                <p><?php echo $row['date']."<br>";?>Dtails:<?php echo $row ['title']?> </p>
                <h3>Price:<?php echo $row['price'];?> tk </h3>
            </div>
        </div>
        <div class="page-header">
            <h3>My Address:</h3></div>
        <p><?php echo $row['address'];?> </p>

        <div class="page-header">
            <h4>Contact Number:</h4><p><?php  echo $row['phone'];?></p>
            <!-- <strong>Your Comments</strong><br>
            <textarea name="comments" id="ta" cols="36" rows="3"></textarea>
            <button class="btn btn-info" style="float:right">Submit Comment</button></div>
        <div class="media">
            <div class="media-body">
              <h4>user</h4>

      <p>............ </p> -->

  </div>
        </div>
        <div class="media">
            <div class="media-body">


    <!-- <p><span class="reviewer-name"><strong>Hasnat</strong></span><span class="review-date">12 March 2018</span></p> -->
            </div>
        </div>
    </div>


<?php }
?>
<?php
require_once "footer.php";
?>
