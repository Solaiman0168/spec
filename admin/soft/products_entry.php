<?php include 'include/header.php';?>
<?php $table_heading = "All Products Entry";?>
<?php include 'include/sidebar.php';?>
<?php include 'include/body-top.php';?>
<?php
    $tbl_name="all_products";        //your table name
    $targetpage = "products_entry.php";  //your file name  (the name of this file)
    $user_no =$_SESSION['user']['USER_NO'];
    $CURR_TIME = date('Y-m-d H:i:s'); 
        $mgs = '';
        

    if(isset($_GET['delete']))
    {
        $ID = $_GET['delete'];
        $sql = "UPDATE $tbl_name SET `is_deleted` = 1 ,`deleted_by` = '$user_no', `deleted_on` = '$CURR_TIME' WHERE products_no = $ID";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            $mgs = "Data Delete Successfully!";
            $class = "green_publisher_name alert alert-success col-md-6 alert-dismissable";
        }
        else
        {
            $mgs = "Data Delete Fail!";
            $class = "red_publisher_name alert alert-warning alert-dismissable col-md-6";
        }
    }
    if(isset($_POST['submit']))
    {
           $products_name = mysqli_real_escape_string($con,trim($_POST['products_name']));
           $full_details = trim($_POST['full_details']);

           if(isset($_POST['is_show_home'])){
                $is_show_home = 1;
           }else{
                $is_show_home = 0;
           }
           if(isset($_POST['is_show_menu'])){
                $is_show_menu = 1;
           }else{
                $is_show_menu = 0;
           }

           $SQL = "SELECT * FROM $tbl_name WHERE `is_deleted` = 0 AND `products_name` = '$products_name'  AND `full_details` = '$full_details'";
            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1):
                if ($_FILES["image_url"]["error"] > 0) {
                    $image_url = "No .jpg";
                    
                } else {
                    $image_url = time().$_FILES["image_url"]["name"];
                    move_uploaded_file($_FILES["image_url"]["tmp_name"],"upload/" . $image_url);
                }
               
                
      $sql = "INSERT INTO $tbl_name ( `products_name` ,`full_details`, `short_details`,  `image_url`, `is_show_home`,`is_show_menu`,`created_by` , `created_on`) VALUES(  '$products_name','$full_details' ,'$full_details' ,'$image_url','$is_show_home','$is_show_menu','$user_no', '$CURR_TIME')";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                    $mgs = "Data Insert Successfully!";
                    $class = "green_publisher_name alert alert-success col-md-6 alert-dismissable";
                }
                else
                {
                    $mgs = "Data Insert Fail!";
                    $class = "red_publisher_name alert alert-warning alert-dismissable col-md-6";
                }
            else:
                $mgs = "Duplicate Entry!";
                $class = "red_publisher_name alert alert-warning alert-dismissable col-md-6 alert alert-warning alert-dismissable col-md-6";
            endif;
    }
    if(isset($_POST['update']))
    {
            $products_no = $_POST['products_no'];
            $products_name = mysqli_real_escape_string($con,trim($_POST['products_name']));
           $full_details = trim($_POST['full_details']);
           if(isset($_POST['is_show_home'])){
                $is_show_home = 1;
           }else{
                $is_show_home = 0;
           }
           if(isset($_POST['is_show_menu'])){
                $is_show_menu = 1;
           }else{
                $is_show_menu = 0;
           }

           
           $SQL = "SELECT * FROM $tbl_name WHERE `is_deleted` = 0 AND `products_name` = '$products_name' AND `full_details` = '$full_details'  AND `products_no` != '$products_no'";

            $COUNT = mysqli_num_rows(mysqli_query($con,$SQL));
            if($COUNT < 1): 
                
                 if ($_FILES["image_url"]["error"] > 0) {
                    $image_url =$_POST['image_url'];
                    
                } else {
                    $image_url = time().$_FILES["image_url"]["name"];
                    move_uploaded_file($_FILES["image_url"]["tmp_name"],"upload/" . $image_url);
                }

                
                
               $sql = "UPDATE $tbl_name SET   `products_name` = '$products_name' , `full_details` = '$full_details' , `short_details` = '$full_details' , `image_url` = '$image_url' , `is_show_home` = '$is_show_home' , `is_show_menu`='$is_show_menu' , `is_updated` = 1, `updated_by` = $user_no ,`updated_on` = '$CURR_TIME'  WHERE products_no = $products_no";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                    $mgs = "Data Update Successfully!";
                    $class = "green_publisher_name alert alert-success col-md-6 alert-dismissable";
                }
                else
                {
                    $mgs = "Data Update Fail!";
                    $class = "red_publisher_name alert alert-warning alert-dismissable col-md-6";
                }
            else:
                $mgs = "Duplicate Entry!";
                $class = "red_publisher_name alert alert-warning alert-dismissable col-md-6";
            endif;
    }
?> 
    <?php
        if(isset($_GET['edit'])):
        $id = $_GET['edit'];
        $sql = "SELECT * FROM $tbl_name WHERE `products_no` = '$id' ";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>
     <form class="cmxform form-horizontal " id="signupForm" method="post" enctype="multipart/form-data">
     <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a><?=$mgs?></div>
            <div>
                <input type="hidden" name="products_no" value="<?=$result['products_no']?>" />
            </div>
        </div>
        
         <div class="form-group ">
            <label for="products_name" class="control-label col-lg-3">Product Name</label>
            <div class="col-lg-5">
                <input class=" form-control" id="" name="products_name" type="text" value="<?=$result['products_name']?>" required />
            </div>
            
        </div>

        <div class="form-group ">
            <label for="full_details" class="control-label col-lg-3">Product Details</label>
            <div class="col-lg-5">
                <textarea class=" form-control" id="" name="full_details" type="text"><?=$result['full_details']?></textarea>
            </div>
            
        </div>
        
        
         
        
       
        
        <div class="form-group ">
            <label for="image_url" class="control-label col-lg-3">Product Image</label>
            <div class="col-lg-5">
                <input type="file"  name="image_url" id="" value="<?=$result['image_url']?>">
                <img src="upload/<?=$result['image_url']?>" height="60" width="60"/> 
            </div>
           <div>
                <input type="hidden" name="image_url" value="<?=$result['image_url']?>" />
            </div>
            
        </div>


        <div class="form-group ">
            <label for="is_show_home" class="control-label col-lg-3"> </label>
            <div class="col-lg-5">
                <input type="checkbox" name="is_show_home" <?php if($result['is_show_home'] == 1)  echo 'checked'; ?>> Show in home page
            </div>
            
        </div>

         <div class="form-group ">
            <label for="is_show_menu" class="control-label col-lg-3"> </label>
            <div class="col-lg-5">
                <input type="checkbox" name="is_show_menu" <?php if($result['is_show_menu'] == 1)  echo 'checked'; ?>> Show in menu
            </div>
            
        </div>


     <div class="form-group">
            <div class="col-lg-offset-3 col-md-offset-2 col-sm-offset-3 col-xs-offset-3 col-lg-5">
                <input type="submit" class="btn btn-primary" name="update" value="Update" />
                
            </div>
        </div>
    </form>
    
    <?php
        else:
    ?>

    <form class="cmxform form-horizontal " id="signupForm" method="post" enctype="multipart/form-data">
        <div class="form-group " <?php if($mgs=='')echo "style='display:none;'" ?>>
            <div class=" col-md-6 col-md-offset-2 <?=$class?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a><?=$mgs?></div>
            
        </div>
       
        <div class="form-group ">
            <label for="products_name" class="control-label col-lg-3">Product Name </label>
            <div class="col-lg-5">
                <input class=" form-control" id="" name="products_name" type="text"  required />
            </div>
            
        </div>
       
        
        <div class="form-group ">
            <label for="full_details" class="control-label col-lg-3">Product Details</label>
            <div class="col-lg-5">
            	<textarea class=" form-control" id="" name="full_details"></textarea>
            </div>
            
        </div>
        
         <div class="form-group ">
            <label for="image_url" class="control-label col-lg-3">Product Image </label>
            <div class="col-lg-5">
                <input class=" form-control" id="" name="image_url" type="file"  />
            </div>
            
        </div>

       


        <div class="form-group ">
            <label for="is_show_home" class="control-label col-lg-3"> </label>
            <div class="col-lg-5">
                <input type="checkbox" name="is_show_home"> Show in home page
            </div>
            
        </div>

         <div class="form-group ">
            <label for="is_show_menu" class="control-label col-lg-3"> </label>
            <div class="col-lg-5">
                <input type="checkbox" name="is_show_menu"> Show in Menu
            </div>
            
        </div>
       <div class="form-group">
            <div class="col-lg-offset-3 col-md-offset-2 col-sm-offset-3 col-xs-offset-3 col-lg-5">
                <input type="submit" class="btn btn-primary" name="submit" value="Add" />
                
            </div>
        </div>
    </form>
    
    <?php
        endif;
    ?>
       
    <?php
    // How many adjacent pages should be shown on each side?
    $adjacents = 3;
    
    /* 
       First get total number of rows in data table. 
       If you have a WHERE clause in your query, make sure you mirror it here.
    */
    $query = "SELECT COUNT(*) as num FROM $tbl_name WHERE is_deleted = 0";
    $total_pages = mysqli_fetch_array(mysqli_query($con,$query));
    $total_pages = $total_pages['num'];
    
    /* Setup vars for query. */
    $limit = 15; 
    if(isset($_GET['page']))
    {                               //how many items to show per page
        $page = $_GET['page'];
    }
    else
    $page = 1;
    
    if($page) 
        $start = ($page - 1) * $limit;          //first item to display on this page
    else
        $start = 0;                             //if no page var is given, set start to 0
    
   /*data list*/

   
      
       $sql = "SELECT * FROM $tbl_name 
             
              WHERE $tbl_name.is_deleted = 0  ORDER  BY `products_no` DESC LIMIT $start, $limit";
            $query_list = mysqli_query($con,$sql);
        
    
    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
    $prev = $page - 1;                          //previous page is page - 1
    $next = $page + 1;                          //next page is page + 1
    $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;                      //last page minus 1
    
    /* 
        Now we apply our rules and draw the pagination object. 
        We're actually saving the code to a variable in case we want to draw it more than once.
    */
    $pagination = "";
    if($lastpage > 1)
    {   
        $pagination .= "<div class=\"pagination\">";
        //previous button
        if ($page > 1) 
            $pagination.= "<a href=\"$targetpage?page=$prev\"><< previous</a>";
        else
            $pagination.= "<span class=\"disabled\"><< previous</span>";    
        
        //pages 
        if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<span class=\"current\">$counter</span>";
                else
                    $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
        {
            //close to beginning; only hide later pages
            if($page < 1 + ($adjacents * 2))        
            {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
            }
            //in middle; hide some front and some back
            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
            }
            //close to end; only hide early pages
            else
            {
                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                }
            }
        }
        
        //next button
        if ($page < $counter - 1) 
            $pagination.= "<a href=\"$targetpage?page=$next\">next >></a>";
        else
            $pagination.= "<span class=\"disabled\">next >></span>";
        $pagination.= "</div>\n";       
    }
?>
<div style="overflow: auto">
    <table   class="table table-bordered table-hover table-responsive table-condensed table-striped dataTable col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
        <tr>
            <th><center>Sl</center></th>
            <th><center>Products Name</center></th>
            <th><center>Products Details</center></th>
            <th><center>Products Image</center></th>
            <th><center>Show in Home Page</center></th>
            <th><center>Show in Menu</center></th>
            <th><center>Action</center></th>
        </tr>
    <?php $i=$page*$limit-$limit+1; while($row = mysqli_fetch_array($query_list)):?>
        <tr>
            <td><center><?=$i++?></center></td>
            <td><center><?=$row['products_name']?></center></td>
            <td><center><?=$row['full_details']?></center></td>
            <td><center><img src="upload/<?=$row['image_url']?>" height="150px" width="150px"></center></td>
            <td><center><?=($row['is_show_home']==1)?'Yes':'No'?></center></td>
            <td><center><?=($row['is_show_menu']==1)?'Yes':'No'?></center></td>

         
           <td>
               <center> <a onclick="return confirm('Are you Sure Want to Edit?');" href="<?=$targetpage.'?edit='.$row['products_no']?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a onclick="return confirm('Are you Sure Want to Delete?');" href="<?=$targetpage.'?delete='.$row['products_no']?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center>
            </td>
             
           
        </tr>
    <?php endwhile;?>
    </table>

<?=$pagination?>
    
    <!---main content end---->
<?php include 'include/footer.php';?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#category_no").on("change",function(){
            var category_no = $(this).val();
            if(category_no!= -1){
                $.post("ajax/get_departments.php",{category_no:category_no},function(data){
                   // console.log(data.trim().length);
                    if(data.trim().length > 0){
                        $("#department_no").html(data);
                       
                    }
                });


            }else{
                $("#department_no").html("<option value='-1'>--Select Department--</option>");
                
            }
        });

        

        
    });
</script>
