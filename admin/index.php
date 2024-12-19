<!-- Connect File -->

<?php
include('connection.php');
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Css Link -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }

        .footer {
            position: absolute;
            bottom: 0;
        }

        body {
            /* overflow-x: hidden; */
        }

        .product_img {
            width: 70px;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- First Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <h4 class="text-light">Nokhwal Property Dealer</h4>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <?php
                        if (!isset($_SESSION['username'])) {
                            echo "<script>window.open('login.php','_self')</script>";
                        } else {
                            echo "<li class='nav-item d-flex'>
                                <a class='nav-link text-light mx-5' href=''>Welcome " . $_SESSION['username'] . "</a>
                                <a href='logout.php' class='nav-link text-light bg-info my-1'>Logout</a>
                            </li>";
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <div class="container">
        <button class="my-3">
            <a href="insert_properties.php" class="nav-link text-light bg-info my-1">Insert Properties</a>
        </button>
        <button class="my-3">
            <a href="insert_testimonials.php" class="nav-link text-light bg-info my-1">Insert Testimonials</a>
        </button>
        <button class="my-3">
            <a href="index.php?view_property" class="nav-link text-light bg-info my-1">View Properties</a>
        </button>
        <button class="my-3">
            <a href="index.php?view_testimonial" class="nav-link text-light bg-info my-1">View Testimonials</a>
        </button>
    </div>

    <div class="container">
        <?php
        if (isset($_GET['view_property'])) {
            include('view_properties.php');
        }

        if (isset($_GET['view_testimonial'])) {
            include('view_testimonials.php');
        }

         if (isset($_GET['edit_properties'])) {
            include('edit_properties.php');
        }
        if (isset($_GET['edit_testimonials'])) {
            include('edit_testimonials.php');
        }
        if (isset($_GET['delete_property'])) {
            include('delete_property.php');
        }
        if (isset($_GET['delete_testimonial'])) {
            include('delete_testimonial.php');
        }

        ?>
    </div>
</body>

</html>