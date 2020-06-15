<?php include('../header.php'); ?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/Home.css">

<!-- start navigation -->
<nav class="navbar navbar-light navbar-expand-md navbar-default" role="navigation" id="NavBar">
  <div class="container">
    <a class="navbar-brand" href="./index.html" id="navbar-brand"><img src="../Images/logo.png" height="50" width="65" />APPOI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" ><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="Home.php" style="color: #28a7e9;"> HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php"> ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="Profile.php"> PROFILE</a></li>
        <li class="nav-item"><a class="nav-link" href="MyAppointment.php"> MY APPOINTMENT</a></li>
        <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
        <a href="../Home.php" class="btn btn-default log-out" type="button" id="log" style="width:auto;">LOG-OUT</a>
      </ul>
    </div>
  </div>
</nav>
<!-- end navigation -->

<!-- start main heading -->
<header class="main-heading">
  <div class="overlay"></div>
  <div class="container h-850">
    <div class="d-flex h-100 text-left align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-8">Get your services booked in a snap with</h1>
        <h1 class="display-3" id="appoi">APPOI</h1>
        <p class="lead mb-0">Schedule your appointments faster and forget the back-and-forth emails.</p>
        <p class="lead mb-0">Your calendar stays full, and you stay productive.</p>
      </div>
    </div>
  </div>
</header>
<!-- end main heading -->

<br><br><br><br><br><br><br>
<image src="../Images/home-img.png" class="mx-auto d-block" width="850" >
<br><br><br><br><br><br><br>

<!-- start feedback -->
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card">
        <div class="card-body text-center">
            <p><img class="img-fluid" src="../Images/Doctors/Dermatologist01.png" alt="card image"></p>
            <h4 class="card-title">Dr Shruti Lakhnpal Tondon</h4>
            <p class="feedback">“I simply love the appoi.com online booking system! I run a small wellness clinic and the appoi.com system saves me time and has streamlined my bookings. My clients really appreciate the convenience of seeing my calendar and booking easy to use and looks professional. I trialled a few different online booking systems but none were as impressive as appoi.com”</p>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card">
        <div class="card-body text-center">
            <p><img class="img-fluid" src="../Images/Doctors/lawyer01.jpg" alt="card image"></p>
            <h4 class="card-title">Dr Shruti Lakhnpal Tondon</h4>
            <p class="feedback">““appoi.com is an ace work done by the professionals. I truly appreciate their work because I've trialled it. I'm a land registry lawyer. Previously so many clients used to cancel their appointment as it was pen and paper and now they can book online and come accordingly. This software has not only increased my clients but also lessen my work load and increase my work efficiency.”</p>
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card">
        <div class="card-body text-center">
            <p><img class="img-fluid" src="../Images/Doctors/Dermatologist03.jpg" alt="card image"></p>
            <h4 class="card-title">Dr Shruti Lakhnpal Tondon</h4>
            <p class="feedback">“I simply love the appoi.com online booking system! I run a small wellness clinic and the appoi.com system saves me time and has streamlined my bookings. My clients really appreciate the convenience of seeing my calendar and booking easy to use and looks professional. I trialled a few different online booking systems but none were as impressive as appoi.com”</p>
        </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br>
<!-- end feedback -->

<!-- start customer footer -->
<div style="background-color:#fff;text-align: center;">
  <div class="row" class="customer">
      <div class="col-xl-4 col-md-4 mb-30">
        <h2 style="color: #28a7e9;font-weight:700;margin:0;">10,000+</h2>
        <h5 style="color: #303030">Happy Customers</h4>
      </div>
      <div class="col-xl-4 col-md-4 mb-30">
        <h2 style="color: #28a7e9;font-weight:700;margin:0;">500+</h2>
        <h5 style="color: #303030">Overwhelmed Clients</h4>
      </div>
      <div class="col-xl-4 col-md-4 mb-30">
        <h2 style="color: #28a7e9;font-weight:700;margin:0;">50,000+</h2>
        <h5 style="color: #303030">Successful Appointments</h4>
      </div>
  </div>
</div>
<!-- start customer footer -->

<?php include('../footer.php'); ?>
