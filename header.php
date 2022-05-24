<?php
// Program to display URL of current page.

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
$b=null;

if(strpos($link,"&")){

    $a= explode("&", $link);
    $b='&'.$a[1];
}



$ll= explode("?",$link);

$pl= $ll[0];


// Print the link
?>
 <!--// Header Start //-->
 <header class="header fixed-top" id="header">
            <div id="nav-menu-wrap">
                <div class="container">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo final file png.png" alt="Logo White" style="width:250px;height: 150px;" class="img-fluid logo-transparent">
                            <img src="img/logo final file png.png" alt="Logo White" style="width:250px;height: 150px;" class="img-fluid logo-normal">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                        </button>
                        <button class="search-btn-toggle search-btn-mobile" data-toggle="modal" data-target="#searchForm"><i class=" fa fa-search"></i></button>
                        <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                
                                    <a class="nav-link active " href="index.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                    <?php echo $language['home']; ?>
                                    </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $language['services'] ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="pagesDropdownMenu">
                                        <a class=" dropdown-item display-4" href="services.php?lang=<?php echo $lang ?>&type=customized_erp_development">
                                        <?php echo $language["customized_erp_development"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="services.php?lang=<?php echo $lang ?>&type=mobile_application_development" aria-expanded="false">
                                            <?php echo $language["mobile_application_development"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="services.php?lang=<?php echo $lang ?>&type=custom_software_solution" aria-expanded="false">
                                            <?php echo $language["custom_software_solution"] ?>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="projectsDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $language['product_page']; ?></a>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="projectsDropdownMenu">
                                      
                                        <a class="dropdown-item display-4" href="our-products.php?lang=<?php echo $lang ?>&type=logical_erp">
      
                                            <?php echo $language["logical_erp"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="our-products.php?lang=<?php echo $lang ?>&type=pharma_erp" aria-expanded="false">
                                            <?php echo $language["pharma_erp"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="our-products.php?lang=<?php echo $lang ?>&type=ngo_erp" aria-expanded="false">
                                            <?php echo $language["ngo_erp"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="our-products.php?lang=<?php echo $lang ?>&type=hospital_pro" aria-expanded="false">
                                            <?php echo $language["hospital_pro"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="our-products.php?lang=<?php echo $lang ?>&type=diagnostic_pro" aria-expanded="false">
                                            <?php echo $language["diagnostic_pro"] ?>
                                        </a>
                                        <a class="dropdown-item display-4" href="our-products.php?lang=<?php echo $lang ?>&type=telemedicine_apps" aria-expanded="false">
                                            <?php echo $language["telemedicine_apps"] ?>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $language['blog']; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                        <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                        <a class="dropdown-item" href="blog-sidebar.html">Blog Sidebar</a>
                                        <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#"><?php echo $language["team"]; ?> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#"> <?php echo $language['aboutus']; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="contact-us.php"> <?php echo $language['contact']; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="<?php $pl?>?lang=en<?php echo $b; ?>"> <img src="img/united-kingdom-flag-square-icon-32.png" style="height: 21px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="<?php $pl?>?lang=jp<?php echo $b ?>"> <img src="img/japan-flag-wave-icon-32.png" style="height: 21px;"></a>
                                </li>
                                <li class="nav-item search-btn-resp">
                                    <a href="#" class="search-btn-toggle nav-link" data-toggle="modal" data-target="#searchForm">
                                        <i class=" fa fa-search"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--// Header End  //-->