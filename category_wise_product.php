<?php include 'header.php'; ?>
<?php include 'slider.php'; ?>


   <?php
        if(isset($_GET['department'])){
        $id = $_GET['department'];
      echo  $sql = "SELECT * FROM `products` WHERE departments_no = $id";
        $row = mysqli_fetch_array(mysqli_query($con,$sql));
   ?>

<section class="single-page-title">
    <div class="container text-center">
        <h2><?=$row['products_name']?> </h2>
    </div>
</section>



<!-- .page-title -->

<section class="product">
    <div class="pro_titile col-sm-12">
        
    </div>
    <div class="pro_details col-sm-12">
        
       
    </div>
</section>




<section class="contact-form ptb-100">
    <div class="container text-center">
        <h1 style="border-bottom: 2px solid; padding: 10px;">Product Details</h1>

         <div class="row">
            <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <p<?=$row['product_details_1']?></p>
      
         <div class="pro_img">
             <img src="admin/soft/upload/<?=$row['image_url']?>" alt="" class="img img-responsive">
         </div>
        <p><?=$row['product_details_2']?></p>
        
                        </div><!-- /.col-md-6 -->
                        
                    </div><!-- /.row-->
                    
                
            </div><!-- /.col-md-8 -->
        </div>


      
    </div>
</section>

<?php } ?>


<!-- .contact-form-->

    <!--.map-section-->


<?php include 'footer.php'; ?>