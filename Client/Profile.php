<?php include('../header.php'); ?>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/BookAnAppointment.css">
<link rel="stylesheet" href="../css/Profile.css">

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
                <li class="nav-item active"><a class="nav-link" href="Profile.php" style="color: #28a7e9;"> PROFILE</a></li>
                <li class="nav-item"><a class="nav-link" href="MyAppointment.php"> MY APPOINTMENT</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
                <a href="../Home.php" class="btn btn-default log-out" type="button" id="log" style="width:auto;">LOG-OUT</a>
            </ul>
        </div>
    </div>
</nav>
<!-- end navigation -->

<!-- for retriving data -->
				<?php
							session_start();
							include('../connection.php');

							$sql="SELECT * FROM clientdata where Id=" . $_SESSION['Id'];

							$result = $con->query($sql);
					  	while($row  = $result->fetch_assoc()) {

				?>
<!-- for retriving data -->


<!-- start form -->
<div class="container">
  <div class="row d-flex justify-content-center align-items-center" >
    <div class="col-md-12">
      <div class="form d-flex justify-content-between">
        <div class="image" style="width:800px">
          <img src="../Images/UpdateProfile.png">
        </div>
        <form action="" class="my-form" method="post" enctype="multipart/form-data" action="upload.php">
          <h2 class="font-weight-bold mb-3 " style="color:#000;">UPDATE YOUR <span style="color:#28a7e9;">PROFILE</span></h2>

					<!-- <div class="d-flex justify-content-center">
						<div class="profile-pic" style="background-image: url('../Images/Clients/<?php echo @$pic; ?>')" >
								<span class="fa fa-photo"></span>
			      		<span>Change Image</span>
						</div>
						<label>
							 <input type="file" id="file"/>
							 <button type="submit" name="upload">UPLOAD</button>
							 </label>
					</div> -->


          <div class="row">
						<div class="col">
							<label style="color:black;">
								Your Name: <input type="text" name="name" style="width:160%;" value="<?php echo $row['Name']; ?>" required>
							</label>
						</div>
          </div>

					<div class="row">
							<div class="col">
								<label style="color:black;">
									Years Of Experience: <input type="number" name="experience" value="<?php echo $row['Experience']; ?>" required>
								</label>
              </div>
              <div class="col">
  							<label style="color:black;">Type of service:
  								<select name="service" required>
  										<option value="Doctor" <?php if($row['Service']=="Doctor") echo 'selected="selected"'; ?>>Doctor</option>
  										<option value="Plumber" <?php if($row['Service']=="Plumber") echo 'selected="selected"'; ?>>Plumber</option>
  										<option value="Police" <?php if($row['Service']=="Police") echo 'selected="selected"'; ?>>Police</option>
  										<option value="Teacher" <?php if($row['Service']=="Teacher") echo 'selected="selected"'; ?>>Teacher</option>
  										<option value="Lawyer" <?php if($row['Service']=="Lawyer") echo 'selected="selected"'; ?>>Lawyer</option>
  										<option value="Artist" <?php if($row['Service']=="Artist") echo 'selected="selected"'; ?>>Artist</option>
  										<option value="Colleagues" <?php if($row['Service']=="Colleagues") echo 'selected="selected"'; ?>>Colleagues</option>
  										<option value="Electrician" <?php if($row['Service']=="Electrician") echo 'selected="selected"'; ?>>Electrician</option>
  										<option value="Consultant" <?php if($row['Service']=="Consultant") echo 'selected="selected"'; ?>>Consultant</option>
  										<option value="Esthetician" <?php if($row['Service']=="Esthetician") echo 'selected="selected"'; ?>>Esthetician</option>
  								</select>
  							</label>
  						</div>
          </div>

          <div class="row">
            <div class="col">
              <label style="color:black;">
                Address: <input type="text" name="address" style="width:160%;" value="<?php echo $row['Address']; ?>" required>
              </label>
            </div>
          </div>

					<label style="color:black;">Time Slots:</label>
					<div class="row">
						<div class="col">
							<input type="time" name="ts1" value="<?php echo date('h:i', strtotime($row['TimeSlot1'])); ?>" required>
						</div>
						<div class="col">
							<input type="time" name="ts2" value="<?php echo date('h:i', strtotime($row['TimeSlot2'])); ?>" required>
						</div>
						<div class="col">
							<input type="time" name="ts3" value="<?php echo date('h:i', strtotime($row['TimeSlot3'])); ?>" required>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<input type="time" name="ts4" value="<?php echo date('h:i', strtotime($row['TimeSlot4'])); ?>" required>
						</div>
						<div class="col">
							<input type="time" name="ts5" value="<?php echo date('h:i', strtotime($row['TimeSlot5'])); ?>" required>
						</div>
						<div class="col">
							<input type="time" name="ts6" value="<?php echo date('h:i', strtotime($row['TimeSlot6'])); ?>" required>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<input type="time" name="ts7" value="<?php echo date('h:i', strtotime($row['TimeSlot7'])); ?>" required>
						</div>
						<div class="col">
							<input type="time" name="ts8" value="<?php echo date('h:i', strtotime($row['TimeSlot8'])); ?>" required>
						</div>
						<div class="col">
							<input type="time" name="ts9" value="<?php echo date('h:i', strtotime($row['TimeSlot9'])); ?>" required>
						</div>
					</div>
					<button name="update" type="submit" class="book-an-appointment">UpdateProfile</button> <br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end form -->

<?php } ?>
<!-- update information -->

	<?php

			include('../connection.php');
			if(isset($_POST['update'])){


				$sql="UPDATE clientdata SET
											Name='" .$_POST["name"]. "' ,
											Service='" .$_POST["service"]."' ,
											Address='" .$_POST["address"]. "',
											Experience='" .$_POST["experience"]. "' ,
											TimeSlot1='" .$_POST["ts1"]. "' ,
											TimeSlot2='" .$_POST["ts2"]. "' ,
											TimeSlot3='" .$_POST["ts3"]. "' ,
											TimeSlot4='" .$_POST["ts4"]. "' ,
											TimeSlot5='" .$_POST["ts5"]. "' ,
											TimeSlot6='" .$_POST["ts6"]. "' ,
											TimeSlot7='" .$_POST["ts7"]. "' ,
											TimeSlot8='" .$_POST["ts8"]. "' ,
											TimeSlot9='" .$_POST["ts9"]. "'
															WHERE Id='" . $_SESSION["Id"] . "'";


				  if ($con->query($sql) === TRUE) {
					echo "<script>alert(' Record updated successfully');</script>";
				} else {
						echo "<script>alert('There was a Error Updating profile');</script>";
				}

			}
		?>
<!-- update information End -->

<?php include('../footer.php'); ?>
