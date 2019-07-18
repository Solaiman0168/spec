<?php
   $currentPage = 'contacts';
?>
<?php include 'header.php'; ?>


<section class="single-page-title">
    <div class="container text-center">
        <h2>Contact us</h2>
    </div>
</section>
<!-- .page-title -->

<section class="contact-form ptb-100">
    <div class="container text-center">
        <h2>We are here for give you the best service.</h2>



        <div class="row">


            <?php
            $mgs = '';
            $class='';
                if(isset($_POST['submit']))
                    {
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $message = trim($_POST['message']);
                    $phone = trim($_POST['phone']);
                     $SQL = "SELECT * FROM `contact_us` WHERE `is_deleted` = 0 AND  `message` = '$message' AND `name` ='$name' AND `email` ='$email' AND `phone` ='$phone' ";
                    $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
                    if($COUNT < 1): 
                     
                       $sql = "INSERT INTO `contact_us`( `message`, `name`, `email` , `phone` ) VALUES(' $message','$name',' $email' ,' $phone' )";
                                $result = mysqli_query($con,$sql);
                                if($result)
                                {
                                    $mgs = "<b>Your Message Have Been Sent Successfully!</b>";
                                    $class = "green_color alert alert-success  alert-dismissable col-md-8";

                                }
                                else
                                {
                                    $mgs = "name Send Fail!";
                                    $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
                                }
                               else:
                                $mgs = "Duplicate Entry!";
                                $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
                            endif;

                            }

        ?>


            <div class="col-md-8 col-md-offset-2">
        
        <form action="#" method="post">


            <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
                <div class=" col-md-8 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?>
                </div>
                            
            </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group user-name">
                                <label for="nameFive-first" class="sr-only">Name</label>
                                <input type="text" name="name" class="form-control" required="" id="nameFive-first" placeholder="Name">
                            </div>

                            <div class="form-group user-email">
                                <label for="emailFive" class="sr-only">Email</label>
                                <input type="email" name="email" class="form-control" required="" id="emailFive" placeholder="Email Address">
                            </div>


                            <div class="form-group user-phone">
                                <label for="websiteOne" class="sr-only">Website</label>
                                <input type="text" name="phone" class="form-control" required="" id="websiteOne" placeholder="Phone">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group user-message">
                                <label for="messageOne" class="sr-only">Message</label>
                                <textarea class="form-control" name="message" required="" id="messageOne" placeholder="Write Message"></textarea>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row-->
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div><!-- /.col-md-8 -->
        </div>

    </div>
</section>
<!-- .contact-form-->

    <?php
        $sql = "SELECT * FROM map WHERE `map_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

<section class="map-section">
   <iframe src="<?=$result['map_url']?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
    <!--.map-section-->


<?php include 'footer.php'; ?>