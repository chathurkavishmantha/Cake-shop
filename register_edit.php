<?php include('dbconfig.php') ?>
<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile </h6>
  </div>

  <div class="card-body">

  <?php

    $connection = mysqli_connect("localhost", "root", "", "adminpanel");

    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
    
        $query = "SELECT * FROM admin WHERE id= '$id'";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
            ?>

            
          <form action="code.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="edit_id" value=" <?php echo $row['id'] ?>">
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="edit_username" class="form-control" value=" <?php echo $row['username'] ?>" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" class="form-control" value=" <?php echo $row['email'] ?>" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="edit_password" class="form-control" value=" <?php echo $row['password'] ?>" placeholder="Enter Password">
                </div>
                <div class="modal-footer">
                    <a href = "register.php" class="btn btn-danger">Cancel</a>
                    <button  type="submit" class="btn btn-primary" name="updatebtn">Update</button>
                </div>
          </form>

        <?php


        }

  
    }

  ?>


   
    </form>
  
  </div>
  </div>
</div>

</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>