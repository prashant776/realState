<?php include('connection.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap Css Link -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            
            <div class="col-lg-6 col-xl-4">
            <form action="" method="post">
                    <!-- username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your Username" autocomplete="off" required="required" name="user_username">
                    </div>
                     <!-- password field -->
                     <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your Password" autocomplete="off" required="required" name="user_password">
                    </div> 

                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <!-- <p class="small fw-bold mt-2 pt-1">Don't have an account? <a href="registration.php" class="text-danger">Register</a></p> -->
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>


<?php

    if(isset($_POST['user_login'])){
        $user_username = $_POST['user_username']; 
        $user_password = $_POST['user_password']; 
        $select_query="Select * from `admin_table` where username='$user_username'";
        $result = mysqli_query($con,$select_query);
        $row_count = mysqli_num_rows($result);
        $row_data = mysqli_fetch_assoc($result);
        // $user_ip = getIPAddress();

        // cart item
        // $select_query_cart = "Select * from `cart_details` where ip_address='$user_ip'";
        // $select_cart = mysqli_query($con,$select_query_cart);
        // $row_count_cart = mysqli_num_rows($select_cart);

        if($row_count>0){
            $_SESSION['username'] = $user_username;
            if(password_verify($user_password,$row_data['admin_password'])){
                    $_SESSION['username'] = $user_username;
                   echo "<script>alert('Login Successfull')</script>";
                   echo "<script>window.open('./index.php','_self')</script>";
            }
            else{
                echo "<script>alert('Invalid Credentials')</script>";
            }
        }
        else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }

?>