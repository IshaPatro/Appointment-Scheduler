<?php 
session_start();

// if(isset($_GET['logout'])){
    session_destroy();
    header("location:Home.php?logout=You have been logged out successfully");
// }
?>