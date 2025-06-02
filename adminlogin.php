<?php
session_start();
require '../db.php';
if(isset($_POST["submit"])){

$email = $_POST["email"];
$pswd = $_POST["password"];

$sql = "SELECT * FROM admin where email = '$email'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_array($query);
    if($row['password'] == $pswd){
    $_SESSION['username'] = $row['name'];
    header('Location:index.php');
    }
    
}else{
    echo "<script>alert('Incorrect Password')</script>";
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
        <h1 class = "text-center">ADMIN LOGIN</h1>
        <form action="" method = "post"> 
            <div class = "mt-3">
                <label for="email"> Email Id</label>
                <input  class = "form-control"  type="email" name = "email" id = "email" required>

            </div>
            <div class = "mt-3">
                <label for="password"> Password</label>
                <input  class = "form-control"  type="password" name ="password" id = "password">
            </div>
            <div class = "mt-3 text-center" > 
            <input  class = "btn btn-primary" type="submit" name = "submit" value = "Login">
            </div>
            
        </form> 
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>