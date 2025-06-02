<?php
require '../db.php';    // (./) -> same folder .  (../) -> previous folder.

if(isset($_POST["submit"])){
    $event_title = $_POST["event_title"];
    $event_description = $_POST["event_description"];
    $event_date = $_POST["event_date"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $location = $_POST["location"];
    $organizer_name = $_POST["organizer_name"];
    $organizer_contact = $_POST["organizer_contact"];
    $event_category = $_POST["event_category"];


$sql = "INSERT into events(`event_title`, `event_description`, `event_date`, `start_time`, `end_time`, `location`,`organizer_name`,`organizer_contact`,`event_category`) VALUES ('$event_title', '$event_description', '$event_date', '$start_time', '$end_time', '$location','$organizer_name','$organizer_contact','$event_category') ";
try {
    $qry = mysqli_query($conn, $sql);
    echo "<script>alert('Registration successful')</script>";
    // header('Location:index.php');
} catch (Exception $e) {
    echo $e;
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Event | Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #c3ecb2, #7dd7f7);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-container {
      max-width: 850px;
      margin: 50px auto;
      padding: 40px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s;
    }

    .form-container:hover {
      transform: scale(1.01);
    }

    h2 {
      font-weight: 600;
      color: #0d6efd;
      text-shadow: 1px 1px 2px #cce5ff;
    }

    label {
      font-weight: 500;
      color: #333;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .form-select:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .btn-success {
      background: linear-gradient(135deg, #28a745, #218838);
      border: none;
      font-weight: bold;
    }

    .btn-success:hover {
      background: linear-gradient(135deg, #218838, #1e7e34);
    }

    #poster-preview {
      max-width: 100%;
      border-radius: 10px;
      margin-top: 10px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.15);
    }

    .form-label::after {
      content: "*";
      color: red;
      margin-left: 4px;
      font-size: 14px;
    }

    .form-label.optional::after {
      content: "";
    }

    .form-section {
      background-color: #f0f8ff;
      padding: 20px;
      border-left: 5px solid #0d6efd;
      border-radius: 10px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="form-container">
      
      <!-- 🔙 Back Arrow Button -->
      <a href="javascript:history.back()" class="btn btn-outline-primary mb-3">
        ← Back
      </a>

      <h2 class="mb-4 text-center">🎉 Add New Event</h2>
      <form action="" method="post">
        <div class="mb-3">
          <label for="title" class="form-label">Event Title</label>
          <input type="text" class="form-control" id="title" name="event_title" required>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Event Description</label>
          <textarea class="form-control" id="description" rows="3" name="event_description" required></textarea>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="date" class="form-label">Event Date</label>
            <input type="date" class="form-control" id="date" name="event_date" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="startTime" class="form-label">Start Time</label>
            <input type="time" class="form-control" id="startTime" name="start_time" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="endTime" class="form-label">End Time</label>
            <input type="time" class="form-control" id="endTime" name="end_time" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="venue" class="form-label">Venue / Location</label>
          <input type="text" class="form-control" id="venue" name="location" required>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="organizer" class="form-label">Organizer Name</label>
            <input type="text" class="form-control" id="organizer" name="organizer_name" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="contact" class="form-label">Organizer Contact</label>
            <input type="text" class="form-control" id="contact" name="organizer_contact" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Event Category</label>
          <select class="form-select" id="category" name="event_category" required>
            <option selected disabled>Select Category</option>
            <option value="Workshop">Workshop</option>
            <option value="Seminar">Seminar</option>
            <option value="Tech Talk">Tech Talk</option>
            <option value="Fest">Fest</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="poster" class="form-label optional">Upload Event Poster</label>
          <input class="form-control" type="file" id="poster" name="event_poster" accept="image/*" onchange="previewPoster(event)">
          <img id="poster-preview" />
        </div>

        <div class="mb-3">
          <label for="eventLink" class="form-label optional">Event Link (if online)</label>
          <input type="url" class="form-control" id="eventLink" name="link">
        </div>

        <button type="submit" class="btn btn-success w-100 mt-3" name="submit">➕ Add Event</button>
      </form>
    </div>
  </div>

  <!-- <script>
    function previewPoster(event) {
      const output = document.getElementById('poster-preview');
      output.src = URL.createObjectURL(event.target.files[0]);
    }
  </script> -->

</body>
</html>
