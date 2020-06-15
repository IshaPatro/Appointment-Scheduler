<?php include('../header.php'); ?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/About.css">
<link rel="stylesheet" href="../css/MyAppointment.css">

<!-- start navigation -->
<nav class="navbar navbar-light navbar-expand-md navbar-default" role="navigation" id="NavBar">
    <div class="container">
       <a class="navbar-brand" href="./index.html" id="navbar-brand"><img src="../Images/logo.png" height="50" width="65">APPOI</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="Home.php"> HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php"> ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="Profile.php"> PROFILE</a></li>
                <li class="nav-item active"><a class="nav-link" href="MyAppointment.php" style="color: #28a7e9;"> MY APPOINTMENTS</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
                <a href="../Home.php" class="btn btn-default log-out" type="button" id="log" style="width:auto;">LOG-OUT</a>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->


<br><br><br>
<?php
    session_start();
    include('../connection.php');
    $sql="SELECT * FROM bookings WHERE appointer_id =". $_SESSION['Id'];

  	$result = $con->query($sql);
  	while($row  = $result->fetch_assoc()) {
?>
  <div class="accordion" id="accordion" style="width:40%;float:left; margin-left:5%; margin-right:5%;" >
    <div class="accordion-item" style="padding:0;">
      <div class="accordion-item-header">

        <div class="card">
            <div class="card-body text-left">
              <div class="row" style="margin:0;">
                <div class="img col-4" style="background-color:#fff; padding-top:8%;">
                  <p><img class="img-fluid" src="../Images/customer-default.jpg"></p>
                </div>
                <div class="col-8">
                  <div class="row">
                    <div class="col my-auto" style="padding-left:5px;">
                      <p class="card-title" style="line-height: 100%;"><?php echo $row['appointer'] ?></p>
                      <p class="card-text time"><?php echo date('h:i a', strtotime($row['atime'])); ?></p>
                    </div>
                    <div class="date-time col-5 text-center">
                      <p class="card-text" style="font-size: calc(100% + 1.8vw + 1vh); margin-top: 20%;"><?php echo date('jS', strtotime($row['adate'])); ?></p>
                      <p class="card-text" style="font-size: calc(100% + 0.6vw + 1vh); margin-bottom: 20%;"><?php echo date('F Y', strtotime($row['adate'])); ?></p>
                    </div>
                  </div>
                  <div class="row">
                    <p class="card-text address"><i class="fa fa-map-marker"></i> <?php echo $row['address'] ?></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>



<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
