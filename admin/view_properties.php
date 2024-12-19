<?php include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
  </head>
<body>
    
<h3 class="text-center text-success">All Properties</h3>
    
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Property Id</th>
                <th>Property Title</th>
                <th>Property Image</th>
                <th>Property Price</th>
                <th>Property Address</th>
                <th>Property Description</th>
                <th>Property Bathrooms</th>
                <th>Property Bedrooms</th>
                <th>Property Area</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            global $con;
                $get_products = "Select * from `properties`";
                $result = mysqli_query($con,$get_products);
                $number = 0;
                while($row=mysqli_fetch_assoc($result)){
                    $property_id = $row['property_id'];
                    $property_title = $row['property_title'];
                $property_price = $row['property_price'];
                $property_address = $row['property_address'];
                $property_description = $row['property_description'];
                $property_bathroom = $row['property_bathroom'];
                $property_bedroom = $row['property_bedroom'];
                $property_area = $row['property_area'];
                $property_image = $row['property_image'];
                    $number++;
                    ?>
    
                    <tr class='text-center'>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $property_title; ?></td>
                    <td><img src='property_images/<?php echo $property_image; ?>' alt='' width="100px" height="100px" style="object-fit: cover;"></td>
                    <td><?php echo $property_price; ?></td>
                    <td><?php echo $property_address; ?></td>
                    <td style="font-size: 12px;text-align:justify;"><?php echo $property_description; ?></td>
                    <td><?php echo $property_bathroom; ?></td>
                    <td><?php echo $property_bedroom; ?></td>
                    <td><?php echo $property_area; ?></td>
                    <td><a href='index.php?edit_properties=<?php echo $property_id ?>' class='text-light'><i class="fa fa-pencil"></i></a></td>
                    <td><a href='index.php?delete_property=<?php echo $property_id ?>' type="button" class="text-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-trash-o"></i></a></td>
                </tr>
    
                <?php
                }
                ?>
    
           
        </tbody>
    </table>
    
    <!-- Modal -->
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete property?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="./index.php?view_property" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary"><a href='./index.php?delete_property=<?php echo $property_id ?>' class="text-light text-decoration-none">Yes, I'm Sure</a></button>
      </div>
    </div>
  </div>
</div>
</body>
</html>