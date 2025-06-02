<?php

require_once("ADMIN_HEADER.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registrations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f7fa;
    }
    .container {
      margin-top: 40px;
    }
    .table-container {
      background-color: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    h2 {
      font-weight: 600;
    }
    .status-badge {
      padding: 5px 10px;
      border-radius: 8px;
      font-size: 0.875rem;
    }
    .registered {
      background-color: #d1e7dd;
      color: #0f5132;
    }
    .pending {
      background-color: #fff3cd;
      color: #664d03;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="table-container">
      <h2 class="mb-4 text-center text-primary">Registered Users</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Event</th>
              <th>Event Date</th>
              <th>Registered On</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Rahul S</td>
              <td>rahul@example.com</td>
              <td>Tech Innovate 2025</td>
              <td>2025-05-15</td>
              <td>2025-04-17</td>

            </tr>
            <tr>
              <td>2</td>
              <td>Ananya M</td>
              <td>ananya.m@gmail.com</td>
              <td>AI Bootcamp</td>
              <td>2025-05-10</td>
              <td>2025-04-12</td>

            </tr>
            <tr>
              <td>3</td>
              <td>Vinoth K</td>
              <td>vinothk@outlook.com</td>
              <td>HackForChange</td>
              <td>2025-06-01</td>
              <td>2025-04-18</td>
 
            </tr>
            <tr>
              <td>4</td>
              <td>Divya R</td>
              <td>divya.raj@gmail.com</td>
              <td>Design Sprint</td>
              <td>2025-04-30</td>
              <td>2025-04-10</td>

            </tr>
            <tr>
              <td>5</td>
              <td>Surya D</td>
              <td>suryad@skasc.edu</td>
              <td>WebX Workshop</td>
              <td>2025-05-08</td>
              <td>2025-04-15</td>

            </tr>
            <tr>
              <td>6</td>
              <td>Harini V</td>
              <td>harini_v@yahoo.com</td>
              <td>Flutter Fest</td>
              <td>2025-05-20</td>
              <td>2025-04-13</td>

            </tr>
            <tr>
              <td>7</td>
              <td>Vikram J</td>
              <td>vikram.j@gmail.com</td>
              <td>Cyber Security Talk</td>
              <td>2025-05-25</td>
              <td>2025-04-14</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

 <?php
require_once("admin_footer.php");

?>