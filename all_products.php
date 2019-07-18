<?php
   $currentPage = 'products';
?>
<?php include 'header.php'; ?>

<section class="single-page-title">
    <div class="container text-center">
        <h2>All Products</h2>
    </div>
</section>



                <?php  
                    $sql = "SELECT * FROM all_products WHERE `is_deleted` = 0";
                    $result =mysqli_query($con,$sql);
                  
                   ?>


        <section class="x-services ptb-100 gray-bg">

            <section class="section-title">
                <div class="container text-center">
                    <h2></h2>
                    <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                </div>
            </section>

            <div class="container">
                <div class="row">

                    <?php  while($row = mysqli_fetch_array($result)): ?>

                    <div class="col-md-6 poster">
                        <div class="thumbnail clearfix pr">
                            <img class="img-responsive img-thumbnail" src="admin/soft/upload/<?=$row['image_url']?>" alt="Image">

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


<?php include 'footer.php'; ?>