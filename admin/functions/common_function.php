<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .property-thumb-imgg {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }

        .testimonial-author-info-img {
            object-fit: cover;
        }
        @media(max-width: 500px) {
            .pad{
                padding-left: 5px;
            }
            .gp{
                /* border: 1px solid black; */
                width: 115%;
                margin-left: -20px;
            }
        }
    </style>
</head>

<body>
    <?php


    function getproperties()
    {
        global $con;

        // condition to check isset or not
        // if (!isset($_GET['category'])) {
        //     if (!isset($_GET['brand'])) {

        $select_query = "Select * from `properties` LIMIT 0,3";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $property_title = $row['property_title'];
            $property_price = $row['property_price'];
            $property_address = $row['property_address'];
            $property_description = $row['property_description'];
            $property_bathroom = $row['property_bathroom'];
            $property_bedroom = $row['property_bedroom'];
            $property_area = $row['property_area'];
            $property_image = $row['property_image'];

            echo "<div class='col-12 col-md-6 col-xl-4'>
                <div class='single-featured-property mb-50 wow fadeInUp' data-wow-delay='100ms'>
                    <!-- Property Thumbnail -->
                    <div class='property-thumb'>
                        <img src='admin/property_images/$property_image' class='property-thumb-imgg' alt=''>
                        <div class='tag'>
                            <span>For Sale</span>
                        </div>
                        <div class='list-price'>
                            <p>₹$property_price</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class='property-content'>
                        <h5>$property_title</h5>
                        <p class='location'><img src='img/icons/location-p.png' alt=''>$property_address</p>
                        <p>$property_description</p>
                        <div class='property-meta-data d-flex align-items-end justify-content-between gp'>
                            <div class='new-tag'>
                                <img src='img/icons/new-p.png' alt=''>
                            </div>
                            <div class='bathroom'>
                                <img src='img/icons/bathtub.png' alt=''>
                                <span style='margin-left:-5px;' class='pad'>$property_bathroom</span>
                            </div>
                            <div class='garage'>
                                <img src='img/icons/garage-p.png' alt=''>
                                <span style='margin-left:-5px;' class='pad'>$property_bedroom</span>
                            </div>
                            <div class='space'>
                                <img src='img/icons/space-p.png' alt=''>
                                <span>$property_area</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
    //     }
    // }










    function gettestimonials()
    {
        global $con;

        // condition to check isset or not
        // if (!isset($_GET['category'])) {
        //     if (!isset($_GET['brand'])) {

        $select_query = "Select * from `testimonials` LIMIT 0,6";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $testimonial_title = $row['testimonial_title'];
            $testimonial_description = $row['testimonial_description'];
            $testimonial_name = $row['testimonial_name'];
            $testimonial_image = $row['testimonial_image'];

            echo "<div class='single-testimonial-slide text-center'>
                <h5>$testimonial_title</h5>
                <p>$testimonial_description</p>

                <div class='testimonial-author-info'>
                    <img src='admin/testimonial_images/$testimonial_image' class='testimonial-author-info-img' alt=''>
                    <p>$testimonial_name</span></p>
                </div>
            </div>";
        }
    }
    //     }
    // }



















    function getallproperties()
    {
        global $con;

        // condition to check isset or not
        // if (!isset($_GET['category'])) {
        //     if (!isset($_GET['brand'])) {

        $select_query = "Select * from `properties`";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $property_title = $row['property_title'];
            $property_price = $row['property_price'];
            $property_address = $row['property_address'];
            $property_description = $row['property_description'];
            $property_bathroom = $row['property_bathroom'];
            $property_bedroom = $row['property_bedroom'];
            $property_area = $row['property_area'];
            $property_image = $row['property_image'];

            echo "<div class='col-12 col-md-6 col-xl-4'>
                <div class='single-featured-property mb-50 wow fadeInUp' data-wow-delay='100ms'>
                    <!-- Property Thumbnail -->
                    <div class='property-thumb'>
                        <img src='admin/property_images/$property_image' class='property-thumb-imgg' alt=''>

                        <div class='tag'>
                            <span>For Sale</span>
                        </div>
                        <div class='list-price'>
                            <p>₹ $property_price</p>
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class='property-content'>
                        <h5>$property_title</h5>
                        <p class='location'><img src='img/icons/location-p.png' alt=''>$property_address</p>
                        <p>$property_description</p>
                        <div class='property-meta-data d-flex align-items-end justify-content-between gp'>
                            <div class='new-tag'>
                                <img src='img/icons/new-p.png' alt=''>
                            </div>
                            <div class='bathroom'>
                                <img src='img/icons/bathtub.png' alt=''>
                                <span style='margin-left:-5px;' class='pad'>$property_bathroom</span>
                            </div>
                            <div class='garage'>
                                <img src='img/icons/garage-p.png' alt=''>
                                <span style='margin-left:-5px;' class='pad'>$property_bedroom</span>
                            </div>
                            <div class='space'>
                                <img src='img/icons/space-p.png' alt=''>
                                <span>$property_area</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
    //     }
    // }



    function getpropertyimages()
    {
        global $con;

        // condition to check isset or not
        // if (!isset($_GET['category'])) {
        //     if (!isset($_GET['brand'])) {

        $select_query = "Select * from `properties`";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $property_image = $row['property_image'];
            echo " <div class='single-featured-properties-slide'>
                    <a href='#'><img src='admin/property_images/$property_image' class='property-thumb-imgg' alt=''></a>
                </div>";
        }
    }




    function getfeaturedproperties()
    {
        global $con;

        // condition to check isset or not
        // if (!isset($_GET['category'])) {
        //     if (!isset($_GET['brand'])) {

        $select_query = "Select * from `properties` LIMIT 0,4";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $property_title = $row['property_title'];
            $property_price = $row['property_price'];
            $property_address = $row['property_address'];
            $property_description = $row['property_description'];
            $property_bathroom = $row['property_bathroom'];
            $property_bedroom = $row['property_bedroom'];
            $property_area = $row['property_area'];
            $property_image = $row['property_image'];

            echo "<div class='single-featured-property'>
                <div class='property-thumb'>
                    <img src='admin/property_images/$property_image' class='property-thumb-imgg' alt=''>

                    <div class='tag'>
                        <span>For Sale</span>
                    </div>
                    <div class='list-price'>
                        <p>₹$property_price</p>
                    </div>
                </div>
                <div class='property-content'>
                    <h5>$property_title</h5>
                    <p class='location'><img src='img/icons/location-p.png' alt=''>$property_address</p>
                    <p>$property_description</p>
                    <div class='property-meta-data d-flex align-items-end justify-content-between gp'>
                        <div class='new-tag'>
                            <img src='img/icons/new-p.png' alt=''>
                        </div>
                        <div class='bathroom'>
                            <img src='img/icons/bathtub.png' alt=''>
                            <span style='margin-left:-5px;' class='pad'>$property_bathroom</span>
                        </div>
                        <div class='garage'>
                            <img src='img/icons/garage-p.png' alt=''>
                            <span style='margin-left:-5px;' class='pad'>$property_bedroom</span>
                        </div>
                        <div class='space'>
                            <img src='img/icons/space-p.png' alt=''>
                            <span>$property_area</span>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }


    ?>
</body>

</html>