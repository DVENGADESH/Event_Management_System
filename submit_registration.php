<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "event_db";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $phone  = mysqli_real_escape_string($conn, $_POST['phone']);
    $event  = mysqli_real_escape_string($conn, $_POST['event']);

    $sql = "INSERT INTO event_registration (name, phone_no, email, event)
            VALUES ('$name', '$phone_no', '$email', '$event')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('🎉 Registered Successfully!'); window.location.href = 'dashboard.php';</script>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>
