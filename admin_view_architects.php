<?php
       include('include/connect.php');
       include('include/header.php');
       include('include/sidebar1.php')
       
        ?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>List of Architects(s)</h2> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>Email ID</th>
                      <th>Contact Number</th>
                      <th>Location</th>
					  <th>Works At</th>
                      <th>qualification</th>
                      <th>Status</th>
                      <th>Options</th>
					   <th>Delete</th>
                    </tr>
                  </thead>
                  
              <?php

$query = "SELECT * FROM tbl_architect";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                             echo '<td>'. $row['username'].'</td>';
                             echo '<td>'. $row['email'].'</td>';
                              echo '<td>'. $row['contact_number'].'</td>';
                               echo '<td>'. $row['location'].'</td>';
							   echo '<td>'. $row['works_at'].'</td>';
                               echo '<td>'. $row['qualification'].'</td>';
                               echo '<td>'. $row['status'].'</td>';
                             //  echo " ";
							 
                             //  echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-edit fw-fa" href="#" data-toggle="modal" data-target="#UpdateEmployee'.$row['emp_id'].'">Edit</a>';
                               ?>
<td><a href="admin_view_architects.php?id=<?php echo $row['id']?>&appr=approve" onClick="return confirm('Are you sure you want to Approve?')">Approve</a>&nbsp;&nbsp;&nbsp;
	<a href="admin_view_architects.php?id=<?php echo $row['id']?>&rej=rejected" onClick="return confirm('Are you sure you want to 	Reject?')">Reject</a></td>
												<td >
												<div class="center">
						
													&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="admin_view_architects.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</i></a>
								</div></td>
            <?php
						}
if(isset($_GET['del']))
		  {
		          mysqli_query($db,"delete from tbl_architect where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data deleted !!";
		  }
		  if(isset($_GET['appr']))
		  {
		          mysqli_query($db,"update tbl_architect set status='Approved' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Approved !!";
	
	  }
	    if(isset($_GET['rej']))
		  {
		          mysqli_query($db,"update tbl_architect set status='Rejected' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Rejected !!";
		  }
           ?> 
           
                </table>
              </div>
              </div>
              <div id="AddEmployee" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width: 130%">
                  <div class="modal-header"><h3>Add New Employee</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      
                        
                          <form method="POST" action="#">
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" autofocus="autofocus" required>
                            <label for="inputName">Name</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="number" id="inputAge" class="form-control" placeholder="Age" name="age" required>
                            <label for="inputAge">Age</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputAddress" class="form-control" placeholder="Address" name="add" required>
                            <label for="inputAddress">Address</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputContact" class="form-control" placeholder="Contact Number" name="contact" required>
                            <label for="inputContact">Contact Number</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="position1" class="form-control" placeholder="Position" name="position" required>
                            <label for="position1">Position</label>
                            </div>
                            </div>
                            
                          
                 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Close
                      <span class="glyphicon glyphicon-remove-sign"></span>
                    </button>
                    <input type="submit" name="submit" value="Save" class="btn btn-success">
                  </div>
                  </form>
               
</div>
</div>
              </div>
            </div>
              <?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $add = $_POST['add'];
  $contact = $_POST['contact'];
  $position = $_POST['position'];

  date_default_timezone_set("Asia/Manila"); 
  $date1 = date("Y-m-d H:i:s");

 $remarks="employee $name was Added";  
  $query = "INSERT INTO employees(name,age,address,contact_number,position)
                VALUES ('".$name."','".$age."','".$add."','".$contact."','".$position."')";
                mysqli_query($db,$query)or die (mysqli_error($db));
  mysqli_query($db,"INSERT INTO logs(action,date_time) VALUES('$remarks','$date1')")or die(mysqli_error($db));

                ?>
                <script type="text/javascript">
      alert("New Employee Added Successfully!.");
      window.location = "employees.php";
    </script>
    <?php
}

              include('include/scripts.php');
       include('include/footer.php');
       
        ?>