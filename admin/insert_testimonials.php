<?php 
    include('connection.php');
    if(isset($_POST['insert_testimonial'])){
        $testimonial_title = $_POST['testimonial_title'];
        $testimonial_name = $_POST['testimonial_name'];
        $testimonial_description = $_POST['testimonial_description'];

        // acessing images
        $testimonial_image = $_FILES['testimonial_image']['name'];

        // accessing image tmp name
        $temp_image = $_FILES['testimonial_image']['tmp_name'];

        // checking empty condition
        if($testimonial_title == '' or $testimonial_name == '' or $testimonial_description == '' or $testimonial_image == ''){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        } 
        else{
            move_uploaded_file($temp_image, "./testimonial_images/$testimonial_image");

            // insert query
            $insert_testimonials = "insert into `testimonials` (testimonial_title,testimonial_description,testimonial_image,testimonial_name, date) values ('$testimonial_title','$testimonial_description','$testimonial_image','$testimonial_name',NOW())";
            $result_query = mysqli_query($con, $insert_testimonials);
            if($result_query){
                echo "<script>alert('Successfully inserted the Testimonial')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Testimonials-Admin Dashboard</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Testimonials</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="testimonial_title" class="form-label">Testimonial Title</label>
                <input type="text" name="testimonial_title" id="testimonial_title" class="form-control" placeholder="Enter Testimonial title" autocomplete="off" required="required">
            </div>
            
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="testimonial_description" class="form-label">Testimonial Description</label>
                <input type="text" name="testimonial_description" id="testimonial_description" class="form-control" placeholder="Enter Testimonial description" autocomplete="off" required="required">
            </div>
            
            <!-- Image  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="testimonial_image" class="form-label">Testimonial Image</label>
                <input type="file" name="testimonial_image" id="testimonial_image" class="form-control" required="required">
            </div>

             <!-- Name  -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="testimonial_name" class="form-label">Testimonial Name</label>
                <input type="text" name="testimonial_name" id="testimonial_name" class="form-control" placeholder="Enter Testimonial Name" autocomplete="off" required="required">
            </div>

            <!-- Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_testimonial" class="btn btn-info mb-3 px-3" value="Insert Testimonial">
            </div>
        </form>
    </div>
</body>
</html>     