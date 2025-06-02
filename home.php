<?php
session_start();
require_once("header.php");
echo $_SESSION['username'];
require 'db.php';
?>


<div class = " banner-image"> 

<div class = "text"> 
<h2>Step into the spotlight. Register for the experience of a lifetime!
Unite, Learn, and Celebrate — all in one place.</h2>
</div>
</div>


 
<br>
<div class="container text-center">
  <div class="row">
    <?php
$sql = "SELECT * FROM events LIMIT 3";
$query = mysqli_query($conn, $sql);
while($condition = mysqli_fetch_assoc($query)){
  

    ?>
  <div class="col-md-4">
    <div class="card" style="width: full;">
  <img src="t1.png" class="card-img-top" alt="T1">
  <div class="card-body">
    <h5 class="card-title"><?php echo $condition['event_title'];?></h5>
    <p class="card-text"><?php echo $condition['event_description']?></p>
    <a href="event-details.php" class="btn btn-primary">Read More</a>
  </div>
</div>
    </div>
    <?php } ?>
   
  </div>
</div>
<?php
require_once('footer.php');
?>