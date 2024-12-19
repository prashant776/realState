<?php include('./connection.php');
include('./functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_GET['delete_property'])){
        $delete_id = $_GET['delete_property'];
        // echo $delete_id;

        // delete query

        $delete_property = "Delete from `properties` where property_id=$delete_id";
        $result_product = mysqli_query($con,$delete_property);
        if($result_product){
            echo "<script>alert('Property Deleted Successully')</script>";
            echo "<script>window.open('index.php?view_property','_self')</script>";
        }
    }

?>

</body>
</html>