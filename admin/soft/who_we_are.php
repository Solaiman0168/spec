<?php include 'include/header.php';?>
<?php $table_heading = "Who we are Description";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="who_we_are";       //your table name
        $targetpage = "who_we_are.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $who_we_are_id = $_POST['who_we_are_id'];
            $description = mysqli_real_escape_string($con,trim($_POST['description']));
           
            
      
          $SQL = "SELECT * FROM $tbl_name WHERE  `description` ='$description' AND `who_we_are_id` != '$who_we_are_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
             $sql = "UPDATE $tbl_name SET `description` = '$description' ,`is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE who_we_are_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `who_we_are_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="who_we_are_id" value="<?=$result['who_we_are_id']?>" />
            </div>
        </div>

        <div class="form-group ">
            <label for="description" class="control-label col-lg-3"> Description </label>
            <div class="col-lg-8">
                 <textarea  class=" form-control" id="" style="height: 150px" name="description" ><?=$result['description']?></textarea>
                
            </div>
        </div>
        
        
       <div class="form-group">
            <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-lg-5">
              <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>


    </form>
                                
<?php include 'include/body-bottom.php';?>
<?php include 'include/footer.php';?>
<script type="text/javascript" src="../js/"></script>