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
      <input type="text" id="login" class="fadeIn second" name="user" placeholder="LOGIN">
      <input type="text" id="password" class="fadeIn third" name="pwd" placeholder="PASSWORD">
      <input type="submit" class="fadeIn fourth" value="Log In" name ="sub">
    </form>
    <a href="register.php">Register? </a>
    <br>
    <br>
    <?php

if(isset($_POST["sub"]))
{
  $e= $_POST["user"];
  $p= $_POST["pwd"];
    
  
    $query= "select * from users where email='$e' and password='$p'";
    $row= mysqli_query($con,$query);
    $test= mysqli_fetch_array($row);
    if($test>0)
    {
      $n=$test['name'];
      $_SESSION['name']=$n;

      $id= $test['id'];
      $_SESSION['id']=$id;


      echo "<script>alert('Login successful')</script>";

      $_SESSION["email"]=$e;
      $_SESSION["password"]=$p;

      echo "<script>window.location.href='index.php'</script>";

    }
    else
    {
      echo "<script>alert('Try again!')</script>";
    }
}

?>


    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>