
  
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
                                <h1><?php echo $language['product_page']; ?></h1>
                                <ul class="breadcrumb-links">
                                    <li>
                                        <a href="index.php"><?php echo $language['home']; ?></a>
                                    </li>
                                    <li class="active">
                                    <?php echo $language['product_page']; ?>
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
                                <?php if ($type=='logical_erp'){
                                    echo $language['logical_erp'];

                                    }  elseif ($type=='pharma_erp'){
                                        echo $language['pharma_erp'];
                                    }
                                    elseif ($type=='ngo_erp'){
                                        echo $language['ngo_erp'];
                                    }
                                    elseif ($type=='hospital_pro'){
                                        echo $language['hospital_pro'];
                                    }
                                    elseif ($type=='diagnostic_pro'){
                                        echo $language['diagnostic_pro'];
                                    }
                                    elseif ($type=='telemedicine_apps'){
                                        echo $language['telemedicine_apps'];
                                    }
                                ?>
                                </h4>
                                <?php if ($type=='logical_erp'){
                                        echo $language['logical_erp_details'];

                                    }  elseif ($type=='pharma_erp'){
                                        echo $language['pharma_erp_details'];
                                    }
                                    elseif ($type=='ngo_erp'){
                                        echo $language['ngo_erp_details'];
                                    }
                                    elseif ($type=='hospital_pro'){
                                        echo $language['hospital_pro_details'];
                                    }
                                    elseif ($type=='diagnostic_pro'){
                                        echo $language['diagnostic_pro_details'];
                                    }
                                    elseif ($type=='telemedicine_apps'){
                                        echo $language['telemedicine_apps_details'];
                                    }
                                ?>
                      
                            </div>
                        
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-12">
                            <div class="about-img">
                                <img class="img-fluid" style="height: 550px;width:100%;" src="<?php if ($type=='logical_erp'){
                                        echo 'img/logic.png';

                                    }  elseif ($type=='pharma_erp'){
                                        echo 'img/pharma.jpg';
                                    }
                                    elseif ($type=='ngo_erp'){
                                        echo 'img/ngo.jpg';
                                    }
                                    elseif ($type=='hospital_pro'){
                                        echo 'img/hospital.jpg';
                                    }
                                    elseif ($type=='diagnostic_pro'){
                                        echo 'img/Diagnostic .jpg';
                                    }
                                    elseif ($type=='telemedicine_apps'){
                                        echo 'img/telimadicine.jpg';
                                    }
                                ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </section>
            <!--// About End //-->
             <!--// Projects Detail Start //-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                           
                          
                            <div class="comment-block-mt">
                                <h5 class="inner-header-title">Comments <span>(02)</span></h5>  
                                <div class="comments-wrap">
                                    <div class="comments-item-wrap">
                                        <div class="comments-item">
                                            <img class="img-fluid" src="img/blog/comment-img-1.jpg" alt="Comment image">
                                            <div class="media-body">
                                                <div class="comment-header">
                                                    <h6>William Rouse</h6>
                                                    <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    It is a long established fact that a reader will be 
                                                    distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="comments-item sub-comment">
                                            <img class="img-fluid" src="img/blog/comment-img-3.jpg" alt="Comment image">
                                            <div class="comment-body">
                                                <div class="comment-header">
                                                    <h6>Andrew Towar</h6>
                                                    <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    It is a long established fact that a reader will be 
                                                    distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-item-wrap">
                                        <div class="comments-item">
                                            <img class="img-fluid" src="img/blog/comment-img-2.jpg" alt="client-img">
                                            <div class="media-body">
                                                <div class="comment-header">
                                                    <h6>Daniel Gonzalez</h6>
                                                    <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    It is a long established fact that a reader will be 
                                                    distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-comment-wrapper comment-block-mt">
                                <h5 class="inner-header-title">Leave A Comment</h5>
                                <form action="https://aipthemes.com/bizzcorpy/portfolio-details.html" method="post">
                                    <div class="row">
                                        <div class="comment-form-group col-md-12">
                                            <input type="text" class="comment-form-control" placeholder="Your Name *" required="">
                                            <span class="fa fa-user"></span>
                                        </div>
                                        <div class="comment-form-group col-md-12">
                                            <textarea class="comment-form-control text-area" name="message" cols="30" rows="5" placeholder="Your Comment *"></textarea>
                                            <span class="fa fa-envelope-open"></span>
                                        </div>
                                        <div class="comment-form-group mb-0 col-md-12">
                                            <button type="submit" class="primary-outline-btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                                </br></br>
            <!--// Projects Detail End //-->


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









  <?php include('footer.php');?>
  <script type="text/javascript" src="assets/popper/popper.min.js"></script>
  <script type="text/javascript" src="assets/tether/tether.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/smoothscroll/smooth-scroll.js"></script>
  <script type="text/javascript" src="assets/dropdown/js/nav-dropdown.js"></script>
  <script type="text/javascript" src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script type="text/javascript" src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script type="text/javascript" src="assets/playervimeo/vimeo_player.js"></script>
  <script type="text/javascript" src="assets/theme/js/script.js"></script>
  <script type="text/javascript" src="assets/formoid/formoid.min.js"></script>
  
</body>
</html>