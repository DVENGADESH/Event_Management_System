<?php
require_once("header.php");
require 'db.php';
?>

<body style = "background-color: rgb(17, 184, 239);">

  <div class="container mt-5">
    <h1 style="text-align: center; color: #2c3e50; font-weight: bold; margin-bottom: 40px;">🎉 Upcoming Events</h1>

     <?php
    $sql = "SELECT * FROM events";
    $query = mysqli_query($conn, $sql);
    while($condition = mysqli_fetch_assoc($query))
    {
  ?>    
    <div class="row mb-5 p-3" style="background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
      <div class="col-md-4 text-center">
        <img src="https://images.unsplash.com/photo-1503424886301-4e00ef06eb0b" alt="Tech Fest" class="img-fluid rounded" style="max-height: 250px;">
      </div>
      <div class="col-md-8 mt-3 mt-md-0">
        <h4 style="color: #6c5ce7;"><?php echo $condition['event_title'];?></h4>
        <p style="font-size: 15px;"><strong>📍 Location:</strong> <?php echo $condition['location']; ?></p>
        <p style="font-size: 15px;"><strong>📅 Date:</strong> <?php echo date("d-m-Y", strtotime($condition['event_date'])); ?> </p>
        <p style="font-size: 15px;"><?php echo $condition['event_description']?> </p>
        <a href="usereventregistration.php" class="btn btn-primary" style="margin-top: 10px;">Register</a>
      </div>
    </div>
<?php
    }
?>

</div>

<?php
require_once("footer.php");
?>