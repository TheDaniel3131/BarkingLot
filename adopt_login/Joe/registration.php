<?php 

include 'config.php';
  error_reporting(0);

  session_start();
  
  if (isset($_POST['reg_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $country = $_POST['country'];
    $homeaddress = $_POST['homeaddress'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $dob = $_POST['dob'];

    $errors = array();

    if (empty($username)) {
      $errors['u']= "*Username is Required";
    }
    if (empty($email)) {
      $errors['e']= "*Email is Required";
    }
    if (empty($phonenumber)) {
      $errors['phone']= "*Phone_Num is Required";
    }
    if (empty($country)) {
      $errors['c']= "*Country is Required";
    }
    if (empty($homeaddress)) {
      $errors['h']= "*Home-Address is Required";
    }
    if (empty($_POST['password'])) {
      $errors['p']= "*Password is Required";
    }
    if (empty($_POST['cpassword'])) {
      $errors['cp']= "*C-Password is Required";
    }
    if (empty($dob)) {
      $errors['d']= "*Birth of Birth is Required";
    }


    if (count($errors)==0){
      if ($password == $cpassword) {
        $u = "SELECT * FROM users_information WHERE username='$username'";
        $uu = mysqli_query($con, $u);
        if (!$uu -> num_rows > 0) {
          $sql = "SELECT * FROM users_information WHERE email='$email'";
          $result = mysqli_query($con, $sql);
            if (!$result -> num_rows > 0) {
                $sql = "INSERT INTO  users_information (username, email, phonenumber, country, homeaddress, password, dob) VALUES ('$username', '$email', '$phonenumber', '$country', '$homeaddress', '$password', '$dob')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                  echo "<script>alert('User Registration Completed.')</script>";
                  $username = "";
                  $email = "";
                  $phonenumber = "";
                  $country = "";
                  $homeaddress = "";
                  $_POST['password'] = "";
                  $_POST['cpassword'] = "";
                  $dob = "";
                  // success location
                  header('location: login.php');
                } else {
                  echo "<script>alert('Something wrong were.')</script>";
                }
            } else {
              echo "<script>alert('Email Already Exists.')</script>";
            }
          } else {
            echo "<script>alert('Username Already Exists.')</script>";
          }
      } else {
          echo "<script>alert('Password Not Matched.')</script>";
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- togglePassword Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- External CSS -->
    <link href="registration.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Title -->
    <title>Create Your Barking Lot's Account</title>
  </head>

  <body>
    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-5">
            <img class="img-fluid" src="img/pet18.jpg" alt="cover">
          </div>
          <div class="col-lg-7 px-5 pt-5">
            <h1 class="font-weight-bold py-2" style="margin-top: -25px">Barking Lot</h1>
            <h4 class="font-h4">Create Your Barking Lot's Account</h4>
            <form method="post" action="registration.php">
              <div class="form-row">
                <div class="form-group col-lg-9">
                  <!-- <span class="details">Username</span> -->
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text my-1 p-1 px-2">@</div>
                    </div>
                    <input type="text" name="username" placeholder="Username" id="username" class="form-control my-1 p-2" title="Enter Your Username" value="<?php echo $username; ?>" >
                  </div>
                  <p class="text-danger mx-auto" style="margin-bottom: -7px"><?php if(isset($errors['u'])) echo $errors['u']; ?></p>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-9"> 
                  <!-- <span>Email</span> -->
                  <input type="email" name="email" placeholder="Email-address" id="email" class="form-control p-2" title="Enter Your Email" value="<?php echo $email; ?>" >
                  <p class="text-danger mx-auto" style="margin-bottom: -7px"><?php if(isset($errors['e'])) echo $errors['e']; ?></p>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-5">
                  <!-- <span>Phone Number</span> -->
                  <input type="tel" step="1" placeholder="Phone Number" name="phonenumber" id="phone" class="form-control p-2" title="Enter Your Phone Number" value="<?php echo $phonenumber; ?>" >
                  <!-- pattern="[0-9]{3}-[0-9]{6-11}" <small id="phoneHelpInline" class="text-muted">*Format:123-4567890</small> -->
                </div>
                <div class="form-group col-md-4">
                  <!-- <span>Nationality</span> -->
                  <select class="form-control  p-2" name="country" id="country" title="Select a Country" value="<?php echo $country; ?>">
                    <option disabled selected value>Select a country</option>
                    <option value="my">Malaysia</option>
                    <option value="sg">Singapora</option>
                  </select>
                </div>
                <p class="col-md-5 text-danger" style="margin-top: -15px; line-height: 1.1"><?php if(isset($errors['phone'])) echo $errors['phone']; ?></p>
                <p class="col-md-4 text-danger" style="margin-top: -15px; line-height: 1.1"><?php if(isset($errors['c'])) echo $errors['c']; ?></p>
              </div>
              
              <!-- <p class="text-danger mx-auto" style="margin-bottom: -7px"></p> -->
              <div class="form-row">
                <div class="form-group col-lg-9">
                  <!-- <span>Home Address</span> -->
                  <input type="text" name="homeaddress" placeholder="Home Address" id="homeaddress" class="form-control p-2" title="Enter Your Home Address" value="<?php echo $homeaddress; ?>" >
                  <p class="text-danger mx-auto" style="margin-bottom: -7px"><?php if(isset($errors['h'])) echo $errors['h']; ?></p>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-5">
                  <!-- <div class="input-group"> -->
                    <!-- <div class="input-group-prepend"> -->
                    <!-- <span>Password</span> -->
                    <input type="password" name="password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 and max 20 characters" class="form-control p-2" data-toggle="password" value="<?php echo $_POST['password']; ?>" >
                    <!-- <div class="input-group-prepend">
                      <div class="input-group-text my-0 p-1 px-2">
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                      </div>
                    </div> -->
                  <!-- </div> -->
                </div>
                <div class="form-group col-md-4">
                  <!-- <div class="input-group"> -->
                    <!-- <div class="input-group-prepend"> -->
                    <!-- <span>Re-type Password</span> -->
                      <input type="password" name="cpassword" placeholder="Confirm" id="psw" class="form-control p-2" title="Must Enter the same password" value="<?php echo $_POST['cpassword']; ?>" >
                      <!-- <div class="input-group-text my-0 p-1 px-2">
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                      </div> -->
                    <!-- </div> -->

                  <!-- </div> -->
                </div>

                <p class="col-md-5 text-danger" style="margin-top: -15px; line-height: 1.1"><?php if(isset($errors['p'])) echo $errors['p']; ?></p>
                <p class="col-md-4 text-danger" style="margin-top: -15px; line-height: 1.1"><?php if(isset($errors['cp'])) echo $errors['cp']; ?></p>
                <!-- <input type="checkbox" onclick="myFunction()">Show Password -->
                <small id="passwordHelpInline" class="text-muted col-lg-9">*Use at least 8 or max 20 characters with a mix of uppercase and lowercase letters, numbers & symbols</small>
                <!-- </div> -->
              </div>
              <div class="form-row">
                <div class="form-group col-lg-9 my-1">
                  <!-- <span>Date of Birth</span> -->
                  <label class="dob">
                    <input type="date" name="dob" id="date" class="form-control p-2" title="Enter Your Date of Birth" value="<?php echo $dob; ?>"  pattern="\d{4}-\d{2}-\d{2}">
                    <span class="validity"></span>
                    <p class="text-danger mx-auto" style="margin-bottom: -7px"><?php if(isset($errors['d'])) echo $errors['d']; ?></p>
                  </label>

                </div>
              </div>

              <!-- Terms and Conditions -->
              <!-- <div class="form-row">
                <div class="form-group col-lg-8">
                  <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
              </div> -->
                <!-- Register button -->
              <div class="form-row">
                <div class="col-lg-9">
                  <button type="submit" class="btn" id="btn" name="reg_user">Register</button>
                </div>
              </div>
  
                <p class="login-here">Already having an account? <b><a href="login.php">Login Here!</a></b></p>
  
              </form>
            </div>
          </div>
        </div>
      </section>


              <script>
                var myInput = document.getElementById("psw");
          
                // When the user starts to type something inside the password field
                myInput.onkeyup = function() {
                  // Validate lowercase letters
                  var lowerCaseLetters = /[a-z]/g;
                  if(myInput.value.match(lowerCaseLetters)) {  
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                  } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                  }
                  
                  // Validate capital letters
                  var upperCaseLetters = /[A-Z]/g;
                  if(myInput.value.match(upperCaseLetters)) {  
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                  } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                  }
                
                  // Validate numbers
                  var numbers = /[0-9]/g;
                  if(myInput.value.match(numbers)) {  
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                  } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                  }
                  
                  // Validate min-length
                  if(myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                  } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                  }
                }
              </script>

              <!-- Toggle Password Visibility -->
<!--               <script>
                const togglePassword = document.querySelector("#togglePassword");
                const password = document.querySelector("#psw");

                togglePassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
            
                // toggle the icon
                this.classList.toggle("bi-eye");
                });
              </script> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
      $(function(){
        $('#btn').click(function(e){

          var valid = this.form.checkValidity();

          if (valid){
            var username    = $('#username').val();
            var email       = $('#email').val();
            var phone       = $('#phone').val();
            var country     = $('#country').val();
            var homeaddress = $('#homeaddress').val();
            var password    = $('#psw').val();
            // var cpassword   = $('#psw').val();
            var date         = $('#date').val();

            e.preventDefault();

            $.ajax({
              type: 'POST',
              url: 'process.php',
              data: {username: username, email: email, phone: phone, country: country, homeaddress: homeaddress, psw: password, date: date},
              success: function(data){
                Swal.fire(
                  'Successful', 
                  'You have Successfully Registered!',
                  'success'
                )
                // swal("Good job!", "You clicked the button!", "success");
              }，
              error: function(data){
                Swal.fire(
                  'Errors',
                  'There were something wrong. Please check again!',
                  'error'
                )
                // swal("Good job!", "You clicked the button?!", "success");
              }
            });
          } else{

          }
        });

      });
    </script> -->
  </body>
</html>