<?php
require_once "index.php";
?>
 <title>home</title>

<?php

require_once "pdo.php";
if(isset($_SESSION['msg']))
{
  echo $_SESSION['msg'];
}

$add =$pdo->query("SELECT  ad_id FROM myadd  ");

while ( $rows = $add ->fetch(PDO::FETCH_ASSOC) ){
$add_id=$rows['ad_id'];
}


//unset($_SESSION['msg']);
$i=0;
$limit=20;
$stmt=$pdo->query("SELECT  image,price,title,address,phone,date FROM myadd   order by date  desc  limit $limit");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) { $i++;?>
        <div class="container"><div class="row product">
            <div class="col-md-5 col-md-offset-0"><img class="img-responsive" src="<?php echo  $row['image'];?>"></div>
            <div class="col-md-7">
                <h3>Product Tittle</h3>
                <p style=" color:maroon"><?php echo $row['date']."<br>";?></p><p>Dtails:<?php echo $row ['title']?> </p>
                <h4>Price:<?php echo $row['price'];?> tk </h4>
            </div>
        </div>
        <div class="page-header">
            <h4>My Address:</h4></div>
        <p><?php echo $row['address'];?> </p>

        <div class="page-header">
            <h4>Contact Number:</h4><p><?php  echo $row['phone'];?></p>
            <!-- <strong>Your Comments</strong><br> -->

        <!-- <form method='post'  action="comment.php?c_id=/>">
             <textarea    type="text" rows='3' cols="44" name="cmnt"   ></textarea>
            <button class="btn btn-info" type='submit' style="float:right">Submit Comment</button></div>
          </form> -->
        <div class="media">
            <div class="media-body">



  </div>
        </div>
        <div class="media">
            <div class="media-body">


    <!-- <p><span class="reviewer-name"><strong>Hasnat</strong></span><span class="review-date">12 March 2018</span></p> -->
            </div>
        </div>
    </div>


<?php
    }

?>

<?php

if($i==$limit){


}
 ?>





 <?php

require_once "footer.php";
?>
