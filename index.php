<?php
   $currentPage = 'home';
?>
<?php include 'header.php'; ?>
<?php include 'slider.php'; ?>


<section class="x-services ptb-100" style="padding-bottom: 30px;" >
     <section class="section-title">
        <div class="container text-center">
            <h2>Who We Are</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
</section>

   <?php
        $sql = "SELECT * FROM who_we_are WHERE `who_we_are_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 x-accordion">
               <p style="text-align: center; text-align: justify; font-size: 15px; padding: 10px;"><?=$result['description']?></p>
            </div>
            <!-- .x-aacordion-->

            <div class="col-md-6 col-sm-12 tabOne">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul id="tabOne" class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#contentOne-1" data-toggle="tab" aria-expanded="true">Our Mission</a></li>
                        <li class=""><a href="#contentOne-2" data-toggle="tab" aria-expanded="false">Our Vision</a></li>
                        <li class=""><a href="#contentOne-3" data-toggle="tab" aria-expanded="false">Milestone</a></li>
                    </ul>

    <?php
        $sql = "SELECT * FROM who_we_are_tabmenu WHERE `who_we_are_tabmenu_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="contentOne-1">
                            <p><?=$result['heading1']?></p>

                            <div class="tabImg">
                                <img src="admin/soft/upload/<?=$result['image_url']?>" alt="" class="img img-responsive">
                            </div>
                        </div>
                        <div class="tab-pane fade poster" id="contentOne-2">
                            <p><?=$result['heading2']?></p>

                            <div class="tabImg">
                                <img src="admin/soft/upload/<?=$result['image_url1']?>" alt=""  class="img img-responsive">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contentOne-3">
                           <p><?=$result['heading3']?></p>

                            <div class="tabImg">
                                <img src="admin/soft/upload/<?=$result['image_url2']?>" alt=""  class="img img-responsive">
                            </div>
                        </div>
                    </div>

                </div> <!--.tabpanel-->
            </div>

        </div>
        <!-- /.row -->

    </div>



                <?php  
                    $sql = "SELECT * FROM all_products WHERE `is_deleted` = 0 AND `is_show_home` = 1 ";
                    $result =mysqli_query($con,$sql);
                  
                   ?>


        <section class="x-services ptb-100 gray-bg">

            <section class="section-title">
                <div class="container text-center">
                    <h2>Our Products</h2>
                    <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                </div>
            </section>

            <div class="container">
                <div class="row">

                    <?php  while($row = mysqli_fetch_array($result)): ?>

                    <div class="col-md-6 poster">
                        <div class="thumbnail clearfix pr">
                            <img class="img-responsive" src="admin/soft/upload/<?=$row['image_url']?>" alt="Image">

                            <div class="caption">
                                <h3><a href="<?='products_details.php'.'?view='.$row['products_no']?>"><?=$row['products_name']?></a></h3>

                                <p><?=$row['short_details']?><a href="<?='products_details.php'.'?view='.$row['products_no']?>">...Read More</a></p>
                            </div>
                        </div>
                    </div>


                    <?php endwhile; ?>
                    
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
<!-- .x-services -->







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