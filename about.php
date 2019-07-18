<?php
   $currentPage = 'about';
?>
<?php include 'header.php'; ?>

<section class="single-page-title">
    <div class="container text-center">
        <h2>About us</h2>
    </div>
</section>
<!-- .page-title -->

<section class="about-text ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>A Few Words About Us</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <?php
        $sql = "SELECT * FROM few_words WHERE `few_words_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p><?=$result['few_words1']?>.</p>
            </div>
            <div class="col-md-6">
                <p><?=$result['few_words2']?></p>
            </div>
        </div>
    </div>

</section>
<!-- .about-text-->


    <?php
        $sql = "SELECT * FROM maiden_speach WHERE `maiden_speach_id` = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
<section class="x-services ptb-100 gray-bg">


    <section class="section-title">
        <div class="container text-center">
            <h2><?=$result['title']?></h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-12 col-xs-12">
               <center> <img class="img-responsive img-thumbnail" src="admin/soft/upload/<?=$result['image_url']?>" alt="Image" width="60%"></center>
            </div>   

            <div class="col-md-8 col-sm-12 col-xs-12">
                <h3><?=$result['name']?></h3>
                <p><?=$result['short_details']?><a href="<?='maiden_speach_details.php'.'?view='.$row['maiden_speach_id']?>">... Read more</a></p>
            </div>
        </div>
    </div>


        <!-- .row -->
    
    <!-- .container -->
</section>




<section class="skills ptb-100 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Professional Skills</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">

    <?php
        $sql = "SELECT * FROM few_words WHERE `few_words_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

            <div class="col-md-6">
                <h3>More About Our Company</h3>

                <p><?=$result['company_details1']?></p>

                <p><?=$result['company_details2']?></p>
            </div>
            <div class="col-md-6 x-progress">

    <?php
        $sql = "SELECT * FROM professional_skills WHERE `professional_skills_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>


                <div class="progress-wrapper">
                    <div class="progress-item">
                        <span class="progress-title">Solution</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="<?=$result['Solution']?>"
                                 aria-valuemin="0" aria-valuemax="100" style="width: <?=$result['Solution']?>%;"></div>
                        </div>
                        <span class="progress-percent"><?=$result['Solution']?>%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Creativity</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="<?=$result['Creativity']?>"
                                 aria-valuemin="0" aria-valuemax="100" style="width: <?=$result['Creativity']?>%;"></div>
                        </div>
                        <span class="progress-percent"><?=$result['Creativity']?>%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Finance</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="<?=$result['Finance']?>"
                                 aria-valuemin="0" aria-valuemax="100" style="width: <?=$result['Finance']?>%;"></div>
                        </div>
                        <span class="progress-percent"><?=$result['Finance']?>%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Brand</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="<?=$result['Brand']?>"
                                 aria-valuemin="0" aria-valuemax="100" style="width: <?=$result['Brand']?>%;"></div>
                        </div>
                        <span class="progress-percent"><?=$result['Brand']?>%</span>
                    </div>
                    <!-- /.progress-item -->

                    <div class="progress-item">
                        <span class="progress-title">Efficiency</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="<?=$result['Efficiency']?>"
                                 aria-valuemin="0" aria-valuemax="100" style="width: <?=$result['Efficiency']?>%;"></div>
                        </div>
                        <span class="progress-percent"><?=$result['Efficiency']?>%</span>
                    </div>
                    <!-- /.progress-item -->
                </div>
                <!-- /.progress-wrapper -->
            </div>
        </div>
    </div>

</section>
<!-- .skills -->

<section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">


            <!-- Indicators -->
            <ol class="carousel-indicators">

           <?php
              $sql = "SELECT * FROM satisfied_customer WHERE satisfied_customer.is_deleted = 0";
              $result = mysqli_query($con,$sql);
              $i=0;
              while($row = mysqli_fetch_array($result)):
                if($i == 0){
                  $active = 'active';
                }else{
                  $active = '';
                }
          ?>

        <li data-target="#x-corp-carousel" data-slide-to="<?=$i?>" class="<?=$active?>"></li>

            <?php 
                $i++;
              endwhile;
            ?>
            
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

         <?php
              $sql = "SELECT * FROM satisfied_customer WHERE satisfied_customer.is_deleted = 0";
              $result = mysqli_query($con,$sql);
              $i=0;
              while($row = mysqli_fetch_array($result)):
                $i++;
                if($i == 1){
                  $active = 'active';
                }else{
                  $active = '';
                }
          ?>

                <div class="item  <?=$active?>">
                    <blockquote>
                        <ul>
                            <li><img src="admin/soft/upload/<?=$row['image_url']?>" class="img-responsive" alt=""/></li>
                            <li class="name"><?=$row['name']?></li>
                        </ul>
                        <p><?=$row['details']?></p>
                        

                    </blockquote>
                </div>

                <?php endwhile;?>

                
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- .testimonial -->

<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Clients</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">

     <?php
        $sql = "SELECT * FROM our_clients WHERE `is_deleted` = 0 ";
         $result = mysqli_query($con,$sql);
    ?>

        <div class="row">

            <?php while($row = mysqli_fetch_array($result)):?>

            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="admin/soft/upload/<?=$row['image_url']?>" alt="Image"></a>
            </div>

        <?php endwhile; ?>
           
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->



<?php include 'footer.php'; ?>