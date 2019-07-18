
<?php include 'admin/config/db_connection.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Safe Power Electronics Company</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

   
</head>
<body>
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

    <?php
        $sql = "SELECT * FROM logo WHERE `logo_id` = 1";
        $result = mysqli_fetch_array(mysqli_query($con,$sql));
    ?>

            <a class="navbar-brand" href="index.php"> <img src="admin/soft/upload/<?=$result['image_url']?>" alt="" style="height: 100%;
    width: 100%;"></a>
        </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li class="<?php if($currentPage =='home'){echo 'active';}?>"><a href="index.php">Home</a></li>
                <li class="<?php if($currentPage =='about'){echo 'active';}?>"><a href="about.php">About</a></li>
                <li class="dropdown <?php if($currentPage =='products'){echo 'active';}?>"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Products
                    <span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">


                        <?php  
                            $sql = "SELECT * FROM all_products WHERE `is_deleted` = 0 AND `is_show_menu` = 1 ";
                            $result =mysqli_query($con,$sql);
                          
                           ?>

                        <li> 
                            <div class="">
                                <ul class="col-sm-12">

                                    <?php  while($row = mysqli_fetch_array($result)): ?>
                                    
                                    <li><a href="<?='products_details.php'.'?view='.$row['products_no']?>"><?=$row['products_name']?></a></li>

                                     <?php endwhile; ?>
                                     <li><a href="all_products.php">All Products</a></li>
                                    
                                </ul>

                            </div>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($currentPage =='contacts'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
                
                
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->