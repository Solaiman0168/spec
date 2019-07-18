<?php include 'include/header.php';?>
<?php $table_heading = "Mission, Vission, Milestone";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="who_we_are_tabmenu";       //your table name
        $targetpage = "tabmenu.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $who_we_are_tabmenu_id = $_POST['who_we_are_tabmenu_id'];
            $heading1 = $_POST['heading1'];
            $heading2 = $_POST['heading2'];
            $heading3 = $_POST['heading3'];
           
            
      
          $SQL = "SELECT * FROM $tbl_name WHERE  `heading1` ='$heading1' AND `heading2` ='$heading2' AND `heading3` ='$heading3' AND `who_we_are_tabmenu_id` != '$who_we_are_tabmenu_id'";

            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 


                if ($_FILES["image_url"]["error"] > 0) {
                                $image_url = $_POST['image_url'];
                                
                            } else {
                                $image_url = time().$_FILES["image_url"]["name"];
                                move_uploaded_file($_FILES["image_url"]["tmp_name"],"upload/" . $image_url);
                            }


                if ($_FILES["image_url1"]["error"] > 0) {
                                $image_url1 = $_POST['image_url1'];
                                
                            } else {
                                $image_url1 = time().$_FILES["image_url1"]["name"];
                                move_uploaded_file($_FILES["image_url1"]["tmp_name"],"upload/" . $image_url1);
                            }


                if ($_FILES["image_url2"]["error"] > 0) {
                                $image_url2 = $_POST['image_url2'];
                                
                            } else {
                                $image_url2 = time().$_FILES["image_url2"]["name"];
                                move_uploaded_file($_FILES["image_url2"]["tmp_name"],"upload/" . $image_url2);
                            } 
                   
            $sql = "UPDATE $tbl_name SET `heading1` = '$heading1' , `heading2` = '$heading2' , `heading3` = '$heading3' , `image_url` = '$image_url' , `image_url1` = '$image_url1' , `image_url2` = '$image_url2' , `is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE who_we_are_tabmenu_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `who_we_are_tabmenu_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal" id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="who_we_are_tabmenu_id" value="<?=$result['who_we_are_tabmenu_id']?>" />
            </div>
        </div>

        <div class="form-group ">
            <label for="heading1" class="control-label col-lg-3"> Our Mission</label>
            <div class="col-lg-8">
                 <textarea  class=" form-control" id="" style="height: 150px" name="heading1" ><?=$result['heading1']?></textarea>
                
            </div>
        </div>

        <div class="form-group ">
            <label for="heading2" class="control-label col-lg-3"> Our Vission </label>
            <div class="col-lg-8">
                 <textarea  class=" form-control" id="" style="height: 150px" name="heading2" ><?=$result['heading2']?></textarea>
                
            </div>
        </div>

        <div class="form-group ">
            <label for="heading3" class="control-label col-lg-3"> Milestone </label>
            <div class="col-lg-8">
                 <textarea  class=" form-control" id="" style="height: 150px" name="heading3" ><?=$result['heading3']?></textarea>
                
            </div>
        </div>


        <div class="form-group ">
            <label for="image_url" class="control-label col-lg-3">Our Mission Image</label>
            <div class="col-lg-8">
                <input  id="" name="image_url" type="file" />
                <img src="upload/<?=$result['image_url']?>" height="100" width="100"/> 
            </div>
           <div>
                <input type="hidden" name="image_url" value="<?=$result['image_url']?>" />
            </div>
        </div>


        <div class="form-group ">
            <label for="image_url1" class="control-label col-lg-3">Our Vission Image</label>
            <div class="col-lg-8">
                <input  id="" name="image_url1" type="file" />
                <img src="upload/<?=$result['image_url1']?>" height="100" width="100"/> 
            </div>
           <div>
                <input type="hidden" name="image_url1" value="<?=$result['image_url1']?>" />
            </div>
        </div>



         <div class="form-group ">
            <label for="image_url2" class="control-label col-lg-3">Milestone Image</label>
            <div class="col-lg-8">
                <input  id="" name="image_url2" type="file" />
                <img src="upload/<?=$result['image_url2']?>" height="100" width="100"/> 
            </div>
           <div>
                <input type="hidden" name="image_url2" value="<?=$result['image_url2']?>" />
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