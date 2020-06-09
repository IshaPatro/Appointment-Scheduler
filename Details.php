<?php
require_once("connection.php");

$query="select * from appointers where id=".$_GET['id'];

$result = mysqli_query($data,$query);
    $res=mysqli_fetch_assoc($result)
    
    ?>
<!-- html yaha lik de -->

<h4>Name:<?php echo $res['Name']; ?> </h4>
<h4>Category <?php echo $res['Category']; ?></h4>
<h4>Service <?php echo $res['Service']; ?></h4>
  

  
