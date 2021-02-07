<?php include('dbconfig.php') ?>
<?php
session_start();


if(isset($_POST['change_password']))
{
  $email_log = $_POST['user_email'];
  $pssword_old = $_POST['user_pssword_old'];
  $pssword_new = $_POST['user_pssword_new'];
  $pssword_rep = $_POST['user_pssword_rep'];
  
  $query = mysqli_query($connection,"SELECT email,password FROM register WHERE email='$email_log' AND password='$pssword_old'");
  $query_run = mysqli_query( $query);

    if($query_run > 0)
    {
      $query = mysqli_query($connection, "UPDATE register Set password='$pssword_new'  WHERE email='$email_log'");
      $_SESSION['status'] =  "Password Chage Successfully";
      // $_SESSION['status_code'] =  "success";
      // header("Location: login.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Email Invalid/password";
      $_SESSION['status_code'] =  "error";
      header("Location: change_password.php");
    }
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user">
                <div class="form-group">
                  <input type="email" name="user_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                <div class="form-group">
                  <input type="text" name="user_pssword_old" class="form-control form-control-user" id="exampleInputEmail" placeholder="Old password">
                </div>
                <div class="form-group">
                  <input type="text" name="user_pssword_new" class="form-control form-control-user" id="exampleInputEmail" placeholder="New password">
                </div>
                <div class="form-group">
                  <input type="text" name="user_pssword_rep" class="form-control form-control-user" id="exampleInputEmail" placeholder="Repeat password">
                </div>
                </div>
                <button name ="change_password" type ="submit" class="btn btn-primary btn-user btn-block">Change password</button>
                  
                </a>
                <hr>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
