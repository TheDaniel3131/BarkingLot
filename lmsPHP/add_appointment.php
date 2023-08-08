<?php
require('top.inc.php');

if(isset($_POST['submit'])){
	$book_date=mysqli_real_escape_string($con,$_POST['book_date']);
	$book_time=mysqli_real_escape_string($con,$_POST['book_time']);
	$employee_id=$_SESSION['USER_ID'];
	$commnet=mysqli_real_escape_string($con,$_POST['commnet']);
	$sql="insert into `appointment`(book_date,book_time,employee_id,commnet,appoint_status) values('$book_date','$book_time','$employee_id','$commnet',1)";
	mysqli_query($con,$sql);
	header('location:appointment.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Appointment</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <form method="post">
							   <div class="form-group">
									<label class=" form-control-label">Booking Date</label>
									<input type="date" name="book_date"  class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Booking Time</label>
									<input type="time" name="book_time"  class="form-control" required>
								</div>			

								<div class="form-group">
									<label class=" form-control-label">Comment</label>
									<input type="text" name="commnet" placeholder="Anything to add on....." class="form-control" >
								</div>
								
								 <button  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							  </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                  
<?php
require('footer.inc.php');
?>