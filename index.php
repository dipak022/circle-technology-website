<?php
// include language configuration file based on selected language

$lang = "en";
if (isset($_GET['lang']) &&  ($_GET['lang']=='en' || $_GET['lang']=='jp')) {
  $lang = $_GET['lang'];
}
require_once("lang/lang." . $lang . ".php");
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

            <!--// Hero Section Start //-->
            <section class="hero-banner" data-bg-image-path="img/solution.jpg">
                <div id="heroparticles"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 col-md-10">
                            <div class="hero-inner">
                               
                                <h1><?php echo $language['home_heading_two']; ?></h1>
                                <p>
                                   
                                </p>
                                <!-- <a href="#" class="default-primary-btn"><span>Get Offer</span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Hero Section End //-->

            <!--// Top Address info Start //-->
            <section class="top-adres-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 hero-info-item-wrap">
                            <div class="hero-info-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="text">
                                    <h6>Address:</h6>
                                    <span><?php echo $language['addressone'] ?>,</br><?php echo $language['addresstwo'] ?>.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 hero-info-item-wrap">
                            <div class="hero-info-item">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="text">
                                    <h6>Call Us:</h6>
                                    <span><?php echo $language['mobileone'] ?>,</br><?php echo $language['mobiletwo'] ?>.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hero-info-item-wrap">
                            <div class="hero-info-item">
                                <i class="fa fa-envelope-open-text"></i>
                                <div class="text">
                                    <h6>Email:</h6>
                                    <span><a href="info@circle-technology.com"><?php echo $language['mail'] ?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>     
            <!--// Top Address info End //-->

            <!--// About Start //-->
            <section class="section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 col-md-12">
                            <div class="about-inner">
                                <h4>20+ <?php echo $language['about']; ?> <strong><?php echo $language['customer']; ?></strong> <?php echo $language['satisfaction']; ?></h4>
                                <p>
                                     <?php echo $language['home_details_one']; ?>
                                </p>
                                <p>
                                     <?php echo $language['home_details_two']; ?>
                                </p>
                                <p>
                                    <?php echo $language['home_details_three']; ?>
                                </p>
                      
                            </div>
                            
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-12">
                            <div class="about-img">
                                <img src="img/erp.jpg" style="height: 550px;width:100%;" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About End //-->

            <!--// Services Start //-->
            <section class="section bg-grey pb-minus-70" id="services"> 
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="section-heading">
                                <h4> <?php echo $language['our_services']; ?></h4>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    
                                    <img class="flaticon-007-thinking front-icon" style="width:100%;height: 100%; padding:20px; border: 0px solid white;border-radius: 50px;" src="img/erp.jpg" >
                                   
                                </div>
                                <div class="services-body">
                                    <h6><?php echo $language['customized_erp_development']; ?></h6>
                                    <p>
                                    <?php
                                        $aa =strip_tags($language['customized_erp_development_details']);
                                        if ($lang=='en'){
                                            echo substr($aa, 0, 97).".....";
                                        }
                                        else if ($lang=='jp'){
                                            echo substr($aa, 0, 120).".....";
                                        }
                                    ?> 
                                    </p>
                                    <a class="primary-outline-btn" href="services.php?lang=<?php echo $lang ?>&type=customized_erp_development" target="_blank"><?php  echo $language['more'];?><i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                <img class="flaticon-007-thinking front-icon" style="width:100%;height:220px; padding:20px; border: 0px solid white;border-radius: 50px;" src="img/slider/slider3.jpg" >
                                </div>
                                <div class="services-body">
                                    <h6><?php  echo $language['mobile_application_development'];?></h6>
                                    <p>
                                    <?php
                                        $aa =strip_tags($language['mobile_application_development_details']);
                                        if ($lang=='en'){
                                            echo substr($aa, 0, 97).".....";
                                        }
                                        else if ($lang=='jp'){
                                            echo substr($aa, 0, 120).".....";
                                        }
                                        ?> 
                                    </p>
                                    <a class="primary-outline-btn" href="services.php?lang=<?php echo $lang ?>&type=mobile_application_development" target="_blank"><?php  echo $language['more'];?><i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                <img class="flaticon-007-thinking front-icon" style="width:100%;height:100%; padding:20px; border: 0px solid white;border-radius: 50px;" src="img/solution.jpg" >
                                </div>
                                <div class="services-body">
                                    <h6><?php echo $language['custom_software_solution']; ?></h6>
                                    <p>
                                    <?php
                                        $aa =strip_tags($language['custom_software_solution_details']);
                                        if ($lang=='en'){
                                            echo substr($aa, 0, 97).".....";
                                        }
                                        else if ($lang=='jp'){
                                            echo substr($aa, 0, 120).".....";
                                        }
                                        ?>
                                    </p>
                                    <a class="primary-outline-btn" href="services.php?lang=<?php echo $lang ?>&type=custom_software_solution" target="_blank"><?php  echo $language['more'];?><i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
            </section>
            <!--// Services End //-->



            <!--// Our Projects Start //-->
            <section class="section" id="our-projects">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4> <?php echo $language['products']; ?></h4>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-projects-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="projects-item">
                            <div class="projects-inner">
                                <img src="img/logic.png" style="width:100%;height:400px;" alt="Projects image" class="img-fluid">
                                <div class="project-detail">
                                    <div class="project-title">
                                        <h6><a href="our-products.php?lang=<?php echo $lang ?>&type=logical_erp"><?php echo $language['logical_erp']; ?></a></h6>
                                    </div>
                                    <a class="project-detail-btn" href="our-products.php?lang=<?php echo $lang ?>&type=logical_erp"><i class="fa fa-arrow-right"></i></a>
                        </div>
                            </div>
                        </div> 
                    </div>
                    <div class="item">
                        <div class="projects-item">
                            <div class="projects-inner">
                                <img src="img/telimadicine.jpg" style="width:100%;height:400px;" alt="Projects image" class="img-fluid">
                                <div class="project-detail">
                                    <div class="project-title">
                                        <h6><a href="our-products.php?lang=<?php echo $lang ?>&type=telemedicine_apps"><?php echo $language['telemedicine_apps']; ?></a></h6>
                                    </div>
                                    <a class="project-detail-btn" href="our-products.php?lang=<?php echo $lang ?>&type=telemedicine_apps"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="item">
                        <div class="projects-item">
                            <div class="projects-inner">
                                <img src="img/pharma.jpg" style="width:100%;height:400px;" alt="Projects image" class="img-fluid">
                                <div class="project-detail">
                                    <div class="project-title">
                                        <h6><a href="our-products.php?lang=<?php echo $lang ?>&type=pharma_erp"><?php echo $language['pharma_erp']; ?></a></h6>
                                    </div>
                                    <a class="project-detail-btn" href="our-products.php?lang=<?php echo $lang ?>&type=pharma_erp"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="item">
                        <div class="projects-item">
                            <div class="projects-inner">
                                <img src="img/ngo.jpg" style="width:100%;height:400px;" alt="Projects image" class="img-fluid">
                                <div class="project-detail">
                                    <div class="project-title">
                                        <h6><a href="our-products.php?lang=<?php echo $lang ?>&type=ngo_erp"><?php echo $language['ngo_erp']; ?></a></h6>
                                    </div>
                                    <a class="project-detail-btn" href="our-products.php?lang=<?php echo $lang ?>&type=ngo_erp"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="item">
                        <div class="projects-item">
                            <div class="projects-inner">
                                <img src="img/hospital.jpg" style="width:100%;height:400px;" alt="Projects image" class="img-fluid">
                                <div class="project-detail">
                                    <div class="project-title">
                                        <h6><a href="our-products.php?lang=<?php echo $lang ?>&type=hospital_pro"><?php echo $language['hospital_pro']; ?></a></h6>
                                    </div>
                                    <a class="project-detail-btn" href="our-products.php?lang=<?php echo $lang ?>&type=hospital_pro"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="item">
                        <div class="projects-item">
                            <div class="projects-inner">
                                <img src="img/Diagnostic .jpg" style="width:100%;height:400px;" alt="Projects image" class="img-fluid">
                                <div class="project-detail">
                                    <div class="project-title">
                                        <h6><a href="our-products.php?lang=<?php echo $lang ?>&type=diagnostic_pro"><?php echo $language['diagnostic_pro']; ?></a></h6>
                                    </div>
                                    <a class="project-detail-btn" href="our-products.php?lang=<?php echo $lang ?>&type=diagnostic_pro"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!--// Our Projects End //-->

            <!--// Our Team Start //-->
            <section class="section bg-grey" id="our-team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-10">
                            <div class="section-heading">
                                <h4><?php echo $language['our_team']; ?></h4>
                                <p>
                                    <?php echo $language['team_details_one'];?>
                                </p>
                                <p>
                                    <?php echo $language['team_details_two'];?>
                                </p>
                                <p>
                                    <?php echo $language['team_details_three'];?>
                                </p>
                                <p>
                                    <?php echo $language['team_details_four'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="team-item">
                                <div class="team-inner">
                                    <img src="img/furkan_hossain.jpg" alt="Team image" class="img-fluid">
                                    <div class="team-detail">
                                        <div class="team-social">
                                            <i class="fa fa-share-alt"></i>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="team-text">
                                            <h6><?php echo $language['furkan_hossain']; ?></h6>
                                            <span><?php echo $language['head_of_strategies']; ?></span>
                                            <a class="primary-outline" href="team-details.php?lang=<?php echo $lang ?>&type=furkan_hossain" target="_blank"><?php  echo $language['more'];?></a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="item">
                            <div class="team-item">
                                <div class="team-inner">
                                    <img src="img/fakrul_hasan.jpg" alt="Team image" class="img-fluid">
                                    <div class="team-detail">
                                        <div class="team-text">
                                        <h6><?php echo $language['fakrul_hasan']; ?></h6>
                                            <span><?php echo $language['head_of_operations']; ?></span>
                                            <a class="primary-outline" href="team-details.php?lang=<?php echo $lang ?>&type=fakrul_hasan" target="_blank"><?php  echo $language['more'];?></a>
                                        </div>
                                        <div class="team-social">
                                            <i class="fa fa-share-alt"></i>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="item">
                            <div class="team-item">
                                <div class="team-inner">
                                    <img src="img/md_miarul_islam.jpg" alt="Team image" class="img-fluid">
                                    <div class="team-detail">
                                        <div class="team-text">
                                            <h6><?php echo $language['md_miarul_islam']; ?></h6>
                                            <span><?php echo $language['head_of_technology']; ?></span>
                                            <a class="primary-outline" href="team-details.php?lang=<?php echo $lang ?>&type=md_miarul_islam" target="_blank"><?php  echo $language['more'];?></a>
                                        </div>
                                        <div class="team-social">
                                            <i class="fa fa-share-alt"></i>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="item">
                            <div class="team-item">
                                <div class="team-inner">
                                    <img src="img/md_masudur_rahman.jpg" alt="Team image" class="img-fluid">
                                    <div class="team-detail">
                                        <div class="team-text">
                                            <h6><?php echo $language['md_masudur_rahman']; ?></h6>
                                            <span><?php echo $language['head_of_product_quality']; ?></span>
                                            <a class="primary-outline" href="team-details.php?lang=<?php echo $lang ?>&type=md_masudur_rahman" target="_blank"><?php  echo $language['more'];?></a>
                                        </div>
                                        <div class="team-social">
                                            <i class="fa fa-share-alt"></i>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!--// Our Team End //-->

            <!--// Services Start //-->
            <section class="section bg-grey pb-minus-70" id="services"> 
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h4><?php echo $language['technology']; ?></h4>
                                
                                <p>
                                 <?php echo $language['technology_details_one']; ?>. 
                                </p>
                                <p>
                                   <?php echo $language['technology_details_two']; ?>.
                                </p>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <span class="flaticon-007-thinking back-icon"></span>
                                    <span class="flaticon-007-thinking front-icon"></span>
                                </div>
                                <div class="services-body">
                                    <h6> <?php echo $language['web_technology']; ?></h6>
                                    <p>
                                         <?php echo $language['web_technology_details']; ?>. 
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <span class="flaticon-014-profit back-icon"></span>
                                    <span class="flaticon-014-profit front-icon"></span>
                                </div>
                                <div class="services-body">
                                    <h6> <?php echo $language['mobile_platform']; ?></h6>
                                    <p>
                                         <?php echo $language['mobile_platform_details']; ?>. 
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <span class="flaticon-013-research back-icon"></span>
                                    <span class="flaticon-013-research front-icon"></span>
                                </div>
                                <div class="services-body">
                                    <h6> <?php echo $language['dashboard']; ?></h6>
                                    <p>
                                         <?php echo $language['dashboard_details']; ?>. 
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <span class="flaticon-017-money-bag back-icon"></span>
                                    <span class="flaticon-017-money-bag front-icon"></span>
                                </div>
                                <div class="services-body">
                                    <h6> <?php echo $language['database']; ?></h6>
                                    <p>
                                         <?php echo $language['database_details']; ?>. 
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 box-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <span class="flaticon-004-handshake back-icon"></span>
                                    <span class="flaticon-004-handshake front-icon"></span>
                                </div>
                                <div class="services-body">
                                    <h6> <?php echo $language['other_technologies']; ?></h6>
                                    <p>
                                         <?php echo $language['other_technologies_details']; ?>. 
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </section>
            <!--// Services End //-->

            <!--// Testimonial Start //-->
            <section class="section" id="testimonial">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4>What Our Clients Say ?</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content of a page when looking at its layout. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-inner">
                                    <div class="testimonial-img">
                                        <img src="img/testimonial/testimonial-img-1.jpg" alt="Testimonial image" class="img-fluid">
                                        <div class="client-detail">
                                            <h6>William Rouse</h6>
                                            <span>Envato Customer</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <div class="testimonial-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, 
                                            but the majority have suffered alteration in some form, by injected humour, 
                                            or randomised words which don't look even slightly believable. 
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-inner">
                                    <div class="testimonial-img">
                                        <img src="img/testimonial/testimonial-img-2.jpg" alt="Testimonial image" class="img-fluid">
                                        <div class="client-detail">
                                            <h6>Andrew Tovar</h6>
                                            <span>Envato Customer</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <div class="testimonial-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, 
                                            but the majority have suffered alteration in some form, by injected humour, 
                                            or randomised words which don't look even slightly believable. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="testimonial-inner">
                                    <div class="testimonial-img">
                                        <img src="img/testimonial/testimonial-img-3.jpg" alt="Testimonial image" class="img-fluid">
                                        <div class="client-detail">
                                            <h6>Daniel Gonzalez</h6>
                                            <span>Envato Customer</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <div class="testimonial-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, 
                                            but the majority have suffered alteration in some form, by injected humour, 
                                            or randomised words which don't look even slightly believable. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Testimonial End //-->

            <!--// Pricing Start //-->
            <section class="section" id="pricing">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4> <?php echo $language['schedule']; ?></h4>
                                
                            </div>
                        </div>
                    </div>
                  
                        <div class="services-detail-newsletter">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-form-group">
                                        <input type="text" class="custom-form-control" name="contact_name" required placeholder=" <?php echo $language['schedule_name']; ?> *">
                                        <span class="fa fa-user"></span>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-form-group">
                                        <input type="text" class="custom-form-control" name="contact_email" required placeholder=" <?php echo $language['schedule_email']; ?> *">
                                        <span class="fa fa-envelope"></span>
                                    </div> 
                                </div>
                            </div>
                            <form action="#">
                                
                                <div class="custom-form-group">
                                    <button class="primary-outline-btn"> <?php echo $language['schedule_button']; ?>!</button>
                                </div>
                            </form>
                        </div>
            </section>
            <!--// Pricing End //-->

            

             <!--// Our Client Start //-->
             <section class="section bg-grey pb-minus-70" id="latest-blog">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4><?php echo $language['our_client']; ?></h4>
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/bsmmu1.png" alt="Blog image" class="img-fluid"  style="width: 100% !important;height: 100px;">
                                    </a>
                                </div>
                            
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/save.png" alt="Blog image" class="img-fluid"  style="width: 100% !important;height: 100px;">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/globe2.png" alt="Blog image" class="img-fluid"  style="width: 100% !important;height: 100px;">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/astra.jpg" alt="Blog image" class="img-fluid"  style="width: 100% !important;height: 100px;">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/dam.png" alt="Blog image" class="img-fluid"  style="width: 100% !important;height: 100px;">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/mst4.png" alt="Blog image" class="img-fluid"  style="width: 100% !important;height: 100px;">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Our client End //-->

             <!--// Latest Blog Start //-->
             <section class="section bg-grey pb-minus-70" id="latest-blog">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="section-heading">
                                <h4>Latest Blogs</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted 
                                    by the readable content of a page when looking at its layout. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog-img-3.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i>10 Aqust</span>
                                        <span><i class="far fa-bookmark"></i>Business</span>
                                    </div>
                                    <h6><a href="#">Universal Principles Of User Experience Design</a></h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the...
                                    </p>
                                    <a href="#" class="blog-outline-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog-img-2.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i>15 June</span>
                                        <span><i class="far fa-bookmark"></i>Business</span>
                                    </div>
                                    <h6><a href="#">What Is The Importance Of The Design System In Design?</a></h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the...
                                    </p>
                                    <a href="#" class="blog-outline-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog-img-4.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i>09 July</span>
                                        <span><i class="far fa-bookmark"></i>Business</span>
                                    </div>
                                    <h6><a href="#">Things You Need To Know To Become a Blogger</a></h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the...
                                    </p>
                                    <a href="#" class="blog-outline-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog-img-1.jpg" alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i>22 April</span>
                                        <span><i class="far fa-bookmark"></i>Business</span>
                                    </div>
                                    <h6><a href="#">Premium WordPress Theme Requirements</a></h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted 
                                        by the...
                                    </p>
                                    <a href="#" class="blog-outline-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// Latest Blog End //-->

                <!--// Our Potential Start //-->
                <section class="section pb-minus-70" id="counters"> 
                <div class="container">
                   <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <span class="flaticon-020-meeting"></span>
                                </div>
                                <div class="counter-body">
                                    <h6>Happy Customer</h6>
                                    <span class="counter">2000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <span class="flaticon-032-coffee-cup"></span>
                                </div>
                                <div class="counter-body">
                                    <h6>Sell Products</h6>
                                    <span class="counter">1500</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <span class="flaticon-005-trophy"></span>
                                </div>
                                <div class="counter-body">
                                    <h6>Awards Won</h6>
                                    <span class="counter">2500</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <span class="flaticon-030-deal"></span>
                                </div>
                                <div class="counter-body">
                                    <h6>Recieved Job</h6>
                                    <span class="counter">5000</span>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </section>
            <!--// Our Potential End //-->

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