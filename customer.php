<?php
session_start();
require_once("connection.php");


if(!isset($_POST['sub']))
{
    header("location:Login.php?log=You are not allowed in this page");

}
else if(!empty($_POST['Uname']) || !empty($_POST['pass'])){
if($con){
    echo "connected";
    $query="select * from login where Name='".$_POST['Uname']."' and password='".$_POST['pass']."';";
    echo "helloq".$query;
    $result = mysqli_query($con,$query);
    $res = mysqli_fetch_assoc($result);
    if($res){
        $_SESSION['UserName']=$_POST['Uname'];
        $_SESSION['Id']=$res['ID'];
        header("location:Customer/service.php");
        // header("location:Home.php?log=Logged In");

    }else{
        header("location:Login.php?data=Username or password is wrong ");
    }
}else{
   header("location:Login.php?dbError=Unable to connect to server");

}
}else{

    header("location:Login.php?empty=Please Enter both username and password");
}
?>
