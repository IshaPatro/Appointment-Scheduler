<?php include('../header.php'); ?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/BookAnAppointment.css">

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
                <li class="nav-item active"><a class="nav-link" href="BookAnAppointment.php" style="color: #28a7e9;"> BOOK</a></li>
                <li class="nav-item"><a class="nav-link" href="MyAppointment.php"> MY APPOINTMENT</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
                <a href="../Home.php" class="btn btn-default log-out" type="button" id="log" style="width:auto;">LOG-OUT</a>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->

<!-- result -->
<?php
session_start();
//	$appointer_id = isset($_GET['appointer_id'])?$_GET['appointer_id']:"";
$appointer_id = $_GET['id'];
  include('../connection.php');

    $sql="SELECT * FROM `clients-data` WHERE Id =". $appointer_id;


	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row  = $result->fetch_assoc()) {
      // $appointer_id   = $row["Id"];
      $name=$row['Name'];
	        $service 	= $row["Service"];
	       // $timeslot 	= $row["Timeslot"];
	        $address 	= $row["Address"];
	       // $fee = $row["fee"];
			$userid = $_SESSION['Id'];
	    }
	}
	$con->close();
?>

<!-- fetching doctor info -->


<!-- start form -->
<div class="container" >
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-12">
      <div class="form d-flex justify-content-between">
        <div class="image">
          <img src="Images/appoint.png">
        </div>
        <form action="" class="my-form" method="post" enctype="multipath/form-data">
          <h2 class="font-weight-bold mb-3 " style="color:#000;">BOOK AN <span style="color:#28a7e9;">APPOINTMENT</span></h2>
          <p class="mdb-color-text" style="color:#000;">Select prefered time slot to book a face-to-face or video consultation</p>


          <div class="row">
              <div class="col">
                <select name="title" class="title" id="title" required>
                    <option disabled="disabled" selected="selected">Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                </select>
              </div>
              <div class="col">
                <select name="gender" class="gender" id="gender" required>
                    <option disabled="disabled" selected="selected">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                </div>
              <div class="col">
                <input name="dob" placeholder="Date of Birth" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="dob" value="" required/>
              </div>
          </div>
          <input name="name" placeholder='Full Name' type="text" id="FullName" required>
			    <input name="address" placeholder='Address' type="text" id="Address" required>
          <div class="row">
              <div class="col">
                <input name="email" placeholder='Email Adress' type="text" id="email" required>
              </div>
              <div class="col">
                <input name="number" placeholder='Phone number' type="text" id="PhnNum" required>
              </div>
          </div>
          <div class="row">
            <div class="col">
              <?php
                if(isset($_GET['time'])){
              ?>
              <label style="border-radius: 45px;
                            background-color: #bfbfbf;
                            font-size: 15px;
                            height: 40px;
                            border: none;
                            padding-top:8px;
                            padding-left: 15px;
                            width:100%;
                            margin-bottom: 10px;
                            margin-top: 10px;
                            outline: none;
                            color: #4d4d4d;">Service: <?php echo $service;?></label><br><br>
            </div>
            <div class="col">
              <label style="border-radius: 45px;
                            background-color: #bfbfbf;
                            font-size: 15px;
                            height: 60px;
                            border: none;
                            padding-top:8px;
                            padding-left: 15px;
                            width:100%;
                            margin-bottom: 10px;
                            margin-top: 10px;
                            outline: none;
                            color: #4d4d4d;">Appointer name: <?php echo $name; ?> </label>
            </div>
          </div>
          <div class="row">
            <div class="col">
                <input name="date" placeholder="Appointment Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" value=""/ required>
            </div>
            <div class="col">
              <label style="border-radius: 45px;
                            background-color: #bfbfbf;
                            font-size: 15px;
                            height: 40px;
                            border: none;
                            padding-top:8px;
                            padding-left: 15px;
                            width:100%;
                            margin-bottom: 10px;
                            margin-top: 10px;
                            outline: none;
                            color: #4d4d4d;">Time: <?php echo $_GET['time']; ?></label>
              <?php
                  }
              ?>
            </div>
            </div>

          <label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label>
          <button name="submit" class="book-an-appointment">BOOK APPOINTMENT</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end form -->



<!-- confirming booking -->
<?php
  include('../connection.php');
  if(isset($_POST['submit'])){

  $sql = " INSERT INTO bookings (user_id,title,name,gender,dob,address,email,phn,service,appointer,appointer_id,adate,atime)
    VALUES ('" . $_POST["userid"] . "','" . $_POST["title"] . "','" . $_POST["name"] . "','" . $_POST["gender"] . "', '" . $_POST["dob"] . "','" . $_POST["address"] . "','". $_POST["email"] . "','". $_POST["number"] . "','". $_POST["service"] . "','". $appointer_id . "','". $_POST["appointer_id"] . "','" . $_POST["date"] . "','". $_POST["time"] . "' )";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Your booking has been accepted!');</script>";
    } else {
        echo "<script>alert('There was an Error')<script>";
    }

    $con->close();
  }
?>
<!-- confirming booking -->

<?php include('../footer.php'); ?>
