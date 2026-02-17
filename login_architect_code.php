 
 <?php
session_start();
// define variables and set to empty values
$Message = $Erroremail = $Errorpass = "";
 if(isset($_POST['user'])){

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $email = check_input($_POST["user"]);
  
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$email)) {
      $Erroremail = ""; 
    }
  else{
    $femail=$email;
  }
 
  $fpass = check_input($_POST["pass"]);

  if ($Erroremail!=""){
  $Message = "Login failed! Errors found";

  }
  else{
  include "include/connect.php";
 // echo $email;
  //echo $fpass;
 //$p=md5($fpass);
  $query=mysqli_query($db,"select * from tbl_architect where email='$email' && password='$fpass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  echo $num_rows;
  if ($num_rows>0){
    $Message = "Login Successful!";
	 $_SESSION['login']=$email;
  }
  else{
  $Message = "Login Failed! User not found";
  $_SESSION['errmsg']=$Message;
  
  unset($_SESSION['name']);
  session_destroy();
  include "login-client.php";
  }
  
  }
}
}

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
<?php
  if ($Message=="Login Successful!"){
    $_SESSION["name"]=$row['username'];
  $name = $row['username'];
  date_default_timezone_set("Asia/Manila"); 
  $date1 = date("Y-m-d H:i:s");

  $remarks="user $name was login"; 
  mysqli_query($db,"INSERT INTO logs(action,date_time) VALUES('$remarks','$date1')")or die(mysqli_error($db));
   // echo $Message;
   // include "index.php";
    //include "footer.php";
    ?>
<script type="text/javascript">
      alert("Login Successfull.");
      window.location = "index-architect.php";
    </script>

    <?php
  }
  else{
    echo $Message;

  }
?>