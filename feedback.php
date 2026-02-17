<?php
       include('include/connect.php');
       include('include/header.php');
       include('include/sidebar1.php')
       
        ?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>Feedbacks</h2> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                       <th>Email</th>
                        <th>Subject</th>
                         <th>Message</th>
                    </tr>
                  </thead>
                  
              <?php

$query = "SELECT * from tbl_feedback";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                               echo '<td>'. $row['name'].'</td>';
                               echo '<td>'. $row['email'].'</td>';
                               echo '<td>'. $row['subject'].'</td>';
                               echo '<td>'. $row['message'].'</td></tr>';
                              
                        } ?>
                             <div class="modal fade" id="returnConfirm<?php echo $row['map_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are You Sure You Want To Return This Equipment(s)</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Ã—</span>
            </button>
          </div>
          <div class="modal-body">Select "Return" below if you want to confirm.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-success" href="returnT.php?id=<?php echo $row['map_id'];?>">Return</a>
          </div>
        </div>
      </div>
    </div>
                         
           
                </table>
              </div>
              </div>
              <?php


              include('include/scripts.php');
       include('include/footer.php');
       
        ?>