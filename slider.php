<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
   

    <ol class="carousel-indicators">

      <?php
              $sql = "SELECT * FROM slider WHERE slider.is_deleted = 0";
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
    <div class="carousel-inner" role="listbox" >
      <?php
              $sql = "SELECT * FROM slider WHERE slider.is_deleted = 0";
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
        <div class="item <?=$active?>">
            <img src="admin/soft/upload/<?=$row['image_url']?>" alt="Hero Slide" style="height: 520px;
    width: 100%; opacity: 0.5;">

            <div class="carousel-caption">
                <h1><?=$row['title_h1']?> </h1>

                
            </div>
        </div>
        <?php endwhile;?>
        
       
        
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->




 <div class=" mblvwslider"> 
  <div id="myCarouselAction" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <!-- Wrapper for slides -->
    <div class="carousel-inner">
     

    <?php
              $sql = "SELECT * FROM slider WHERE slider.is_deleted = 0";
              $result = mysqli_query($con,$sql);
              $i=1;
              while($row = mysqli_fetch_array($result)):
              if($i == 1){
                $active = 'active';
              }else{
                $active = '';
              }
          ?>
      <div class="item <?=$active?>">
        <a class="" href="#">
          <div class="video-image">
              <img src="admin/soft/upload/<?=$row['image_url']?>" alt="Los Angeles"  style="width:100%;">
            </div>
          </a>
      </div>
       <?php $i++;endwhile;?>
    </div>
     <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarouselAction" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarouselAction" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>