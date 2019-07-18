<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                    <?php
                        $sql = "SELECT * FROM logo WHERE `logo_id` = 1";
                        $result = mysqli_fetch_array(mysqli_query($con,$sql));
                    ?>

                        <div class="footer-logo">
                            <a href="#"><img src="admin/soft/upload/<?=$result['image_url']?>" alt=""></a>
                        </div>


    <?php
        $sql = "SELECT * FROM footer_details WHERE `footer_details_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


                        <p><?=$result['f_details1']?></p>

                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>We work for your profit</h3>
                        <p><?=$result['f_details2']?></p>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">

    <?php
        $sql = "SELECT * FROM address WHERE `address_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
                      
                        <h3>Head Office</h3>
                        <address>
                            Call Us <?=$result['head_office_ph_num']?><br>
                            Send an Email on <a href="mailto:#"><?=$result['head_office_email']?></a><br>
                            <?=$result['head_office_location']?>
                            
                        </address>
                        <h3>Branch  Office</h3>
                        <address>
                            Call Us <?=$result['branch_office_ph_num']?><br>
                            Send an Email on <a href="mailto:#"><?=$result['branch_office_email']?></a><br>
                            <?=$result['branch_office_location']?>
                        </address>

    <?php
       $sql = "SELECT * FROM footer_social_icon_link WHERE footer_social_icon_link_id = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

                        <ul class="list-inline social-links">
                            <li><a href="<?=$result['fb_icon_link']?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?=$result['twitter_icon_link']?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?=$result['google_icon_link']?>"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="<?=$result['youtube_icon_link']?>"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
                <span class="copytext">Copyright &copy; <?php echo date ('Y'); ?> | <a href="https://www.spec.com">Safe Power Elictrical Company</a> </span>

            <ul class="list-inline pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!-- .container -->
    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li  data-toggle="collapse" data-target="#demo"> <a href="#">Products <i class="fa fa-angle-down"></i></a></li>


                        <?php  
                            $sql = "SELECT * FROM all_products WHERE `is_deleted` = 0 AND `is_show_menu`=1 ";
                            $result =mysqli_query($con,$sql);
                          
                           ?>

                <div id="demo" class="collapse" >

                    <?php  while($row = mysqli_fetch_array($result)): ?>
                        <a href="<?='products_details.php'.'?view='.$row['products_no']?>"><?=$row['products_name']?></a> <br>

                     <?php endwhile; ?>
                    <a href="all_products.php">All Products</a>
                        
                </div>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>


</body>
</html>