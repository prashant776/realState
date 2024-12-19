
<?php include('./connection.php');
include('./functions/common_function.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimonials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

<?php

    if(isset($_GET['edit_testimonials'])){
        $edit_id = $_GET['edit_testimonials'];
        $get_data = "Select * from `testimonials` where testimonial_id=$edit_id";
        $result = mysqli_query($con,$get_data);
        $row = mysqli_fetch_assoc($result);
        $testimonial_title = $row['testimonial_title'];
        $testimonial_description = $row['testimonial_description'];
        $testimonial_image = $row['testimonial_image'];
        $testimonial_name = $row['testimonial_name'];
    }

?>

<div class="container mt-5">
    <h1 class="text-center">Edit Testimonial</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-outline w-50 m-auto">
            <label for="testimonial_title" class="form-label">Testimonial Title</label>
            <input type="text" id="testimonial_title" value="<?php echo $testimonial_title ?>" name="testimonial_title" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="testimonial_description" class="form-label">Testimonial Description</label>
            <input type="text" id="testimonial_description" value="<?php echo $testimonial_description ?>" name="testimonial_description" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="testimonial_name" class="form-label">Testimonial Name</label>
            <input type="text" id="testimonial_name" value="<?php echo $testimonial_name ?>" name="testimonial_name" class="form-control mb-4" required="required">
        </div>
        
        <div class="form-outline w-50 m-auto">
            <label for="testimonial_image" class="form-label">Testimonial Image</label>
            <div class="d-flex">
                <input type="file" id="testimonial_image" name="testimonial_image" class="form-control mb-4 w-90 m-auto">
                <img src="testimonial_images/<?php echo $testimonial_image ?>" alt="" width="150px">
            </div>
        </div>

        <div class="w-50 m-auto">
            <input type="submit" name="edit_testimonial" value="Update Testimonial" class="btn btn-info px-3 mb-3">
        </div>

    </form>
</div>


<!-- editing products -->

<?php

    if(isset($_POST['edit_testimonial'])){
        $testimonial_title = $_POST['testimonial_title'];
        $testimonial_description = $_POST['testimonial_description'];
        $testimonial_name = $_POST['testimonial_name'];

        $testimonial_image = $_FILES['testimonial_image']['name'];

        $temp_image1 = $_FILES['testimonial_image']['tmp_name'];
        // checking if fields are empty or not

        if($testimonial_title=='' or $testimonial_description=='' or $testimonial_name=='' or $testimonial_image==''){
            echo "<script>alert('Please Fill all the fields')</script>";
        }
        else{
            move_uploaded_file($temp_image1,"testimonial_images/$testimonial_image");

            // query to update products
            $update_product = "update `testimonials` set testimonial_title='$testimonial_title',testimonial_description='$testimonial_description',testimonial_image='$testimonial_image',testimonial_name='$testimonial_name',date=NOW() where testimonial_id=$edit_id";
            $result_update = mysqli_query($con,$update_product);
            if($result_update){
                echo "<script>alert('Testimonial Updated Successfully')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }

?>
    
</body>
</html>