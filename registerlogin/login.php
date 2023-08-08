<?php include'config.php';

session_start();

error_reporting(0);


if(isset($_POST['reg_user'])) {

  $username = $_POST['username'];

  $password = md5($_POST['password']);

  $errors = array();

  if (empty($username)) {

    $errors['u']= "*Username is Required";

  }

  if (empty($_POST['password'])) {

    $errors['p']= "*Password is Required";

  } 

  if (count($errors)==0){

    $sql = "SELECT * FROM users_information WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if ($result -> num_rows > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['username'] = $row['username'];

      header("location: ../index.php");

    } else {

      echo "<script>alert('Email or Password is Wrong!')</script>";
    }

  }
    if($_SESSION['username'] == 'admin'){
    header("location: ../adminindex.php");
    } 

    else if($_SESSION['username'] == 'staff'){
    header("location: ../staffindex.php");
    } 
}

?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../tabicon/icon.webp"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- External CSS -->
    <link href="registration.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Title -->
    <title>Sign in | Barking Lot's Account</title>

  </head>

    <style>
    /*preloader*/

    #preloader{
      background: #fff url('../load/equalizer.gif') no-repeat center center;
      background-size: 12.5%;


      height: 100%;
      width: 100%;

      top: 0;
      left: 0;

      position: fixed;
          display: -webkit-box;
          display: -ms-flexbox;
        display: flex;

/*
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;*/

      z-index: 999999;
      overflow: hidden;
      overflow-y: hidden /* Hide vertical scrollbar */
    }

  
    html::-webkit-scrollbar {
      width: 1rem;
      z-index: 1000;
    }

    html::-webkit-scrollbar-track {
      background: transparent;
      z-index: 1000;
    }

    html::-webkit-scrollbar-thumb {
      background: #262F3D;
      z-index: 1000;
     /* border-radius: 5rem;*/
    }
  </style>


    <!--preloader time duration adjustment-->
 <iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 <iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

 <iframe width="0" height="0" src="https://www.youtube.com/embed/H8vh29F1Ozs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <body>
      <!-- Preloader -->
  <div id="preloader"></div>

    <section class="Form my-4 mx-5">
      <br>
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-5">

            <img class="img-fluid" src="../img/pet18.jpg" alt="cover">

          </div>

          <div class="col-lg-7 px-5 pt-5">
            <br><br><br>
            <h1 class="font-weight-bold py-2" style="margin-top: -25px">Barking Lot</h1>

            <h4 class="font-h4">Login to Your Barking Lot's Account</h4>
            <br>
            <form method="post" action="" class="login-email">

              <div class="form-row">

                <div class="form-group col-lg-9">

                  <!-- <span class="details">Username</span> -->
                  <div class="input-group">

                    <div class="input-group-prepend">

                      <div class="input-group-text my-1 p-1 px-2">@</div>

                    </div>

                    <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $username; ?>" class="form-control my-1 p-2">
                  </div>
              
                  <p class="text-danger mx-auto" style="margin-bottom: 15px"><?php if(isset($errors['u'])) echo $errors['u']; ?></p>

                </div>

              </div>

              <div class="form-row">

                <div class="form-group col-lg-9">

                  <div class="input-group">

                    <!-- <div class="input-group-prepend"> -->
                      <!-- <span>Password</span> -->

                    <input type="password" name="password" placeholder="Password" id="psw" value="<?php echo $_POST['password']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 and max 20 characters." class="form-control p-2">

                    <div class="input-group-prepend">

                      <div class="input-group-text my-0 p-1 px-3">

                        <i class="bi bi-eye-slash" id="togglePassword"></i>

                      </div>

                    </div>

                  </div>

                  <p class="text-danger mx-auto" style="margin-bottom: -7px"><?php if(isset($errors['p'])) echo $errors['p']; ?></p>

                </div>

              </div>

              <!-- Login Button -->
              <div class="form-row">

                <div class="col-lg-9">

                  <button type="submit" class="btn" id="btn" name="reg_user">Login</button>
                </div>

              </div>
                <br>
                <p class="login-here">Already having an account? <b><a href="registration.php" style="color: orange;">Register Here!</a></b></p>
  
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Toggle Password Visibility -->
    <script>
      const togglePassword = document.querySelector("#togglePassword");
      const password = document.querySelector("#psw");

      togglePassword.addEventListener("click", function () {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
                
      // toggle the icon
      this.classList.toggle("bi-eye");
      });
    </script>


            <!--preloader javascript-->
            <script>
              //preloader javascript
              var loader = document.getElementById("preloader");

              window.addEventListener("load",function(){
                loader.style.display="none";

              })
            </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>