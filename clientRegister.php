<?php
require_once("connection.php");

if(!isset($_POST['sub'])){
    header("location:Login.php?log1=Click register button");
}else if(!$con){
    header("location:Login.php?dbError=Cannot connect to network");
} else if(empty($_POST['Uname']) || empty($_POST['pass1']) || empty($_POST['pass2']) || empty($_POST['email'])){
    header("location:Login.php?empty1=Fill all fields11.");
} else if(strcmp($_POST['pass1'],$_POST['pass2']) != 0){
    header("location:Login.php?match=Passwords do not match");
}else{

$emailCheck = "select email from client where email='".$_POST['email']."'";
$res1 = mysqli_query($con,$emailCheck);
$result2 = mysqli_fetch_assoc($res1);
if($result2){
    header("location:Login.php?exist=Email already exist");
}else{
$query1 = "SELECT * FROM client ORDER BY ID DESC LIMIT 1";
$res = mysqli_query($con,$query1);
$result1=mysqli_fetch_assoc($res);

$count = $result1["Id"]+1;

echo $count;
$query = "insert into client (Id,Username,Password,email) values (".$count.",'".$_POST['Uname']."','".$_POST['pass1']."','".$_POST['email']."');";

if( mysqli_query($con,$query)){
    header("location:Login.php?success=You have been registered successfully!".$result2);

}else{
    header("location:Login.php?dbFailed=There was a problem in registering you.".$count);
}

}
}


?>