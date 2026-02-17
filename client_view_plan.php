<?php
       include('include/connect.php');
       include('include/header-client.php');
       include('include/sidebarclient.php')
       
        ?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>Plan Details<a href="#" data-toggle="modal" data-target="#AddEmployee" class="btn btn-sm btn-info">Add New</a></h2> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					 <th>Date</th>
                      <th>Budget</th>
                      <th>Time Duration</th>
					  <th>Bedrooms</th>
                      <th>Bathroom</th>
					   <th>Kitchen</th>
                      <th>Area</th>
                      <th>Status</th>
					  
                    </tr>
                  </thead>
                  
              <?php
$nam=$_SESSION["name"];
$query = "SELECT * FROM tbl_plan ";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
							  echo '<td>'. $row['date'].'</td>';
                               echo '<td>'. $row['budget'].'</td>';
							  echo '<td>'. $row['time_duration'].'</td>';
                              echo '<td>'. $row['bedroom'].'</td>';
							    echo '<td>'. $row['bathroom'].'</td>';
								  echo '<td>'. $row['kitchen'].'</td>';
                               
                               echo '<td>'. $row['area'].'</td>';
							    echo '<td>'. $row['status'].'</td>';
                               echo " ";
                              //echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-edit fw-fa" href="#" data-toggle="modal" data-target="#UpdateQuotation'.$row['id'].'">Edit</a>';
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
                            <input type="text" id="inputName1" class="form-control" placeholder="Budget" name="budget" value="<?php echo $row['budget']; ?>"  required >
                            <input type="hidden" id="inputName1" class="form-control" name="id" value="<?php echo $row['id']; ?>"required>
                            <label for="inputName1">Budget</label>
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
                            <input type="text" id="inputAddress1" class="form-control" placeholder="Bedroom" value="<?php echo $row['bedroom']; ?>" name="bedroom" required>
                            <label for="inputAddress1">BedRoom</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputContact1" class="form-control" placeholder="Bath Room" value="<?php echo $row['bathroom']; ?>" name="bathroom" required>
                            <label for="inputContact1">Bathroom</label>
                            </div>
                            </div>
							  <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputContact1" class="form-control" placeholder="Kitchen" value="<?php echo $row['kitchen']; ?>" name="kitchen" required>
                            <label for="inputContact1">Kitchen</label>
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
   $time_duration = $_POST['time_duration'];
  $bedroom = $_POST['bedroom'];
  $bathroom = $_POST['bathroom'];
  $kitchen = $_POST['kitchen'];
 
  $area = $_POST['area'];

//////////////////////////////////////////////////////////////////////
date_default_timezone_set("Asia/Manila"); 
  $date1 = date("Y-m-d H:i:s");

 $remarks="plan by  $name was updated";  
  $query = "UPDATE tbl_plan SET username='$name',date='$date1',budget='$budget',time_duration='$time_duration',bedroom='$bedroom',bathroom='$bathroom',kitchen='$kitchen',area='$area',status='$status' WHERE id='$id' ";
                mysqli_query($db,$query)or die (mysqli_error($db));
  mysqli_query($db,"INSERT INTO logs(action,date_time) VALUES('$remarks','$date1')")or die(mysqli_error($db));

                ?>
                <script type="text/javascript">
      alert("Plan Updated Successfully!.");
      window.location = "architect_add_plan.php";
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
                  <div class="modal-header"><h3>Add New Plan</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      
                        
                          <form method="POST" action="#" >
						 
							
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputName" class="form-control" placeholder="Budget" name="budget"  required>
                            <label for="inputName">Budget</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputTime" class="form-control" placeholder="Time Duration" name="time" required>
                            <label for="inputTime">Time Duration</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputAddress" class="form-control" placeholder="bedroom" name="bedroom" required>
                            <label for="inputAddress">BedRoom</label>
                            </div>
                            </div>
							  <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputBathroom" class="form-control" placeholder="bathroom" name="bathroom" required>
                            <label for="inputBathroom">BathRoom</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputContact" class="form-control" placeholder="kitchenr" name="kitchen" required>
                            <label for="inputContact">Kitchen</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="position1" class="form-control" placeholder="Square Feet" name="sqft" required>
                            <label for="position1">Total Area in Square Feet</label>
                            </div>
                            </div>
                           <!--  <div class="form-group">
<label for="fess">
 Add file(if any)
</label>
<input type="file" name="image" class="form-control"  placeholder="" >
</div>-->
                          
                 
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
  $bedroom = $_POST['bedroom'];
  $bathroom = $_POST['bathroom'];
  $kitchen = $_POST['kitchen'];
//  $contact = $_POST['contact'];
  $sqft = $_POST['sqft'];
/////////////////////////////////////////



///////////////////////////////////////////
  date_default_timezone_set("Asia/Manila"); 
  $date1 = date("Y-m-d H:i:s");
$status="Not Approved";
 $remarks="Plan by  $name was Added";  
  $query = "INSERT INTO tbl_plan(date,username,budget,time_duration,bedroom,bathroom,kitchen,area,status)
                VALUES ('".$date1."','".$name."','".$budget."','".$time."','".$bedroom."','".$bathroom."','".$kitchen."','".$sqft."','".$status."')";
                mysqli_query($db,$query)or die (mysqli_error($db));
  mysqli_query($db,"INSERT INTO logs(action,date_time) VALUES('$remarks','$date1')")or die(mysqli_error($db));

                ?>
                <script type="text/javascript">
      alert("New Plan Added Successfully!.");
      window.location = "architect_add_plan.php";
    </script>
    <?php
}

              include('include/scripts.php');
       include('include/footer.php');
       
        ?>