<?php
require_once("header.php");

?>

<body style="background-color: #f8f9fa;">

<div class="container mt-5">
    <h1 style="text-align: center; font-weight: bold; color: #343a40;">Contact Us</h1>

    <div class="row mt-5">
  
    
      <div class="col-md-6" style="padding: 20px; border-right: 1px solid #ccc;">
        <h4 style="margin-bottom: 20px;">Get in touch</h4>
        <p><strong>Phone:</strong> +91 98765 43210</p>
        <p><strong>Address:</strong> 123, Main Road, Coimbatore, Tamil Nadu</p>
        <p><strong>Email:</strong> contact@eventmagic.com</p>
      </div>

    
      <div class="col-md-6" style="padding: 20px;">
        <form>
          <div class="mb-3">
            <label for="email" class="form-label"><strong>Email</strong></label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" style="border-radius: 5px;">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label"><strong>Phone Number</strong></label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" style="border-radius: 5px;">
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label"><strong>Description</strong></label>
            <textarea class="form-control" id="desc" rows="4" placeholder="Write your message..." style="border-radius: 5px;"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
        </form>
      </div>
    </div>
  </div>


<?php

require_once("footer.php");
?>