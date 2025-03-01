<?php include 'session-check.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        h1{
  text-align:center;
  padding: 20px;
}
    </style>
</head>
<body class="">
<!-- header Start -->
<?php include 'header.php';?>
<!-- header End-->

<!-- contact  start -->

<div class="container m2-4 ">
      <div class="row mt-4 p-3">
      

  <div class="col-md-12 shadow-lg p-5 mx-auto" style="background-color:rgb(48, 31, 51);">
                <h2 class="text-center">
                <span class="text-white "> 
                     Welcome <?php echo $dataC['cnm'];?> (Customer)

                     <a href="logout.php" class="btn btn-danger">
                        Logout
                     </a>
</span>
          </h2>

      
<?php include 'card.php'?>
         
        </div>

       
      </div>
    </div>
<!-- contat End -->




<!-- Social icons fixed start-->

<?php include 'social.php';?>
        <!-- Social icons fixed end-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
       
            AOS.init();
        
</script>
<script src="js/my.js">
   
</script>
    </body>
    </html>