
<?Php

$lang = "en";
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
require_once("lang/lang." . $lang . ".php");




if (isset($_GET['type'])){

$type=$_GET['type'];



}
else{
    $type=null;
}

?>



<!DOCTYPE html>
<html lang="<?php $lang ?>">
<!-- Mirrored from aipthemes.com/bizzcorpy/index-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 05:54:17 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158285582-19"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-158285582-19');
    </script>
    <meta charset="UTF-8">
    <meta name="author" content="Aip Themes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Circle Technology">
    <meta name="keywords" content="business,corporate,agency,template,html5,js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Technology</title>
    <!--// Boostrap v4 //-->
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="vendor/css/magnific.popup.min.css">
    <!--// Animate Css //-->
    <link rel="stylesheet" href="vendor/css/animate.min.css">
    <!--// Owl Carousel //-->
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <!--// Owl Carousel Default //-->
    <link rel="stylesheet" href="vendor/css/owl.carousel.default.min.css">
    <!--// Font Awesome //-->
    <link rel="stylesheet" href="fonts/font_awesome/css/all.css">
    <!--// Flat Icon //-->
    <link rel="stylesheet" href="fonts/flat_icon/flaticon.css">
    <!--// Flat Icon //-->
    <link rel="stylesheet" href="fonts/flat_icon/flaticon.css">
    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="css/style.css">
    <!--// Google Fonts //-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
</head>
<body>

    <!--// Page Wrapper Start //-->
    <div class="page-wrapper" data-scroll-index="0">

       
        <?php include('header.php');?>
        <!--// Main Area Start //-->
        <main class="main-area">

             <!--// Breadcrumb Section Start //-->
             <section class="breadcrumb-section section" data-bg-image-path="img/bg/breadcrumb-img.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="breadcrumb-inner text-center">
                                <h1><?php echo $language['our_services']; ?></h1>
                                <ul class="breadcrumb-links">
                                    <li>
                                        <a href="index.php"><?php echo $language['home']; ?></a>
                                    </li>
                                    <li class="active">
                                    <?php echo $language['our_services']; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--// .row //-->
                </div>
                <!--// .container //-->
            </section>
            <!--// Breadcrumb Section end //-->


            <!--// About Start //-->
            <section class="section" id="about">
            <?php if ($type!=null) { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 col-md-12">
                            <div class="about-inner">
                                <h4>
                                    <?php if ($type=='customized_erp_development'){
                                    echo $language['customized_erp_development'];

                                    }  elseif ($type=='mobile_application_development'){
                                        echo $language['mobile_application_development'];
                                    }
                                    elseif ($type=='custom_software_solution'){
                                        echo $language['custom_software_solution'];
                                    }
                                    ?>
                                </h4>
                                    <?php if ($type=='customized_erp_development'){
                                            echo $language['customized_erp_development_details'];

                                        }  elseif ($type=='mobile_application_development'){
                                            echo $language['mobile_application_development_details'];
                                        }
                                        elseif ($type=='custom_software_solution'){
                                            echo $language['custom_software_solution_details'];
                                        }
                                    ?>
                      
                            </div>
                        
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-12">
                            <div class="about-img">
                                <img class="img-fluid" style="height: 550px;width:100%;" src=" <?php if ($type=='customized_erp_development'){
                                      echo 'img/erp.jpg';

                                  }  elseif ($type=='mobile_application_development'){
                                      echo 'img/slider/slider3.jpg';
                                  }
                                  elseif ($type=='custom_software_solution'){
                                      echo 'img/solution.jpg';
                                  }
                                  ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </section>
            <!--// About End //-->


            <?php include('footer.php');?>

            <!--// Search Form Start //-->
            <div class="modal fade custom-modal" id="searchForm" tabindex="-1" role="dialog" aria-labelledby="searchFormLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="searchFormLabel">Search</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="https://aipthemes.com/bizzcorpy/index.html" method="POST">
                                <div class="popup-form-group mb-0">
                                    <input type="text" class="popup-form-control" name="search_form" required placeholder="Search Here *">
                                    <span class="fa fa-search"></span>
                                    <button type="submit" class="search-button" name="search_form_submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Search Form End //-->

            <!--// Get Quote Form Start //-->
            <div class="modal fade custom-modal" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteFormLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="quoteFormLabel">Get Quote</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="https://aipthemes.com/bizzcorpy/index.html" method="POST">
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_your_name" required placeholder="Your Name *">
                                    <span class="fas fa-user"></span>
                                </div>
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_your_email" required placeholder="Your E-Mail *">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_your_phone" required placeholder="Your Phone *">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <div class="popup-form-group">
                                    <input type="text" class="popup-form-control" name="get_offer_services_name" required placeholder="Services Name *">
                                    <span class="fas fa-bookmark"></span>
                                </div>
                                <div class="popup-form-group">
                                    <textarea class="popup-form-control" name="get_offer_services_special_request" required  cols="30" rows="5" placeholder="Special Request *"></textarea>
                                    <span class="fas fa-envelope-open"></span>
                                </div>
                                <div class="popup-form">
                                    <button type="submit" class="login-button" name="login_form_submit">Submit<i class="fa fa-thumbs-up"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Get Quote  Form End //-->

        </main>
        <!--// Main Area End //-->

        <a href="#" data-scroll-goto="0" class="scroll-top-btn">
            <i class="fa fa-arrow-up"></i>
        </a>
        <!--// .scroll-top-btn // -->

        <div id="preloader-wrap">
            <div class="preloader-inner">
                <div class="gooey">
                    <span class="dot"></span>
                    <div class="dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!--// Preloader // -->

    </div>
    <!--// Page Wrapper End //-->

    <!--// JQuery //-->
    <script src="vendor/js/jquery.min.js"></script>
    <!--// Images Loaded //-->
    <script src="vendor/js/images.loaded.min.js"></script>
    <!--// Magnific Popup //-->
    <script src="vendor/js/magnific.popup.min.js"></script>
    <!--// Popper Popup //-->
    <script src="vendor/js/popper.min.js"></script>
    <!--// Bootstrap //-->
    <script src="vendor/js/bootstrap.min.js"></script>
    <!--// Wow Js //-->
    <script src="vendor/js/wow.min.js"></script>
    <!--// Waypoint Js //-->
    <script src="vendor/js/waypoint.min.js"></script>
    <!--// Counter Up Js //-->
    <script src="vendor/js/counter.up.min.js"></script>
    <!--// JQuery Easing Functions //-->
    <script src="vendor/js/jquery.easing.min.js"></script>
    <!--// ScrollIt //-->
    <script src="vendor/js/scrollit.min.js"></script>
    <!--// Owl Carousel //-->
    <script src="vendor/js/owl.carousel.min.js"></script>
    <!--// Isotope Gallery //-->
    <script src="vendor/js/isotope.min.js"></script>
    <!--// Particles //-->
    <script src="vendor/js/particles.js"></script>
    <!--// Main Js //-->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from aipthemes.com/bizzcorpy/index-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 05:54:32 GMT -->
</html>