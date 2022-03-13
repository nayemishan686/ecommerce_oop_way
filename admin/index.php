<?php include_once("class/admin.php") ?>
<?php 
    $obj_admin = new Admin();
    if(isset($_POST['admin_login'])){
        $obj_admin -> adminLogin($_POST);
    }
    session_start();
    if(isset($_SESSION['admin_id'])){
        header('Location: dashboard.php');
    }
?>


<?php include_once("includes/header.php"); ?>

<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="post">
                            <div class="text-center">
                                <img src="assets/images/nayem.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Log In Form</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="admin_email" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="admin_password" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" name="admin_login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Log In">
                                    </div>
                                </div>
                                

                            </div>
                        </form>
                        <!-- end of form -->

                        

                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

<?php include_once('includes/footer.php'); ?>







<!-- session_start();
        $adminId = $_SESSION['id'];
        if(isset($adminId)){
            header('Location: dashboard.php');
        } -->
