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
    if(isset($_GET['delete_testimonial'])){
        $delete_id = $_GET['delete_testimonial'];
        // echo $delete_id;

        // delete query

        $delete_testimonial = "Delete from `testimonials` where testimonial_id=$delete_id";
        $result_product = mysqli_query($con,$delete_testimonial);
        if($result_product){
            echo "<script>alert('Testimonial Deleted Successully')</script>";
            echo "<script>window.open('index.php?view_testimonial','_self')</script>";
        }
    }

?>

</body>
</html>