<?php
// Database Connection
$host = "localhost";
$username = "root";
$password = "";
$database = "event_db";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }
        .form-container {
            background-color: #ffffff;
            color: #000;
            border-radius: 20px;
            padding: 30px;
            margin-top: 80px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .btn-custom {
            background-color: #6a11cb;
            color: #fff;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #4e0ea5;
        }
        a.back-link {
            display: inline-block;
            margin-top: 20px;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container col-md-6 offset-md-3 form-container">
        <h2 class="text-center mb-4">🎉 Register for an Event</h2>
        <form action="submit_registration.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">👤 Full Name</label>
                <input type="text" class="form-control" name="name" required placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">📧 Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">📞 Phone Number</label>
                <input type="text" class="form-control" name="phone" required placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
                <label for="event" class="form-label">📅 Select Event</label>
                <select class="form-select" name="event" required>
                    <option value="" disabled selected>-- Choose an Event --</option>
                    <?php
                        $sql = "SELECT * FROM events";
                        $query = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($query)) {
                            echo "<option value='".$row['event_title']."'>".$row['event_title']."</option>";
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-custom w-100">Register</button>
        </form>
        <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
    </div>
</body>
</html>
