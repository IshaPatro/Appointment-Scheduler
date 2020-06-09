<?php include('../header.php'); ?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/About.css">

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
              <li class="nav-item active"><a class="nav-link" href="About.php" style="color: #28a7e9;"> ABOUT</a></li>
              <li class="nav-item"><a class="nav-link" href="Service.php"> SERVICES</a></li>
              <li class="nav-item"><a class="nav-link" href="MyAppointment.php"> MY APPOINTMENT</a></li>
              <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
                <a href="../About.php" class="btn btn-default log-out" type="button" id="log" style="width:auto;">LOG-OUT</a>
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

<!-- start about us -->
<br><br><br><br><br><br><br>
<div class="row justify-content-center">
    <h1><span style="text-decoration-line: underline; text-decoration-color:#28a7e9;">ABOUT</span> US</h1>
</div><br><br>
<p class="about-us">APPOI is an appointment scheduling application where we assist you in getting a confirmed appointment with our client by making affordable online payment. You select your convenient time and date based on the availability of our client, make payment and get rest assured about the visit to the doctor. In case you are unavailable on the appointed date for any reason, a rescheduling can also be done based on our client's availability.</p>
<br><br><br><br><br><br><br>
<!-- end about us -->

<!-- start FAQ -->
<div class="row justify-content-center">
    <h1><span style="text-decoration-line: underline; text-decoration-color:#28a7e9;">FREQUENTLY</span> ASKED QUESTIONS</h1>
</div><br><br>
<div class="row">
  <div class="col-4">
    <image src="Images/faq.png" width="600px" height="700px">
  </div>
  <div class="col-7">
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-item-header">
          What is APPOI and how do I use it?
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            APPOI provides online appointment of clients who have registered with us and are ready to provide online appointment based on their availability. A confirmed appointment is provided after making the payment through online channels.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          How do I use the online booking service?
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            You search for the doctor or client whose appointment is required. Go to his online calendar,look for his availability and then select the slot and get a confirmed booking after providing the necessary credentials and making payment. We do not ask for a user id to be created nor do we require a patient to login for getting the appointments booked through APPOI.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Can I use this service for checking availability of Doctor and his fees without actually booking or scheduling an appointment ?
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            Although, our aim is to assist you in getting an online appointment done for visit to a doctor, we do not prevent you from looking at the doctors availability and his profile.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Can I schedule more than one appointment with a single doctor ?
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            This can be done. We do not prevent you from getting multiple appointments done either for a same patient or different patients for a same date or different dates.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Can I make the schedule an online appointment and pay later on ?
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            We do not provide this facility at the moment. Our aim is to assist you in obtaining a confirmed appointment with a client on a selected time slot and date.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br>
<!-- end FAQ -->

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
