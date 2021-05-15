<?php 
 session_start();
 include('../database/mydb.php');
 if (!isset($_SESSION['email'])) {
   # code...
  header('Location: ../login.php');
  die();
   }

?>
<?php 
if (isset($_SESSION['email'])) {
  # code...
  $email = $_SESSION['email'];
  $sql = $con->query("SELECT lname, fname FROM users WHERE email = '$email' limit 1");
  if ($sql->num_rows != 0) {
    # code...
    while ($rows = $sql->fetch_assoc()) {
      # code...
      $lname = $rows['lname'];
      $fname = $rows['fname'];
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="user index page">
    <title>User Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
           <link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>  

<body style="background-color: #f9f9f9;">

<div class="page-wrapper chiller-theme toggled">
                      
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
       <h4 class="aim" style="text-align: center;">User Dashboard</h4> 
      
                   <h6><?php echo $lname." ".$fname; ?></h6> 
   <a href="../logout.php">
              <span><strong>LOGOUT</strong></span>
            </a>
      <hr>

      <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="zoom-in">
              <div class="box-admin">
              <a href="#" class="box-admin">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Post News</div>
                    <p class="fa-4x">6</p>
                    </div>
                    <div class="col-auto">
                    <i class="fa fa-share fa-4x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="zoom-in">
            <div class="box-admin">
              <a href="#" class="box-admin">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Aid Update</div>
                    <p class="fa-4x">xo</p>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-edit fa-3x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
          </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="zoom-in">
               <div class="box-admin">
              <a href="#" class="box-admin">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Published</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                         <p class="fa-4x">8</p>

                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-check fa-4x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="zoom-in">
                <div class="box-admin">
              <a href="#" class="box-admin">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Password</div>
                         <p class="fa-4x">xxx</p>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-check fa-4x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
          </div>

      </div>
      <br>
      <footer class="text-center">
        <div class="mb-2">
          <small>
            © 2020 made <i class="fa fa-heart" style="color:#E26E29">              
            </i> by - <a href="https://www.youtube.com/channel/UCIle0efnK15f07Wl9JFIZug?view_as=subscriber" class="footer-name" title="Developer">Henry Watters</a>
          </small>
        </div>
       
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
   
    
</body>

</html>