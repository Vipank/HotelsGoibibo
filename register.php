<?php
include('config.php');
session_start();

?>

<link rel="stylesheet" href="styles.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
<!--     <h2 class="inactive underlineHover">Sign Up </h2>
 -->
    <!-- Icon -->

    <div class="fadeIn first">
      <img src="image.jpg" id="icon" alt="Goibibo" />
    </div>

    <!-- Login Form -->
    <form action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="pwd" placeholder="PASSWORD">
      <input type="submit" class="fadeIn fourth" value="Register" name ="sub">
    </form>
   
    <br>
    <br>


<?php

if(isset($_POST["sub"]))
{
  $e= $_POST["email"];
  $p= $_POST["pwd"];
    
  
    $query= "INSERT INTO users(email, password, totalitems, wishlist) VALUES ('$e','$p',0,' ')";
    echo $query;
    $row = mysqli_query($con,$query) ;
    
    if($row){
       echo "New record created successfully";
       echo "<script>window.location.href='LoginPage.php'</script>";

    }else {
      echo "Error: Please try Again";
    }

    } 



?>


    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>