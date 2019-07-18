<?php include 'header.php' ?>


<?php
        if(isset($_GET['view'])){
        $id = $_GET['view'];
        $sql = "SELECT * FROM `all_products` WHERE products_no = $id";
        $row = mysqli_fetch_array(mysqli_query($con,$sql));

 ?>

 <section class="single-page-title">
    <div class="container text-center">
        <h2><?=$row['products_name']?></h2>
    </div>
</section>

    <div class="container">
        <center><img src="admin/soft/upload/<?=$row['image_url']?>" class="img-responsive img-thumbnail" width="600px;" height="600px;" style="margin-top: 20px;"></center>
        <h4 style="text-align: justify; margin: 40px; "><?=$row['full_details']?></h4>
            
    </div>
<?php } ?>


<?php include 'footer.php' ?>