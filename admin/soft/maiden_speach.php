<?php include 'include/header.php';?>
<?php $table_heading = "Maiden Speach";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
  
<?php
        $tbl_name="maiden_speach";       //your table name
        $targetpage = "maiden_speach.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';
   

    if(isset($_POST['update']))
    {

            $title = trim($_POST['title']);
            $maiden_speach_id = $_POST['maiden_speach_id'];
            $name =mysqli_real_escape_string($con,trim($_POST['name']));
            $speach_details =mysqli_real_escape_string($con,trim($_POST['speach_details']));
            
            
        $SQL = "SELECT * FROM $tbl_name WHERE `is_deleted` = 0 AND `title` ='$title'  AND `name` = '$name' AND `speach_details` = '$speach_details' AND `maiden_speach_id` != '$maiden_speach_id'";

            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                if ($_FILES["image_url"]["error"] > 0) {
                    $image_url = $_POST['image_url'];
                    
                } else {
                    $image_url = time().$_FILES["image_url"]["name"];
                    move_uploaded_file($_FILES["image_url"]["tmp_name"],"upload/" . $image_url);
                }
                
                $sql = "UPDATE $tbl_name SET `title` ='$title' , `name` = '$name', `speach_details` = '$speach_details', `short_details` = '$speach_details',  `image_url` = '$image_url' , `is_updated` = 1, `updated_by` = '$user_no' ,`updated_on` = '$CURR_TIME' WHERE `maiden_speach_id` = '$maiden_speach_id'";

                $result = mysqli_query($con,$sql);
                if($result)
                {
                    $mgs = "Data Update Successfully!";
                    $class = "green_color alert alert-success  alert-dismissable col-md-6";

                }
                else
                {
                    $mgs = "Data Update Fail!";
                    $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
                }
            else:
                $mgs = "Duplicate Entry!";
                $class = "red_color alert alert-warning alert-dismissable col-md-6 ";
            endif;
    }
?>
  
    <?php
        $sql = "SELECT * FROM $tbl_name WHERE `maiden_speach_id` = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

   
     <form class="cmxform form-horizontal " id="signupForm" method="post" action="" enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="maiden_speach_id" value="<?=$result['maiden_speach_id']?>" />
            </div>
        </div>
        
      <div class="form-group ">
            <label for="title" class="control-label col-lg-2"> Title </label>
            <div class="col-lg-8">
                <input class=" form-control" id="" name="title" type="text" value="<?=$result['title']?>" required />
            </div>
           
        </div>


        <div class="form-group ">
            <label for="name" class="control-label col-lg-2"> Name </label>
            <div class="col-lg-8">
                <input class=" form-control" id="" name="name" type="text" value="<?=$result['name']?>" required />
            </div>
           
        </div>


         <div class="form-group ">
            <label for="speach_details" class="control-label col-lg-2">Speach Details</label>
            <div class="col-lg-8">
                <textarea  class=" form-control" id="" style="height: 150px" name="speach_details" ><?=$result['speach_details']?></textarea>
                
            </div>
            
        </div>
       
       
        <div class="form-group ">
            <label for="image_url" class="control-label col-lg-2"> Image </label>
            <div class="col-lg-4">
                <input type="file"  name="image_url" id="" value="<?=$result['image_url']?>">
                <img src="upload/<?=$result['image_url']?>" height="60" width="60"/> 
            </div>
           <div>
                <input type="hidden" name="image_url" value="<?=$result['image_url']?>" />
            </div>
        </div>


       <div class="form-group">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-3 col-lg-5">
                <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
    
    <?php include 'include/footer.php';?>
<script type="text/javascript" src="../js/"></script>
    
   
    