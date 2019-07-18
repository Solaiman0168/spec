<?php include 'include/header.php';?>
<?php $table_heading = "Address";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="address";       //your table name
        $targetpage = "address.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $address_id = $_POST['address_id'];
            $head_office_ph_num = $_POST['head_office_ph_num'];
            $head_office_email = $_POST['head_office_email'];
            $head_office_location = $_POST['head_office_location'];
            $branch_office_ph_num = $_POST['branch_office_ph_num'];
            $branch_office_email = $_POST['branch_office_email'];
            $branch_office_location = $_POST['branch_office_location'];

            
            
      
          $SQL = "SELECT * FROM $tbl_name WHERE  `head_office_ph_num` ='$head_office_ph_num' AND `head_office_email` ='$head_office_email' AND `head_office_location` ='$head_office_location' AND `branch_office_ph_num` ='$branch_office_ph_num' AND `branch_office_email` ='$branch_office_email' AND `branch_office_location` ='$branch_office_location' AND `address_id` != '$address_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
             $sql = "UPDATE $tbl_name SET `head_office_ph_num` = '$head_office_ph_num' ,`head_office_email` = '$head_office_email' ,`head_office_location` = '$head_office_location' ,`branch_office_ph_num` = '$branch_office_ph_num' ,`branch_office_email` = '$branch_office_email' ,`branch_office_location` = '$branch_office_location' , `is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE address_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `address_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="address_id" value="<?=$result['address_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="head_office_ph_num" class="control-label col-lg-3"> Head Office Phone Number </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="head_office_ph_num" type="text" required  value="<?=$result['head_office_ph_num']?>">
                
            </div>
        </div>
        <div class="form-group ">
            <label for="head_office_email" class="control-label col-lg-3"> Head Office Email </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="head_office_email" type="text" required  value="<?=$result['head_office_email']?>">
            </div>
        </div>

        <div class="form-group ">
            <label for="head_office_location" class="control-label col-lg-3"> Head Office Locaton </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="head_office_location" type="text" required  value="<?=$result['head_office_location']?>">
            </div>
        </div>


        <div class="form-group ">
            <label for="branch_office_ph_num" class="control-label col-lg-3"> Branch Office Phone Number </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="branch_office_ph_num" type="text" required  value="<?=$result['branch_office_ph_num']?>">
            </div>
        </div>

        <div class="form-group ">
            <label for="branch_office_email" class="control-label col-lg-3"> Branch Office Email </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="branch_office_email" type="text" required  value="<?=$result['branch_office_email']?>">
            </div>
        </div>


        <div class="form-group ">
            <label for="branch_office_location" class="control-label col-lg-3"> Branch Office Location </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="branch_office_location" type="text" required  value="<?=$result['branch_office_location']?>">
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