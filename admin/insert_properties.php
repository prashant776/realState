<?php 
    include('connection.php');
    if(isset($_POST['insert_property'])){
        $property_title = $_POST['property_title'];
        $property_price = $_POST['property_price'];
        $property_address = $_POST['property_address'];
        $property_description = $_POST['property_description'];
        $property_bathroom = $_POST['property_bathroom'];
        $property_bedroom = $_POST['property_bedroom'];
        $property_area = $_POST['property_area'];

        // acessing images
        $property_image = $_FILES['property_image']['name'];

        // accessing image tmp name
        $temp_image = $_FILES['property_image']['tmp_name'];

        // checking empty condition
        if($property_title == '' or $property_price == '' or $property_address == '' or $property_description == '' or $property_bathroom == '' or $property_bedroom == '' or $property_area == '' or $property_image == ''){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        }
        else{
            move_uploaded_file($temp_image, "./property_images/$property_image");

            // insert query
            $insert_properties = "insert into `properties` (property_title,property_price,property_address, property_description,property_bathroom,property_bedroom, property_area, property_image, date) values ('$property_title', '$property_price', '$property_address', '$property_description','$property_bathroom','$property_bedroom', '$property_area', '$property_image',NOW())";
            $result_query = mysqli_query($con, $insert_properties);
            if($result_query){
                echo "<script>alert('Successfully inserted the Properties')</script>";
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
    <title>Insert Products-Admin Dashboard</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Properties</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_title" class="form-label">Property Title</label>
                <input type="text" name="property_title" id="property_title" class="form-control" placeholder="Enter Property title" autocomplete="off" required="required">
            </div>

             <!-- Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_price" class="form-label">Property Price</label>
                <input type="text" name="property_price" id="property_price" class="form-control" placeholder="Enter Property Price" autocomplete="off" required="required">
            </div>

             <!-- Address -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_address" class="form-label">Property Address</label>
                <input type="text" name="property_address" id="property_address" class="form-control" placeholder="Enter Property Address" autocomplete="off" required="required">
            </div>
            
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_description" class="form-label">Property Description</label>
                <input type="text" name="property_description" id="property_description" class="form-control" placeholder="Enter Property description" autocomplete="off" required="required">
            </div>

            <!-- bathroom -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_bathroom" class="form-label">Property Bathroom</label>
                <input type="text" name="property_bathroom" id="property_bathroom" class="form-control" placeholder="Enter Property Bathrooms" autocomplete="off" required="required">
            </div>

            <!-- bedroom -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_bedroom" class="form-label">Property Bedroom</label>
                <input type="text" name="property_bedroom" id="property_bedroom" class="form-control" placeholder="Enter Property Bedrooms" autocomplete="off" required="required">
            </div>

             <!-- area -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_area" class="form-label">Property Area</label>
                <input type="text" name="property_area" id="property_area" class="form-control" placeholder="Enter Property Area" autocomplete="off" required="required">
            </div>
            
            <!-- Image  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="property_image" class="form-label">Property Image</label>
                <input type="file" name="property_image" id="property_image" class="form-control" required="required">
            </div>

            <!-- Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_property" class="btn btn-info mb-3 px-3" value="Insert Property">
            </div>
        </form>
    </div>
</body>
</html>     