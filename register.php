<?php
require 'db.php';
if(isset($_POST["submit"])){
    $name = $_POST["Name"];
    $dob = $_POST["DOB"];
    $mobile_no = $_POST["Mobile_no"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $c_date = date('Y-m-d');
    $status = 1;
$sql = "INSERT into users(`name`, `email`, `dob`, `phone`, `password`, `cdate`,`status`) VALUES ('$name','$email','$dob','$mobile_no','$pswd','$c_date','$status') ";
try {
    $qry = mysqli_query($conn, $sql);
    echo "<script>alert('Registration successful')</script>";
    header('Location:index.php');
} catch (Exception $e) {
    echo $e;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body  class = "d-flex justify-content-center align-items-center" style = "height : 100vh; background-color: lightblue;">
    <div class = " w-25 px-3 py-5 rounded shadow-lg bg-white" >
        <h1 class = "text-center">Registration</h1>
        <form action="" method = "post"> 
           <div class = "mt-3">
            <label for="Name">Name </label>
            <input class ="form-control" type="text" name = "Name" id = "Name" required>
           </div>

           <div class = "mt-3"> 
            <label for="DOB">DOB</label>
            <input class ="form-control" type="date"  name = "DOB" id = "DOB" required>
           </div>
        <div class = "mt-3" >
                <label for="Mobile NO"> Mobile Number</label>
                <input class = "form-control" type="text" name ="Mobile_no" id = "mobile no" required>
            </div>

            <div class = "mt-3">
                <label for="email"> Email Id</label>
                <input  class = "form-control"  type="email" name = "email" id = "email" required>
            </div>

            <div class = "mt-3">
                <label for="password"> Password</label>
                <input  class = "form-control"  type="password" name ="password" id = "password">
            </div>

            <div class = "mt-3 text-center" > 
                <input  class = "btn btn-primary" type="submit" name = "submit" value = "submit"> 
            </div>

            <p class = "text-center mt-3"> <a href="index.php"> Already have an Account?</a></p>
        </form> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>