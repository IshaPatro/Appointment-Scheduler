<?php include('header.php'); ?>
<link rel="stylesheet" href="css/Contact.css">

<!-- start navigation -->
<nav class="navbar navbar-light navbar-expand-md navbar-default" role="navigation" id="NavBar">
    <div class="container">
       <a class="navbar-brand" href="./index.html" id="navbar-brand"><img src="Images/logo.png" height="50" width="65">APPOI</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="Home.php"> HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php"> ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="Service.php"> SERVICES</a></li>
                <li class="nav-item active"><a class="nav-link" href="Contact.php" style="color: #28a7e9;"> CONTACT</a></li>
                <a href="Login.php" class="btn btn-default log-in" type="button" id="log">LOG-IN</a>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->

<image src="Images/contact.png" width="100%" id="contact-header">

<div class="row">
  <div class="col-6">
    <h1 class="lgit">LET'S GET IN TOUCH</h1>
    <i class='fa fa-map-marker' id="contact-icons"></i>
    <div class="cta-text" id="info">
        <span>1010 Avenue, New Delhi</span>
    </div><br>
    <i class='fa fa-phone' id="contact-icons"></i>
    <div class="cta-text" id="info">
        <span>987-654-3210</span>
    </div><br>
    <i class='fa fa-envelope-open' id="contact-icons"></i>
    <div class="cta-text" id="info">
        <span>abc@appoi.com</span>
    </div><br>
  </div>
  <div class="col-6">
  </div>
</div>

</div>
<?php include('footer.php'); ?>
