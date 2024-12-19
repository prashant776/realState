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

    <h3 class="text-center text-success">All Testimonials</h3>

    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Testimonial Id</th>
                <th>Testimonial Title</th>
                <th>Testimonial Image</th>
                <th>Testimonial Description</th>
                <th>Testimonial Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            global $con;
            $get_products = "Select * from `testimonials`";
            $result = mysqli_query($con, $get_products);
            $number = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $testimonial_id = $row['testimonial_id'];
                $testimonial_title = $row['testimonial_title'];
                $testimonial_description = $row['testimonial_description'];
                $testimonial_image = $row['testimonial_image'];
                $testimonial_name = $row['testimonial_name'];
                $number++;
            ?>

                <tr class='text-center'>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $testimonial_title; ?></td>
                    <td><img src='testimonial_images/<?php echo $testimonial_image; ?>' alt='' width="100px" height="100px" style="object-fit: cover;"></td>
                    <td style="font-size: 14px;text-align:justify;"><?php echo $testimonial_description; ?></td>
                    <td><?php echo $testimonial_name; ?></td>
                    <td><a href='index.php?edit_testimonials=<?php echo $testimonial_id ?>' class='text-light'><i class="fa fa-pencil"></i></a></td>
                    <td><a href='index.php?delete_testimonial=<?php echo $testimonial_id ?>' type="button" class="text-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-trash-o"></i></a></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete Testimonial?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="./index.php?view_testimonial" class="text-light text-decoration-none">No</a></button>
                    <button type="button" class="btn btn-primary"><a href='./index.php?delete_testimonial=<?php echo $testimonial_id ?>' class="text-light text-decoration-none">Yes, I'm Sure</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>