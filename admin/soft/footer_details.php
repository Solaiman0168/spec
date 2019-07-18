<?php include 'include/header.php';?>
<?php $table_heading = "Footer Details";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="footer_details";       //your table name
        $targetpage = "footer_details.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $footer_details_id = $_POST['footer_details_id'];
            $f_details1 = $_POST['f_details1'];
            $f_details2 = $_POST['f_details2'];
            
            
      
          $SQL = "SELECT * FROM $tbl_name WHERE  `f_details1` ='$f_details1' AND `f_details2` ='$f_details2' AND `footer_details_id` != '$footer_details_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
             $sql = "UPDATE $tbl_name SET `f_details1` = '$f_details1' ,`f_details2` = '$f_details2' ,`is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE footer_details_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `footer_details_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="footer_details_id" value="<?=$result['footer_details_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="f_details1" class="control-label col-lg-3"> Footer Logo Description </label>
            <div class="col-lg-4">
                 <textarea  class=" form-control" id="" style="height: 150px" name="f_details1" ><?=$result['f_details1']?></textarea>
                
            </div>
        </div>
        <div class="form-group ">
            <label for="f_details2" class="control-label col-lg-3"> Middle Description </label>
            <div class="col-lg-4">
                <textarea  class=" form-control" id="" style="height: 150px" name="f_details2" ><?=$result['f_details2']?></textarea>
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