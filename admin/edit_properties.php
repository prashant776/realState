
<?php include('./connection.php');
include('./functions/common_function.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

<?php

    if(isset($_GET['edit_properties'])){
        $edit_id = $_GET['edit_properties'];
        $get_data = "Select * from `properties` where property_id=$edit_id";
        $result = mysqli_query($con,$get_data);
        $row = mysqli_fetch_assoc($result);
        $property_title = $row['property_title'];
        $property_price = $row['property_price'];
        $property_address = $row['property_address'];
        $property_description = $row['property_description'];
        $property_bathroom = $row['property_bathroom'];
        $property_bedroom = $row['property_bedroom'];
        $property_area = $row['property_area'];        
        $property_image = $row['property_image'];
    }

?>

<div class="container mt-5">
    <h1 class="text-center">Edit Property</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-outline w-50 m-auto">
            <label for="property_title" class="form-label">Property Title</label>
            <input type="text" id="property_title" value="<?php echo $property_title ?>" name="property_title" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="property_price" class="form-label">Property Price</label>
            <input type="text" id="property_price" value="<?php echo $property_price ?>" name="property_price" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="property_address" class="form-label">Property Address</label>
            <input type="text" id="property_address" value="<?php echo $property_address ?>" name="property_address" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="property_description" class="form-label">Property Description</label>
            <input type="text" id="property_description" value="<?php echo $property_description ?>" name="property_description" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="property_bathroom" class="form-label">Property Bathrooms</label>
            <input type="text" id="property_bathroom" value="<?php echo $property_bathroom ?>" name="property_bathroom" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="property_bedroom" class="form-label">Property Bedrooms</label>
            <input type="text" id="property_bedroom" value="<?php echo $property_bedroom ?>" name="property_bedroom" class="form-control mb-4" required="required">
        </div>

        <div class="form-outline w-50 m-auto">
            <label for="property_area" class="form-label">Property Area</label>
            <input type="text" id="property_area" value="<?php echo $property_area ?>" name="property_area" class="form-control mb-4" required="required">
        </div>
        
        <div class="form-outline w-50 m-auto">
            <label for="property_image" class="form-label">Property Image</label>
            <div class="d-flex">
                <input type="file" id="property_image" name="property_image" class="form-control mb-4 w-90 m-auto">
                <img src="property_images/<?php echo $property_image ?>" alt="" width="150px">
            </div>
        </div>

        <div class="w-50 m-auto">
            <input type="submit" name="edit_property" value="Update Property" class="btn btn-info px-3 mb-3">
        </div>

    </form>
</div>


<!-- editing products -->

<?php

    if(isset($_POST['edit_property'])){
        $property_title = $_POST['property_title'];
        $property_price = $_POST['property_price'];
        $property_address = $_POST['property_address'];
        $property_description = $_POST['property_description'];
        $property_bathroom = $_POST['property_bathroom'];
        $property_bedroom = $_POST['property_bedroom'];
        $property_area = $_POST['property_area'];

        $property_image = $_FILES['property_image']['name'];

        $temp_image1 = $_FILES['property_image']['tmp_name'];
        // checking if fields are empty or not

        if($property_title=='' or $property_price=='' or $property_address=='' or $property_description=='' or $property_bathroom=='' or $property_bedroom=='' or $property_area==''){
            echo "<script>alert('Please Fill all the fields')</script>";
        }
        else{
            move_uploaded_file($temp_image1,"property_images/$property_image");

            // query to update products
            $update_product = "update `properties` set property_title='$property_title',property_price='$property_price',property_address='$property_address',property_description='$property_description',property_bathroom='$property_bathroom',property_bedroom='$property_bedroom',property_area='$property_area',property_image='$property_image',date=NOW() where property_id=$edit_id";
            $result_update = mysqli_query($con,$update_product);
            if($result_update){
                echo "<script>alert('Properties Updated Successfully')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }

?>
    
</body>
</html>