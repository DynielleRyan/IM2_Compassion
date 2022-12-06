<?php
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
</head>
<body>
<form action="includes/signup.inc.php" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Signup</h2>
              <p class="text-white-50 mb-5">Register with Compassion!</p>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX" >Full Name</label>
                <input type="text" id="typeEmailX" name="name" class="form-control form-control-lg" placeholder="Samuel Adams"/>
                
              </div>

      
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Email</label>
                <input type="text" id="typePasswordX" name="email" placeholder="google@gmail.com" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Username</label>
                <input type="text" id="typePasswordX" name="uid" placeholder="kice28" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX" >Password</label>
                <input type="password" id="typePasswordX"name="pwd" placeholder="Password" class="form-control form-control-lg" />
              </div>
                <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX" >Confirm Password</label>
                <input type="password" id="typePasswordX"name="pwdrepeat" placeholder="Repeat Password" class="form-control form-control-lg" />
              </div>

              
                <br><br>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Register</button>
</form>
<?php

  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Fill in all Fields! </p>";
  }

    if($_GET["error"] == "invaliduid"){
      echo "<p>Choose a proper username! </p>";
    }
    if($_GET["error"] == "invalidemail"){
      echo "<p>choose a proper email! </p>";
    }

    if($_GET["error"] == "passworddoesnotmatch"){
      echo "<p>Passwords do not match! </p>";
    }

    if($_GET["error"] == "usernametaken"){
      echo "<p>username taken! </p>";
    }
    
    if($_GET["error"] == "none"){
      echo "<p>Registration is successful! </p>";
    }
  }
?>      
      

          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

</body>
</html>