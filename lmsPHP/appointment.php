<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	mysqli_query($con,"delete from `appointment` where id='$id'");
}
if(isset($_GET['type']) && $_GET['type']=='update' && isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$status=mysqli_real_escape_string($con,$_GET['status']);
	mysqli_query($con,"update `appointment` set appoint_status='$status' where id='$id'");
}
if($_SESSION['ROLE']==1){ 
	$sql="select `appointment`.*, employee.name,employee.id as eid from `appointment`,employee where `appointment`.employee_id=employee.id order by `appointment`.id desc";
}else{
	$eid=$_SESSION['USER_ID'];
	$sql="select `appointment`.*, employee.name ,employee.id as eid from `appointment`,employee where `appointment`.employee_id='$eid' and `appointment`.employee_id=employee.id order by `appointment`.id desc";
}
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Pet Adopt Appointment Status </h4>
                           <br>
						    <?php if($_SESSION['ROLE']==2){ ?>
						   <h4 class="box_title_link"><a href="add_appointment.php">Add Appointment Request </a> </h4>
						   <?php } ?>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       <th width="5%">ID</th>
									   <th width="15%">Member Name</th>
                                       <th width="14%">Book Date</th>
									   <th width="14%">Book Time</th>
									   <th width="15%">Comment</th>
									   <th width="18%">Request Status</th>
									   <!--<th width="14%">Link</th>-->
									   <th width="10%"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
                                       <td><?php echo $i?></td>
									   <td><?php echo $row['id']?></td>
									   <td><?php echo $row['name'].' ('.$row['eid'].')'?></td>
                                       <td><?php echo $row['book_date']?></td>
									   <td><?php echo $row['book_time']?></td>
									   <td><?php echo $row['commnet']?></td>
									   <td>
										   <?php
											if($row['appoint_status']==1){
												echo "Applied";
											}if($row['appoint_status']==2){
												echo "Approved";
											}if($row['appoint_status']==3){
												echo "Rejected";
											}
										   ?>
										   <?php if($_SESSION['ROLE']==1){ ?>
										   <select class="form-control" onchange="update_appoint_status('<?php echo $row['id']?>',this.options[this.selectedIndex].value)">
											<option value="">Update Status</option>
											<option value="2">Approved</option>
											<option value="3">Rejected</option>
										   </select>
										   <?php } ?>
									   </td>
									   
									   
									   </td>
									   <td>
									   <?php
									   if($row['appoint_status']==1){ ?>
									   <a href="appointment.php?id=<?php echo $row['id']?>&type=delete">Delete</a>
									   <?php } ?>
									   
									   
									   </td>
									   
                                    </tr>
									<?php 
									$i++;
									} ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         <script>
		 function update_appoint_status(id,select_value){
			window.location.href='appointment.php?id='+id+'&type=update&status='+select_value;
		 }
		 </script>
<?php
require('footer.inc.php');
?>