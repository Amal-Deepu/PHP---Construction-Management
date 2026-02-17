<?php
       include('include/connect.php');
       include('include/header-client.php');
       include('include/sidebarclient.php')
       
        ?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>Quotations<a href="#" data-toggle="modal" data-target="#AddEmployee" class="btn btn-sm btn-info">Add New</a></h2> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					 <th>Date</th>
                      <th>Name</th>
                      <th>Budget</th>
                      <th>Time Duration</th>
					  <th>Address</th>
                      <th>Contact Number</th>
                      <th>Area</th>
                      <th>Status</th>
					   <th>Options</th>
                    </tr>
                  </thead>
                  
              <?php
$nam=$_SESSION["name"];
$query = "SELECT * FROM tbl_quotation where username='$nam'";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
							  echo '<td>'. $row['date'].'</td>';
                             echo '<td>'. $row['username'].'</td>';
                             echo '<td>'. $row['budget'].'</td>';
							  echo '<td>'. $row['time_duration'].'</td>';
                              echo '<td>'. $row['address'].'</td>';
                               echo '<td>'. $row['contact_number'].'</td>';
                               echo '<td>'. $row['area'].'</td>';
							    echo '<td>'. $row['status'].'</td>';
                               echo " ";
                               echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-edit fw-fa" href="#" data-toggle="modal" data-target="#UpdateQuotation'.$row['id'].'">Edit</a>';
                               ?>
 <div id="UpdateQuotation<?php echo $row['id'];?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width: 130%">
                  <div class="modal-header"><h3>Modify Quotations</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      
                        
                          <form method="POST" action="#">
						   <div class="form-group">
                            <div class="form-label-group">
                            <input type="date" id="inputName1" class="form-control" placeholder="Date" name="date" value="<?php  echo date("Y/m/d")?>"  required >
                          
                            <label for="inputName1">Date</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputName1" class="form-control" placeholder="Name" name="name" value="<?php echo $row['username']; ?>"  required >
                            <input type="hidden" id="inputName1" class="form-control" name="id" value="<?php echo $row['id']; ?>" autofocus="autofocus" required>
                            <label for="inputName1">Name</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="number" id="inputAge1" class="form-control" placeholder="budget" name="budget" value="<?php echo $row['budget']; ?>" required>
                            <label for="inputAge1">Budget</label>
                            </div>
                            </div>
							 <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputAddress1" class="form-control" placeholder="Time" value="<?php echo $row['time_duration']; ?>" name="time_duration" required>
                            <label for="inputAddress1">Time Duration</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputAddress1" class="form-control" placeholder="Address" value="<?php echo $row['address']; ?>" name="add" required>
                            <label for="inputAddress1">Address</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputContact1" class="form-control" placeholder="Contact Number" value="<?php echo $row['contact_number']; ?>" name="contact_number" required>
                            <label for="inputContact1">Contact Number</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="position" class="form-control" placeholder="Area" value="<?php echo $row['area']; ?>" name="area" required>
                            <label for="position">Area</label>
                            </div>
                            </div>
                            
                          
                 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Close
                      <span class="glyphicon glyphicon-remove-sign"></span>
                    </button>
                    <input type="submit" name="update" value="Update" class="btn btn-success">
                  </div>
                  </form>
               
</div>
</div>
              </div>
            </div>
            <?php

            if(isset($_POST['update'])){
              $id = $_POST['id'];
  $name = $_SESSION['name'];
  $budget = $_POST['budget'];
  $add = $_POST['add'];
   $time_duration = $_POST['time_duration'];
  $contact_number = $_POST['contact_number'];
  $area = $_POST['area'];


date_default_timezone_set("Asia/Manila"); 
  $date1 = date("Y-m-d H:i:s");

 $remarks="quotation by  $name was updated";  
  $query = "UPDATE tbl_quotation SET username='$name',budget='$budget',address='$add',contact_number='$contact_number',time_duration='$time_duration`',area='$area',date='$date1' WHERE id='$id' ";
                mysqli_query($db,$query)or die (mysqli_error($db));
  mysqli_query($db,"INSERT INTO logs(action,date_time) VALUES('$remarks','$date1')")or die(mysqli_error($db));

                ?>
                <script type="text/javascript">
      alert("Quotation Updated Successfully!.");
      window.location = "client_add_quotation.php";
    </script>
    <?php
}
                            echo '</td> ';
                            echo '</tr> ';

                               
                        }
                        
            ?> 
           
                </table>
              </div>
              </div>
              <div id="AddEmployee" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width: 130%">
                  <div class="modal-header"><h3>Add New Quotations</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      
                        
                          <form method="POST" action="#">
						 
							
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputName" class="form-control" placeholder="Budget" name="budget"  required>
                            <label for="inputName">Budget</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputAge" class="form-control" placeholder="Time Duration" name="time" required>
                            <label for="inputAge">Time Duration</label>
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
                            <input type="text" id="position1" class="form-control" placeholder="Square Feet" name="sqft" required>
                            <label for="position1">Total Area in Square Feet</label>
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
  $name = $_SESSION['name'];
  $budget = $_POST['budget'];
//  $date = $_POST['date'];
  $time = $_POST['time'];
  $add = $_POST['add'];
  $contact = $_POST['contact'];
  $sqft = $_POST['sqft'];

  date_default_timezone_set("Asia/Manila"); 
  $date1 = date("Y-m-d H:i:s");
$status="Not Approved";
 $remarks="Quotation by  $name was Added";  
  $query = "INSERT INTO tbl_quotation(username,budget,time_duration,address,contact_number,area,status,date)
                VALUES ('".$name."','".$budget."','".$time."','".$add."','".$contact."','".$sqft."','".$status."','".$date1."')";
                mysqli_query($db,$query)or die (mysqli_error($db));
  mysqli_query($db,"INSERT INTO logs(action,date_time) VALUES('$remarks','$date1')")or die(mysqli_error($db));

                ?>
                <script type="text/javascript">
      alert("New Quotation Added Successfully!.");
      window.location = "client_add_quotation.php";
    </script>
    <?php
}

              include('include/scripts.php');
       include('include/footer.php');
       
        ?>