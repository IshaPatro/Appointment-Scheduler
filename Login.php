<?php include('header.php'); ?>
<link rel="stylesheet" href="css/Login.css">

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
                <li class="nav-item"><a class="nav-link" href="Service.php"> SERVICE</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->

<!-- start form -->
<?php
  if(isset($_GET['success'])){
    echo '<span><?php echo $_GET["success"];?><small class="cross">X</small></span>';
  }else if(isset($_GET['logout'])){
    echo '<span><?php echo $_GET["logout"];?><small class="cross">X</small></span>';
  }
?>


<div class="container" id="login-form">

    <div class="w40">
      <div class="CustomerBox active">
        <div class="text">
          <h3>Customer</h3>
          <p>Easy, Flexible and Affordable solution to all your Appointment related queries at your fingertips</p>
        </div>
        <button class="btn CustomerBox-btn cust-btn" onclick="set()" >Client</button>
      </div>
      <div class="ClientBox">
        <div class="text">
          <h3>Client</h3>
          <p>Reach more potential clients with a free online booking site that automatically displays your services and availability.</p>
        </div>
        <button class="btn ClientBox-btn cust-btn" onclick="set()">Customer</button>
      </div>
    </div>

    <div class="w60">

    <?php
    if(isset($_GET['log'])){
?>
<span class="red"><?php echo $_GET['log'];?> </span>
<?php
}
else if(isset($_GET['data'])){
    ?>

<span class="red"><?php echo $_GET['data']; ?></span>

    <?php
} else if(isset($_GET['dbError'])){
    ?>
<span class="red"><?php echo $_GET['dbError']; ?></span>
    <?php
} else if(isset($_GET['empty'])){
    ?>
<span class="red"><?php echo $_GET['empty']; ?></span>
    <?php
}


?>

<?php

 if(isset($_GET['match'])){
    ?>

<span class="red"><?php echo $_GET['match']; ?></span>

    <?php
} else if(isset($_GET['dbError'])){
    ?>
<span class="red"><?php echo $_GET['dbError']; ?></span>
    <?php
} else if(isset($_GET['empty1'])){
    ?>
<span class="red"><?php echo $_GET['empty1']; ?></span>
    <?php
}else if(isset($_GET['log1'])){
    ?>

<span class="red"><?php echo $_GET['log1']; ?></span>
    <?php
}else if(isset($_GET['dbFailed'])){
    ?>
<span class="red"><?php echo $_GET['dbFailed']; ?></span>
    <?php


}else if(isset($_GET['exist'])){
  ?>
<span class="red"><?php echo $_GET['exist']; ?></span>
    <?php


}


?>



    <div class="form-box">
      <div class="button-box">

        <div id="login-signup"></div>
              <button type="button" class="toggle-btn" onclick="login()">Login</button>
              <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>
      <form id="login" class="input-group" data-set="customer" action="customer.php" method="POST">
        <input type="text" class="input-field" placeholder="Username" name="Uname" >
        <input type="password" class="input-field" placeholder="Password" name="pass" >
        <button type="submit" class="submit-btn" name="sub">Login</button>
      </form>
      <form id="register" data-set="customer" class="input-group" action="customerRegister.php" method="POST" style="position: absolute;">
        <input type="text" class="input-field" placeholder="Username" name="Uname">
        <input type="email" class="input-field" placeholder="Email" name="email" >
        <input type="password" class="input-field" placeholder="Password" name="pass1">
        <input type="password" class="input-field" placeholder="Confirm Password"  name="pass2">
        <button type="submit" class="submit-btn" name="sub">Register</button>
      </form>
    </div>
  </div>
</div>
<!-- end form -->

<?php include('footer.php'); ?>

<script>
var btn = "";
var log = document.getElementById("login");
var reg= document.getElementById("register");
var cust=document.getElementsByClassName("cust-btn");
function set(){
    if(log.dataset.set==="customer"){
        log.action="./client.php"
        log.dataset.set="client";
        reg.action="./clientRegister.php";
        reg.dataset.set="client";
    }else{
        log.action="./customer.php"
        log.dataset.set="customer";
        reg.action="./customerRegister.php";
        reg.dataset.set="customer";
    }
}
</script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>
