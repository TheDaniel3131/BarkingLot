
<div class="container-fluid">
	<form action="" id="manage-book">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<input type="hidden" name="venue_id" value="<?php echo isset($_GET['venue_id']) ? $_GET['venue_id'] :'' ?>">
		<div class="form-group">
			<label for="" class="control-label">Full Name:</label>
			<input type="text" class="form-control" name="name"  value="<?php echo isset($name) ? $name :'' ?>"   oninvalid="this.setCustomValidity('Enter User Name Here')"
  				oninput="this.setCustomValidity('')" required >
		</div> 
		<div class="form-group">
			<label for="" class="control-label">Home Address:</label>
			<textarea cols="30" rows = "5" name="address" class="form-control" required=""><?php echo isset($address) ? $address :'' ?></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email Address:</label>
			<input type="email" class="form-control" name="email"  value="<?php echo isset($email) ? $email :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact Info:</label>
			<input type="text" class="form-control" name="contact"  value="<?php echo isset($contact) ? $contact :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Arriving Time:</label>
			<input type="text" class="form-control datetimepicker" name="schedule"  value="<?php echo isset($schedule) ? $schedule :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Anything Else?</label>

			<textarea cols="30" rows = "5" required="" name="duration" class="form-control"><?php echo isset($duration) ? $duration :'' ?></textarea>			
		</div>
	</form>
</div>
<script>
	 $('.datetimepicker').datetimepicker({
	      format:'Y/m/d H:i',
	      startDate: '+3d'
	  })
	$('#manage-book').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'admin/ajax.php?action=save_book',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Event Form Request Sent.",'success')
					setTimeout(function(){
							location.href = "index.php?page=venue"
						},3500)
						end_load()
						uni_modal("","book_msg.php")
	

				}
				else{
				alert_toast("Event form is not completed.",'danger')
				setTimeout(function(){
						location.href = "index.php?page=venue"
					}, 1500000)
						end_load()
						// uni_modal("","book_msg.php")		
					
				}
			}
		})
	})
</script>