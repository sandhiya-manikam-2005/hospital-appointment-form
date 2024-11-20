<?php
   include("config.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT * FROM login WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);
      if($count == 1) {
	  // session_register("myemail");
         $_SESSION['login_user'] = $myemail;
         header("location: register.php");
      }
else {
        echo "<script>alert('The email or password you entered is invalid.'); window.location='index.php';</script>";;
    }
}
?>