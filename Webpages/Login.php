<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <title>login.php</title>
</head>
<body>
<form action="../includes/login.inc.php" method="post">

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Login to Compassion!</p>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX" >Email</label>
                <input type="email" id="typeEmailX" name="uid" placeholder="Username/Email" class="form-control form-control-lg"/>
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX" >Password</label>
                <input type="password" id="typePasswordX" name ="pwd" placeholder="Password" class="form-control form-control-lg" />
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit" value="submit">Login</button>
              
            </form> 
            
              <?php
                 if(isset($_GET["error"])){
                  if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all Fields! </p>";
                }
              
                  if($_GET["error"] == "wronglogin"){
                    echo "<p>incorrect login information! </p>";
                  }
                }
              ?>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>      
</section>
</body>
</html>