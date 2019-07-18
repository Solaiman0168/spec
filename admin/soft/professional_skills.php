<?php include 'include/header.php';?>
<?php $table_heading = "Professional Skills";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
   
<?php
        $tbl_name="professional_skills";       //your table name
        $targetpage = "professional_skills.php";   //your file name  (the name of this file)
    $user_no = 1;//$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d :H:i:s'); 
        $mgs = '';


    if(isset($_POST['update']))
    {
            $professional_skills_id = $_POST['professional_skills_id'];
            $Solution = $_POST['Solution'];
            $Creativity = $_POST['Creativity'];
            $Finance = $_POST['Finance'];
            $Brand = $_POST['Brand'];
            $Efficiency = $_POST['Efficiency'];
            
            
          $SQL = "SELECT * FROM $tbl_name WHERE  `Solution` ='$Solution' AND `Creativity` ='$Creativity' AND `Finance` ='$Finance' AND `Brand` ='$Brand' AND `Efficiency` ='$Efficiency' AND `professional_skills_id` != '$professional_skills_id'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                   
             $sql = "UPDATE $tbl_name SET `Solution` = '$Solution' ,`Creativity` = '$Creativity' ,`Finance` = '$Finance' ,`Brand` = '$Brand' ,`Efficiency` = '$Efficiency' , `is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME' WHERE professional_skills_id = 1";
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
        $sql = "SELECT * FROM $tbl_name WHERE `professional_skills_id` = 1 ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" action=""  enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-1 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="professional_skills_id" value="<?=$result['professional_skills_id']?>" />
            </div>
        </div>
        <div class="form-group ">
            <label for="Solution" class="control-label col-lg-3"> Solution </label>
            <div class="col-lg-4">

                <input type="text" class=" form-control" id="" name="Solution" value="<?=$result['Solution']?>">
            </div>
        </div>
        <div class="form-group ">
            <label for="Creativity" class="control-label col-lg-3"> Creativity </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="Creativity" value="<?=$result['Creativity']?>">
            </div>
        </div>

        <div class="form-group ">
            <label for="Finance" class="control-label col-lg-3"> Finance </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="Finance" value="<?=$result['Finance']?>">
            </div>
        </div>

        <div class="form-group ">
            <label for="Brand" class="control-label col-lg-3"> Brand </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="Brand" value="<?=$result['Brand']?>">
            </div>
        </div>

        <div class="form-group ">
            <label for="Efficiency" class="control-label col-lg-3"> Efficiency </label>
            <div class="col-lg-4">
                <input type="text" class=" form-control" id="" name="Efficiency" value="<?=$result['Efficiency']?>">
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