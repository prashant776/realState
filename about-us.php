<?php include('admin/connection.php');
include('admin/functions/common_function.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Nokhwal Property Dealer</title>
    <style>
        @media(max-width: 500px) {
            .emaill {
                display: none !important;
            }
        }
        .actt{
    color: white !important;
    font-weight: 600 !important;
    text-decoration: underline !important;
  }

        .emaill svg {
            color: white;
        }

        .top-header-area .phone-number .icon {
            background: #091d35 !important;
            color: white;
            padding-top: 14px !important;
        }

        .number {
            margin-left: -60px;
        }

        .number a {
            font-size: 13px !important;
            color: white !important;

        }


        .fadeInUpp {
            /* line-height: 80px !important; */
            /* font-size: 60px !important; */
            background: transparent !important;
        }
    </style>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address emaill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    <a href="mailto:nokhwalpropertydealer@gmail.com">nokhwalpropertydealer@gmail.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                    <div class="number">
                        <a href="tel:8560973712">+91 8560973712</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index"><img src="img/core-img/logo2.png" width="300" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="about-us" class="actt">About Us</a></li>
                                <li><a href="listings">Properties</a></li>
                                <li><a href="blog">Buy / Sell</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title fadeInUpp">About us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>We are here for your perfect property search</h2>
                        <p>Nokhwal Property Dealer</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="img/nokhwal-bg.jpeg" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms" style="color:black;">Welcome to Nokhwal Property Dealer!
                            At Nokhwal Property Dealer, we understand that finding your dream property or selling your valuable real estate asset is a significant life decision. That's why we are here to guide you every step of the way. With years of experience in the real estate industry, we have established ourselves as a trusted and reliable partner for all your property needs. <br><br>
                            What Sets Us Apart: <br>
                            1. <b>Market Expertise</b>: We are possesses in-depth knowledge of the local real estate market trends, ensuring that you receive accurate and up-to-date information. We provide insights that empower you to make informed decisions. <br>
                            2. <b>Personalized Approach</b>: We treat every client with personalized attention. We work closely with you to create a tailored strategy that aligns with your objectives, whether you're buying, selling, or investing. <br>
                            3. <b>Transparency</b>: Transparency is at the heart of our interactions. We believe in fostering trust by being open and honest about all aspects of the real estate process, including pricing, negotiations, and documentation. <br>
                            4. <b>Customer Satisfaction</b>: Our ultimate goal is your satisfaction. We measure our success not only by successful transactions but also by the positive experience you have while working with us. <br><br>
                            <b>Services We Offer:</b><br>
                            • <b>Property Buying and Selling</b>: Whether you're a first-time homebuyer, a seasoned investor, or looking to sell your property, we provide end-to-end assistance. <br>
                            • <b>Property Valuation</b>: Our experts help you determine the optimal market value of your property, ensuring you get the best possible deal. <br>
                            • <b>Investment Guidance</b>: Looking to invest in real estate? We offer insights into lucrative investment opportunities that align with your financial goals. <br>
                            • <b>Legal Assistance</b>: Navigating the legal aspects of real estate can be complex. Our network of legal advisors ensures a smooth and legally sound transaction process. <br>
                            • <b>Property Management</b>: For landlords and property owners, we offer comprehensive property management services, taking care of everything from tenant screening to maintenance. <br><br>
                            Thank you for considering <b>Nokhwal Property Dealer</b> as your real estate partner. Feel free to explore our listings, reach out to our team, and take the first step towards turning your real estate dreams into reality. Your journey with us is not just about properties; it's about finding your place to call home or securing your financial future. <br>
                            Sincerely,<br>
                            <b style="color: black;font-weight:800;">TARUN VERMA</b><br>
                            Founder <br> <b>Nokhwal Property Dealer</b></p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Featured Properties</h2>
                        <p>of Nokhwal Property Dealer</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                        <?php
                        getfeaturedproperties();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to Buy / Sell or rent your property?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Click Below to Reach out us</h6>
                        <a href="contact" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Meet The Founder</h2>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/tarun.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize-p.png" alt="">
                                <h2>Tarun Verma</h2>
                                <p>Founder</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call-p.png" alt=""> +91 8560973712</h6>
                                <h6><img src="img/icons/envelope-p.png" alt=""> nokhwalpropertydealer@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <!-- <img src="img/bg-img/team2.jpg" alt=""> -->
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                        <p class="wow fadeInUp" data-wow-delay="500ms" style="text-align: justify;">Meet Tarun Verma, a trailblazing young real estate broker hailing from Sri Ganganagar. At just 21 years old, he has already achieved the remarkable feat of becoming a self-made multi-lakhpati. With an unwavering determination and a passion for real estate, Tarun embarked on his entrepreneurial journey by founding Nokhwal Property Dealer.
                Driven by his goal to create history in the real estate industry, Tarun has quickly become a notable name in the field. His journey from a young enthusiast to a successful broker showcases his dedication and business acumen. Through Nokhwal Property Dealer, Tarun offers a fresh perspective and personalized approach to property buying and selling.
                With his youthful energy and a vision for the future, Tarun Verma is poised to leave an indelible mark on the real estate landscape and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="img/nokhwal-bg.jpeg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo2.png" alt="">
                            </div>
                            <p>Our Services:</p>
                            <p>BUY</p>
                            <p>SELL</p>
                            <p>RENT</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09:30 AM - 8:30 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09:30 AM - 7:30 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>10:00 AM - 7:00 PM</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call-p.png" alt=""><a href="tel:8560973712" style="color:white">+91 8560973712</a></h6>
                                <h6><img src="img/icons/envelope-p.png" alt=""><a href="mailto:nokhwalpropertydealer@gmail.com" style="color: white;">nokhwalpropertydealer@gmail.com</a></h6>
                                <h6 style="color: white;"><img src="img/icons/location-p.png" alt=""> Opp. Sector-17, Vridh Ashram Road, Ramdev Colony,<br> Sri Ganganagar (Raj.)</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="index">Home</a></li>
                                <li><a href="about-us">About us</a></li>
                                <li><a href="listings">Properties</a></li>
                                <li><a href="blog">Buy/Sell</a></li>
                                <li><a href="contact">Contact</a></li>
                                <!-- <li><a href="#">Listings</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Elements</a></li>
                                <li><a href="#">FAQ</a></li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->
                                <?php
                                getpropertyimages();
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://sumitverma.netlify.app/" target="_blank">Sumit</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>