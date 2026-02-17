<?php
       include('include/connect.php');
       include('include/header-client.php');
       include('include/sidebarclient.php')
       
        ?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>List of Architect(s)</h2><!--<a href="#" data-toggle="modal" data-target="#AddEquipment" class="btn btn-sm btn-info">Add New</a></h2> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Name</th>
					  <th>Contact Number</th>
                      <th>Location</th>
                     <th>Works At</th>
					 <th>Qualification</th>
                      <th>Status</th>
                     
                    </tr>
                  </thead>
                  
              <?php

$query = "SELECT * FROM tbl_contractor";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                             echo '<td>'. $row['username'].'</td>';
							
                             echo '<td>'. $row['contact_number'].'</td>';
                             echo '<td>'. $row['location'].'</td>';
							  echo '<td>'. $row['works_at'].'</td>';
							
                              // echo '<td>'. $row['quantity'].'</td>';
                              //  echo '<td>'. $row['available_quantity'].'</td>';
                               echo '<td>'. $row['status'].'</td>';
                            

                               ?>
							  
							   <form name="form1" method="post" action="">
							   
							   <br>
							   <table>
							   <tr>
							   <td>
							   <textarea name="message" ></textarea>
							   </td>
							   </tr>
							   <tr>
							   <td colspan="2"><input type="submit" name="submit" value="Send Message">
							   </tr>
							   </table>
							   </form>
							    <?php
							     if(isset($_POST['submit'])){
									 $msg=$_POST["message"];
									  $to=$row["username"];
									  $name = $_SESSION['name'];
									  mysqli_query($db,"INSERT INTO tbl_message(from1,to1,message) VALUES('$name','$to','$msg')")or die(mysqli_error($db));
									  echo "Message sent Successfully";
								 }
						}
							   ?>
                               <div id="UpdateEquipment" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width: 130%">
                  <div class="modal-header"><h3>Modify Equipment</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      
                        
                          <form method="POST" action="#">
                            <div class="form-group">
                            <div class="form-label-group">
                              <input type="hidden" id="inputName1" class="form-control" value="<?php echo $row['equip_id']; ?>" name="id" autofocus="autofocus" required>
                            <input type="text" id="inputName1" class="form-control" placeholder="Name" value="<?php echo $row['name']; ?>" name="name" autofocus="autofocus" required>
                            <label for="inputName1">Name</label>
                            </div>
                            </div>
                            <select name="category" class="form-control" id="selectType">
                            <option disabled>--Select Category--</option>
                            <option value="<?php echo $row['category']; ?>">HEAVY</option>
                            <option value="<?php echo $row['category']; ?>">NOT HEAVY</option>
                            </select><br>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="number" hidden id="inputQty1" class="form-control" placeholder="Quantity" name="qty" value="<?php echo $row['quantity']; ?>" required>
                            <!-- <label for="inputQty1">Quantity</label> -->
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="number" hidden id="inputQty1" class="form-control" name="avail_qty" value="<?php echo $row['available_quantity']; ?>" required>
                            <!-- <label for="inputQty1">Available Quantity</label> -->
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="number" id="inputQty1" class="form-control" name="status" value="<?php echo $row['status']; ?>">
                            <label for="inputQty1">Status</label>
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
              
                
           
                </table>
              </div>
              </div>

              <div id="AddEquipment" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width: 130%">
                  <div class="modal-header"><h3>Add New Equipment</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      
                        
                          <form method="POST" action="#">
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputNamee" class="form-control" placeholder="Code" name="code" autofocus="autofocus" required>
                            <label for="inputNamee">Code</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" autofocus="autofocus" required>
                            <label for="inputName">Name</label>
                            </div>
                            </div>
                            <select name="category" class="form-control" id="selectType">
                            <option disabled>--Select Category--</option>
                            <option value="HEAVY">HEAVY</option>
                            <option value="NOT HEAVY">NOT HEAVY</option>
                            </select><br>
                            <div class="form-group">
                            <div class="form-label-group">
                            <input type="number" id="inputQty" value="1" hidden class="form-control" placeholder="Quantity" name="qty" required>
                           <!--  <label for="inputQty">Quantity</label> -->
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
             