<?php include 'admin_header.php'; ?>
<?php include 'includes/connect.php'; ?>

<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <span class="logoss">CLASSROOM</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="admin.php">Home</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Classes</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="register-course.php">Add Class</a></li>
                                        <li><a href="viewClasses.php">View Classes</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Users</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                        <!-- <li><a href="register-users.php">Add Users</a></li> -->
                                        <li><a href="users.php">View Users</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="admin.php"><i class="notika-icon notika-house"></i>
                                Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-form"></i>
                                Class</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#users"><i class="notika-icon notika-support"></i>
                            Users</a>
                    </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="admin.php">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="register-course.php">Register Class</a>
                                    </li>
                                    <li><a href="viewClasses.php">View All Classes</a>
                                    </li>
                                </ul>
                        </div>
                        <div id="users" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <!-- <li><a href="register-users.php">Add Users</a>
                                </li> -->
                                <li><a href="users.php">View Users</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container" id="reg">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn"
                                        style="display: flex; align-items: center; justify-contents: center;">
                                        <h2>Register User</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-example-area">
        <div class="container" style="display: flex;justify-content: center; align-items: center;">
            <div class="row" style="width: 50%;">
                <!-- style="background: red; width: 70%" -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['create_user'])){
        require 'includes/register.php';
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> User Exist!
            </div>";
    }
}
?>
                    <form method="post">

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row" style="margin-left: 2px;">
                                    <div style="line-height: 20px;" id="cN">Username</div><br>
                                    <div class="">
                                        <input type="text" name="username" class="form-control" id="inps" placeholder="">
                                    </div>

                                </div>
                            </div>
                        </div><br>


                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row" style="margin-left: 2px;">
                                    <div style="line-height: 20px;" id="cN">Email Address</div><br>
                                    
                                    <div class="">
                                        <input type="text" name="email" class="form-control" id="inps" placeholder="">
                                    </div>

                                </div>
                            </div>
                        </div><br>


                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div style="line-height: 20px;" id="cN">Password</div><br>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="">
                                            <!-- <div style="line-height: 20px; background: red; float: left;" id="cN">Course Name</div><br> -->
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="password" class="form-control" value="123">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="line-height: 20px;" id="cN">User Role</div><br>
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="">
                                            <!-- <div style="line-height: 20px; background: red; float: left;" id="cN">Course Name</div><br> -->
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="userrole" class="form-control" value="staff">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-example-int mg-t-15" style="">
                            <div class="row" style="">
                                <div class="col-md-1" style="float: left;">
                                <button type="submit" class="btn btn-success notika-btn-success" name="create_user" style="padding: 0.6em 2.3em" id="sub">Add User</button>
                                    <!-- <input type="submit" name="create_class" class="btn btn-success notika-btn-success" VALUE="SUBMIT"> -->
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Form Element area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area" style="opacity: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
                            . All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
            ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
            ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
            ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
            ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
            ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
            ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
            ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
            ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
            ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
            ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
            ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- Input Mask JS
            ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
            ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
            ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
            ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
            ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
            ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
            ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
            ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
            ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
            ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
            ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
            ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
            ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
            ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
            ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
            ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>