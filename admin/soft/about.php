<?php include 'include/header.php';?>
<?php $table_heading = "About Page";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="few_words";       //your table name
        $targetpage = "about.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $few_words_id = $_POST['few_words_id'];
            $few_words1 = $_POST['few_words1'];
            $few_words2 = $_POST['few_words2'];
            $company_details1 = $_POST['company_details1'];
            $company_details2 = $_POST['company_details2'];
            
            
          $SQL = "SELECT * FROM $tbl_name WHERE  `few_words1` ='$few_words1' AND `few_words2` ='$few_words2' AND `company_details1` ='$company_details1' AND `company_details2` ='$company_details2' AND `few_words_id` != '$few_words_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
             $sql = "UPDATE $tbl_name SET `few_words1` = '$few_words1' ,`few_words2` = '$few_words2' ,`company_details1` = '$company_details1' ,`company_details2` = '$company_details2' , `is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE few_words_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `few_words_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="few_words_id" value="<?=$result['few_words_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="few_words1" class="control-label col-lg-3"> Few Words About 1 </label>
            <div class="col-lg-8">
                
                <textarea type="text" style="height: 150px" class=" form-control" id="" name="few_words1"><?=$result['few_words1']?></textarea>
                
            </div>
        </div>
        <div class="form-group ">
            <label for="few_words2" class="control-label col-lg-3"> Few Words About 2 </label>
            <div class="col-lg-8">
                <textarea type="text" style="height: 150px" class=" form-control" id="" name="few_words2"><?=$result['few_words2']?></textarea>
            </div>
        </div>

        <div class="form-group ">
            <label for="company_details1" class="control-label col-lg-3"> About Our Company Details 1 </label>
            <div class="col-lg-8">
                <textarea type="text" style="height: 150px" class=" form-control" id="" name="company_details1"><?=$result['company_details1']?></textarea>
            </div>
        </div>

        <div class="form-group ">
            <label for="company_details2" class="control-label col-lg-3"> About Our Company Details 2 </label>
            <div class="col-lg-8">
                <textarea type="text" style="height: 150px" class=" form-control" id="" name="company_details2"><?=$result['company_details2']?></textarea>
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