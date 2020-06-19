<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/loginimg.jpg" alt="">
                </div>
                <div class="signup-form">
            <form method="POST" class="register-form" id="register-form" action="http://localhost/ERental/index.php">
                        <h2>Login</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Username :</label>
                                <input type="text" name="uname" id="uname" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">password :</label>
                                <input type="password" name="name" id="name" required/>
                            </div>
                       
                        <div class="form-submit">
                       
                    <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />




<!-- real link http://localhost/ERental/check.php-->






                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!--PHP ----PHP ----PHP ----PHP ----PHP ----PHP ----PHP ----PHP ----PHP ----PHP ----PHP -->
      <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $uname = $_POST['uname']; 
    $name = $_POST['name']; 
    $pass = $_POST['pass'];
    $course = $_POST['course']; 

$con=mysqli_connect('localhost','root','','sharda');

$query="INSERT INTO user ( uname, name, pass ,course) VALUES ('$uname','$name','$pass','$course')";


$run=mysqli_query($con,$query);
 echo "hi ",$name ;
 if ($run==TRUE) {

  echo "\n your data is inserted successfully now you able to LOGIN";
  echo $pass;
}
else
{
  echo" wrong!!!!!!!!!!!! \n please enter password and username ";
  
}
}

?>



    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
