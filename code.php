<?php include('dbconfig.php') ?>
<?php include('security.php');

session_start();


if(isset($_POST['registerbtn']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];

 
    $query = "INSERT INTO admin (username , email, password) VALUES ('$username' , '$email', '$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      $_SESSION['status'] =  "Register Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: register.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Register Not Successfully";
      $_SESSION['status_code'] =  "error";
      header("Location: register.php");
    }
  
  
}

//user register

if(isset($_POST['user_registerbtn']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];

 
    $query = "INSERT INTO register (username , email, password) VALUES ('$username' , '$email', '$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      $_SESSION['status'] =  "USer Register Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: login.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Register Not Successfully";
      $_SESSION['status_code'] =  "error";
      header("Location: user_register.php");
    }
  
  
}

//user admin register

if(isset($_POST['user_view_registerbtn']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];

 
    $query = "INSERT INTO register (username , email, password) VALUES ('$username' , '$email', '$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      $_SESSION['status'] =  "USer Register Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: user_view_register.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Register Not Successfully";
      $_SESSION['status_code'] =  "error";
      header("Location: 404.php");
    }
  
  
}


// Admin Update data

  if(isset($_POST['updatebtn']))
  {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE admin SET username='$username', email='$email', password='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      $_SESSION['status'] =  "Data Update Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: register.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Data Not Update Successfully";
      $_SESSION['status_code'] =  "error";
      header("Location: register.php");
    }
  }

  // user Update data

  if(isset($_POST['user_updatebtn']))
  {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      $_SESSION['status'] =  "Data Update Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: user_view_register.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Data Not Update Successfully";
      $_SESSION['status_code'] =  "error";
      header("Location: register.php");
    }
  }


  // Admin Delete data

  if(isset($_POST['delete_id']))
  {
    $delete_id = $_POST['delete_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "DELETE FROM admin   WHERE id='$delete_id'";
     $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
      $_SESSION['status'] =  "Data Delete Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: register.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Data Not Update Successfully";
      $_SESSION['status_code'] =  "error";
      header("Location: register.php");
    }
  }

   // User Delete data

   if(isset($_POST['user_delete_id']))
   {
     $delete_id = $_POST['user_delete_id'];
     $username = $_POST['edit_username'];
     $email = $_POST['edit_email'];
     $password = $_POST['edit_password'];
 
     $query = "DELETE FROM register WHERE id='$delete_id'";
      $query_run = mysqli_query($connection, $query);
 
     if($query_run)
     {
       $_SESSION['status'] =  "Data Delete Successfully";
       $_SESSION['status_code'] =  "success";
       header("Location: user_view_register.php");
       exit ;
       // echo "registerd successfully";
     }
     else
     {
       $_SESSION['status'] =  "Data Not Update Successfully";
       $_SESSION['status_code'] =  "error";
       header("Location: register.php");
     }
   }





    
// admin Login



if(isset($_POST['login_btn']))
  {
    $email_log = $_POST['email'];
    $pssword_log = $_POST['password'];
    
    $query = "SELECT * FROM admin WHERE email='$email_log' AND password='$pssword_log'";
    $query_run = mysqli_query($connection, $query);

      if(mysqli_fetch_array($query_run))
      {
        $_SESSION['username'] = $email_log;
        $_SESSION['status'] =  "Login Successfully";
        $_SESSION['status_code'] =  "success";
        header("Location: register.php");
        exit ;
        // echo "registerd successfully";
      }
      else
      {
        $_SESSION['status'] =  "Email or Password Invalid";
        $_SESSION['status_code'] =  "error";
        header("Location: login.php");
      }
    }


    //Login user



if(isset($_POST['login_btn']))
{
  $email_log = $_POST['email'];
  $pssword_log = $_POST['password'];
  
  $query = "SELECT * FROM register WHERE email='$email_log' AND password='$pssword_log'";
  $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
      $_SESSION['username'] = $email_log;
      $_SESSION['status'] =  "Login Successfully";
      $_SESSION['status_code'] =  "success";
      header("Location: cake/index1.php");
      exit ;
      // echo "registerd successfully";
    }
    else
    {
      $_SESSION['status'] =  "Email or password Invalid";
      $_SESSION['status_code'] =  "error";
      header("Location: login.php");
    }
  }


   
  ?>