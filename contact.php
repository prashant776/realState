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

        .actt {
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
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="listings">Properties</a></li>
                                <li><a href="blog">Buy / Sell</a></li>
                                <li><a href="contact" class="actt">Contact</a></li>
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
    <section class="breadcumb-area bg-img" style="background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title fadeInUpp">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09:30 AM - 8:30 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09:30 AM - 7:30 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>10:00 AM - 7:00 PM</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/phone-call-p.png" alt=""> +91 8560973712</h6>
                            <h6><img src="img/icons/envelope-p.png" alt=""> nokhwalpropertydealer@gmail.com</h6>
                            <h6><img src="img/icons/location-p.png" alt=""> Opp. Sector-17, Vridh Ashram Road, Ramdev Colony, Sri Ganganagar (Raj.)</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form id="form">
                            <div class="field form-group">
                                <input type="text" class="form-control" name="from_name" id="from_name" placeholder="Enter Your Name">
                            </div>
                            <div class="field form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number">
                            </div>
                            <div class="field form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                            </div>
                            <div class="field form-group">
                                <input type="text" class="form-control" name="message" id="message" placeholder="Enter Your Message">
                            </div>

                            <input type="submit" id="button" value="Send Message" class="btn south-btn mt-3">
                        </form>


                        <!-- <form> -->
                        <!-- <div class="form-group">
                            <input type="text" class="form-control" name="from_name" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                        </div>
                        <button onclick="SendMail();" type="submit" class="btn south-btn">Send Message</button> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.773721636907!2d73.8775387068885!3d29.90023478899639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3917b515668b0d3b%3A0xf6b9af3b3954848d!2sNokhwal%20Property%20Dealer!5e0!3m2!1sen!2sin!4v1691659964981!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- Google Maps -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script> -->
    <script src="js/map-active.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script type="text/javascript">
        emailjs.init('naVc9StqomZHCkuF8')
    </script>
    
    <script>
        const btn = document.getElementById('button');
        document.getElementById('form')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                btn.value = 'Sending...';

                const serviceID = 'default_service';
                const templateID = 'template_3zek7ir';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'Send Email';
                        alert('You Query is Submitted Successfully!');
                        window.open('contact.php', "_self");
                    }, (err) => {
                        btn.value = 'Send Email';
                        alert(JSON.stringify(err));
                    });
            });
    </script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("naVc9StqomZHCkuF8");
        })();

        function SendMail() {
            var params = {
                from_name: document.getElementById("name").value,
                phone: document.getElementById("phone").value,
                email: document.getElementById("email").value,
                message: document.getElementById("message").value
            }
            emailjs.send("service_hfcwvwp", "template_3zek7ir", params).then(function(res) {
                alert("Your Enquiry has been Submitted. We will Contact you soon");
                window.open("contact.php", "_self");
            })
        }
    </script> -->

</body>
</html>