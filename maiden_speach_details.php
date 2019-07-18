<?php
   $currentPage = 'about';
?>
<?php include 'header.php' ?>


<?php
        if(isset($_GET['view'])){
        $id = $_GET['view'];
        $sql = "SELECT * FROM `maiden_speach` WHERE maiden_speach_id = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));

 ?>
<section class="single-page-title">
    <div class="container text-center">
        <h2><?=$result['title']?></h2>
    </div>
</section>

 


    <div class="container">
        <h3 style="text-align: center; font-size: 26px; margin-bottom: 35px; margin-top: 30px;"><?=$result['name']?></h3>
        <center><img src="admin/soft/upload/<?=$result['image_url']?>" class="img-responsive" width="400px;" height="400px;"></center>
        <h4 style="text-align: justify; margin: 40px; "><?=$result['speach_details']?></h4>
            
    </div>
<?php } ?>


<?php include 'footer.php' ?>