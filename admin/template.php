<?php include_once("class/admin.php") ?>
<?php include_once("includes/header.php"); ?>
<?php 
    session_start();
    $adminEmail = $_SESSION['admin_email'];
    if($_SESSION['id'] == null) {
        header("Location: index.php");
    }

    if(isset($_GET['adminLogout'])) {
        $obj_admin = new Admin();
        $obj_admin -> adminLogout();
    }
?>
  <body>
  <body>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php include_once('includes/header-nav.php') ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include_once('includes/sidebar.php') ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                      <?php 
                                            if($views){
                                                if($views == "dashboard"){
                                                    require_once("views/dashboard-views.php");
                                                }else if($views == "add-category"){
                                                    require_once("views/add-category-views.php");
                                                }else if($views == "edit-category"){
                                                    require_once("views/edit-category-views.php");
                                                }else if($views == "add-product"){
                                                    require_once("views/add-product-views.php");
                                                }else if($views == "edit-product"){
                                                    require_once("views/edit-product-views.php");
                                                }else if($views == "add-user"){
                                                    require_once("views/add-user-views.php");
                                                }else if($views == "manage-user"){
                                                    require_once("views/manage-user-views.php");
                                                }
                                            }
                                                
                                       
                                      ?>      
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
<?php include_once('includes/footer.php'); ?>
