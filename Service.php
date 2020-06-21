<?php include('header.php'); ?>
<link rel="stylesheet" href="css/Service.css">
<link rel="stylesheet" href="css/main.css">

<!-- start navigation -->
<nav class="navbar navbar-light navbar-expand-md navbar-default" role="navigation" id="NavBar">
  <div class="container">
    <a class="navbar-brand" href="./index.html" id="navbar-brand"><img src="Images/logo.png" height="50" width="65" />APPOI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" ><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="Home.php"> HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php"> ABOUT</a></li>
        <li class="nav-item active"><a class="nav-link" href="Service.php" style="color: #28a7e9;"> SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="Contact.php"> CONTACT</a></li>
        <a href="./Login.php" class="btn btn-default log-in" type="button" id="log">LOG-IN</a>
      </ul>
    </div>
  </div>
</nav>
<!-- end navigation -->

<image src="Images/service.png" width="100%">
<br><br><br><br><br><br><br>
<style>
.filterDiv{
    display:block;
}
</style>

<h2 class="heading">SELECT THE SERVICES BELOW</h2>

<div class="row">
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/doctor.png');"></button>
      <p class="service-txt"> Doctor </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/plumber.png');"></button>
      <p class="service-txt"> Plumber </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/policeman.png');"></button>
      <p class="service-txt"> Policeman </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/teacher.png');"></button>
      <p class="service-txt"> Teacher </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/lawyer.png');"></button>
      <p class="service-txt"> Lawyer </p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/artist.png');"></button>
      <p class="service-txt"> Artist </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/colleagues.png');"></button>
      <p class="service-txt"> Colleagues </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/electrician.png');"></button>
      <p class="service-txt"> Electrician </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/consultant.png');"></button>
      <p class="service-txt"> Consultant </p>
    </div>
  </div>
  <div class="col">
    <div class="services">
      <button class="service-btn" style="background-image: url('Images/Services/esthetician.png');"></button>
      <p class="service-txt"> Esthetician </p>
    </div>
  </div>
</div>

<br><br><br><br>
<h2 class="heading">SELECT THE SERVICE PROVIDER AND TIME SLOT WHICH SUITS YOU THE BEST</h2>
<br><br>


<script>

</script>



      <?php
      require_once("connection.php");
        if(isset($_GET['select'])){
          $select = $_GET['select'];
        }else{
          $select="Doctor";
        }
      if($data){
        $query ="select * from `clientData` where Service='".$select."';";
        // echo $query;
        $result = mysqli_query($con,$query);

        while($row = mysqli_fetch_assoc($result)) {


        ?>

<style>
.detailButton{
  cursor:pointer;
}
</style>

        <!-- start Doctor -->
        <div class="col-xs-12 col-sm-6 col-md-4" style="float:left;">
            <div class="image-flip">
                <div class="mainflip">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                              <?php
                                $name1=substr($row['Name'],3);
                                $image='Images/Services/'.strtolower($row['Service']).'.png';

                                if(!file_exists($image)){
                                  $image='Images/customer-default.jpg';
                                }

                              ?>
                                <p><img class=" img-fluid" src="<?php echo htmlspecialchars($image); ?>" alt="card image"></p>
                                <h4 class="card-title"><?php echo $row['Name'] ?> </h4>
                                <p class="card-text" style="font-size: 18px;"><?php echo $row['Service']; ?></p>
                                <p class="card-text" style="font-size: 15px;"><?php echo$row['Experience']. " of Experience"; ?></p>
                                <p class="card-text" style="font-size: 12px;"><i class="fa fa-map-marker"></i><?php echo $row['Address'] ?></p>
                                <span class="fa fa-star fa-2x checked"></span>
                                <span class="fa fa-star fa-2x checked"></span>
                                <span class="fa fa-star fa-2x checked"></span>
                                <span class="fa fa-star fa-2x checked"></span>
                                <span class="fa fa-star fa-2x "></span>
                            </div>
                        </div>
                    </div>
                    <div class="backside">
                        <div class="card">
                            <div class="card-body text-center mt-4">
                                <p class="card-text btn-text">
                                  <p style="color:black"> Log In in order to Book an Appointment</p>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  border: none;
                                                  margin-right:3%;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot1'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  border: none;
                                                  margin-right:3%;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot2'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  border: none;
                                                  margin-right:3%;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot3'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  margin-right:3%;
                                                  border: none;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot4'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  margin-right:3%;
                                                  border: none;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot5'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  margin-right:3%;
                                                  border: none;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot6'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  margin-right:3%;
                                                  border: none;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot7'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  border: none;
                                                  margin-right:3%;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot8'])); ?></button>
                                  <button style=" color: #fff;
                                                  width: 30%;
                                                  background: #bfbfbf;
                                                  font-size: 20px;
                                                  padding:auto;
                                                  margin-right:3%;
                                                  border: none;
                                                  border-radius: 25px;
                                                  cursor: pointer;
                                                  float:left;
                                                  margin-top:8%;"><?php echo date("H:i", strtotime($row['TimeSlot9'])); ?></button>
                                </p>
                                <button style=" color: #fff;
                                                width: 80%;
                                                background: #3498db;
                                                font-size: 20px;
                                                padding:auto;
                                                border: none;
                                                margin:auto;
                                                border-radius: 25px;
                                                cursor: pointer;
                                                float:center;
                                                margin-top:8%;" data-id="<?php echo htmlspecialchars($row["Id"],ENT_QUOTES); ?>" class="detailButton"> Book an Appointment </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
       }else{
        header("location:service.php?dbError=Some error in connecting to database.");
    }
    ?>
        <!-- end Doctor -->

<script>

var btn = document.getElementsByClassName("detailButton");

for(var i=0;i<btn.length;i++){
    btn[i].addEventListener("click",function(){
      console.log(this);
var id= (this).dataset.id;
window.location='./Login.php?id='+id;

    });
}


var service = document.getElementsByClassName("service-btn");

for(var i=0;i<service.length;i++){
  service[i].addEventListener("click",function(){
    console.log(this.nextElementSibling.innerText);
    window.location.href='Service.php?select='+(this).nextElementSibling.innerText;

  });
}

</script>
