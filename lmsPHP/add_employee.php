<?php
require('top.inc.php');
$name='';
$email='';
$mobile='';
$reside_id='';
$address='';
$request_date='';
$id='';
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	if($_SESSION['ROLE']==2 && $_SESSION['USER_ID']!=$id){
		die('Access denied');
	}
	$res=mysqli_query($con,"SELECT * from employee where id='$id'");
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$reside_id=$row['reside_id'];
	$address=$row['address'];
	$request_date=$row['request_date'];
}
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$reside_id=mysqli_real_escape_string($con,$_POST['reside_id']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$request_date=mysqli_real_escape_string($con,$_POST['request_date']);
	if($id>0){
		$sql="update employee set name='$name',email='$email',mobile='$mobile',password='$password',reside_id='$reside_id',address='$address',request_date='$request_date' where id='$id'";
	}else{
		$sql="insert into employee(name,email,mobile,password,reside_id,address,request_date,role) values('$name','$email','$mobile','$password','$reside_id','$address','$request_date','2')";
	}
	mysqli_query($con,$sql);
	header('location:employee.php');
	die();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Modify Member</strong><small> Profile</small></div>
                        <div class="card-body card-block">
                           <form method="post">
							   <div class="form-group">
									<label class=" form-control-label">Name</label>
									<input type="text" value="<?php echo $name?>" name="name" placeholder="Enter member name" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Email</label>
									<input type="email" value="<?php echo $email?>" name="email" placeholder="Enter member email" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Mobile</label>
									<input type="text" value="<?php echo $mobile?>" name="mobile" placeholder="Enter member mobile" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Password</label>
									<input type="password"  name="password" placeholder="Enter member password" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Reside</label>
									<select name="reside_id" required class="form-control">
										<option value="">Select Reside</option>
										<?php
										$res=mysqli_query($con,"select * from department order by department desc");
										while($row=mysqli_fetch_assoc($res)){
											if($reside_id==$row['id']){
												echo "<option selected='selected' value=".$row['id'].">".$row['department']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['department']."</option>";
											}
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Address</label>
									<input type="text" value="<?php echo $address?>" name="address" placeholder="Enter member address" class="form-control" required>
								</div>
								<div class="form-group">
									<label class=" form-control-label">Pet adopt Request Date</label>
									<input type="date" value="<?php echo $request_date?>" name="request_date" placeholder="Enter Form Request Date" class="form-control" required>
								</div>
							   <?php if($_SESSION['ROLE']==1){?>
							   <button  type="submit" name="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <?php } ?>
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