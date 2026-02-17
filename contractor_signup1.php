
 <?php
 session_start();
include "include/connect.php";
 if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
	    $pwd1 = $_POST['password'];
    $pwd2 = $_POST['cpass'];
    $contact = $_POST['cnumber'];
    $location = $_POST['location'];
    $works_at = $_POST['works_at'];
    $user_type = "contractor";
	$status="Not Approved";
    
   
 if($pwd1 == $pwd2){
        $sql2 = "select email from tbl_contractor where email = '$email'";
    $res2 = $db->query($sql2);
    
    if($res2->num_rows > 0){
     $_SESSION['errmsg']="E mail ID already exist...Choose another one";
         header("Location:contractor_signup.php");
        }else{
        
      
            $sql = "insert into tbl_contractor(username,email,password,contact_number,location,works_at,user_type,status)VALUES('$uname','$email','$pwd1','$contact','$location','$works_at','$user_type','$status')";
    
        $res = $db->query($sql);
	$_SESSION['errmsg']="Registration Successfull";
			if($res) {
				$_SESSION['errmsg']="Registration Successfull";
				
                header("Location: contractor_signup.php");
			}else{
				echo "Failed";
			}
        }

			
        }else{
        echo '<p style="color:red;">Password mismatch</p>';
    }
    
    }
 
 ?>