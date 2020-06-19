<?php
$con=mysqli_connect('localhost','root','','sharda');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   $name = $_POST['uname']; 
    $pass = $_POST['pass'];
    
    
    $sql = "SELECT * FROM user WHERE name = '$name' and pass = '$pass'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    echo $count;

    if($count != 0){
    	echo "true";
      header("location: index.php");
    }
    else{
    	echo "wrong!!!!!!!!!!!! go back to login page";

    }
    





 }     
?>