<!DOCTYPE html>
<html lang="zxx">

<?php include_once("public/head.php");?>
<!-- PL:Page Label -->
<title><?php contactPL();?></title>
<body>
    <!-- Preloader Start -->
    <div class="discover-preloader-wrapper">
       <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
    </div>
    <!-- Preloader End -->
    
    <!-- Header Area Start -->
    <?php include_once("public/header.php");?>
    <!-- Header Area End -->
    
    <!-- Breadcrumb Area Start -->
    <div class="discover-breadcrumb-area breadcrumb-banner-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumb-text">
                        <h1><?php contactPL();?></h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <span class="breadcrumb-ceperator">/</span>
                            <li><span><?php contactPL();?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    
    <!-- Contact Area Start -->
        <?php include_once('includes/contactForm.php');?>
    <!-- Contact Area End -->
    <div class="map-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gmap3 map"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area Start -->
    <?php include_once("public/footer.php");?>
    <!-- Footer Area End -->
    
    <!-- Google Map JS -->
    <script type="text/javascript" src="assets/js/gmap3.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
    <!-- Owl Carousel JS -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    
    <!-- Mixitup JS -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    
    <!-- Waypoints JS -->
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    
    <!-- Counterup JS -->
    <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
    
    <!-- Slicknav JS -->
    <script type="text/javascript" src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- Magnific Popup JS -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- Active JS -->
    <script type="text/javascript" src="assets/js/active.js"></script>
</body>


</html>