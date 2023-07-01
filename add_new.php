<?php
include "db_conn.php";
if(isset($_POST['submit'])){
    $first_name = $_POST['$first_name'];
    $last_name = $_POST['$last_name'];
    $email = $_POST['$email'];
    $gender = $_POST['$gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`)
     VALUES (NULL,'$first_name','$last_name','$email','$gender')";

     $result = mysqli_query($conn, $sql);

     if($result){
        header("Location: index.php?msg=New record created successfully");
     }else {
        echo "Failed. " .mysqli_error($conn);
     }
}

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<title>PHP Crud Application</title>
    </head>
    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
        style="background-color: seagreen;">
            PHP Crd Application
        </nav>
    <div class="container">
        <div class="text-center mb-4">
            <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      '.$msg.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                        </button>
                </div>';
                  }
            ?>
        <h3>Add New User</h3>
        <p class="text-muted">Complete the form below to add new user</p>

        </div>
        <div class="container d-flex justify-content-center">
            <form action="" merhod="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name:</label></label>
                        <input type="text" class="form-control" name="fist-name"
                        placeholder="Albert">
                    </div>
                    <div class="col">
                        <label class="form-label">Last Name:</label></label>
                        <input type="text" class="form-control" name="last-name"
                        placeholder="Einstein">
                    </div>
                </div>
                <div class="mb-3">
                
                    <label class="form-label">Email:</label></label>
                    <input type="text" class="form-control" name="fist-name"
                    placeholder="name@example.com">
                    
                </div>
                <div class="form-group mb-3">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male"value="male">
                    <label for="male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input" name="gender" id="female"value="female">
                    <label for="female" class="form-input-label">Female</label>
                </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>