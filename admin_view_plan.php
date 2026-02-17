<?php
       include('include/connect.php');
       include('include/header.php');
       include('include/sidebar1.php')
       
        ?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>Plan Details</h2> 
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
					   <th>Options</th>
					   <th>Delete</th>
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
							   <td><a href="admin_view_plan.php?id=<?php echo $row['id']?>&appr=approve" onClick="return confirm('Are you sure you want to Approve?')">Approve</a>&nbsp;&nbsp;&nbsp;
												<a href="admin_view_plan.php?id=<?php echo $row['id']?>&rej=rejected" onClick="return confirm('Are you sure you want to 	Reject?')">Reject</a></td>
												<td >
												<div class="center">
						
													&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="admin_view_plan.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</i></a>
								</div></td>
 <div id="UpdateQuotation<?php echo $row['id'];?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
 <?php
						}
if(isset($_GET['del']))
		  {
		          mysqli_query($db,"delete from tbl_plan where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data deleted !!";
		  }
		  if(isset($_GET['appr']))
		  {
		          mysqli_query($db,"update tbl_plan set status='Approved' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Approved !!";
	
	  }
	    if(isset($_GET['rej']))
		  {
		          mysqli_query($db,"update tbl_plan set status='Rejected' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Data Rejected !!";
		  }
           ?> 
                <!-- Modal content-->
                <div class="modal-content" style="width: 130%">
                  <div class="modal-header"><h3>Modify Quotations</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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
            