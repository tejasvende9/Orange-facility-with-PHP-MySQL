<?php include 'session-check.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Admin dashboard</title>
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
      
  <?php include 'profile-section.php';?>
    

  <div class="row mt-5">
    <div class="col-md-4">
      <div class="bg-white shadow-lg p-4">
        <h2 class="text-danger text-center">
        Register Customer
        </h2>
        <h4 class="text-center text-danger">
        <?php 
                                   $qcc="SELECT count(cid)  as cc FROM  customer_details";
                                   $rscc=mysqli_query($cn,$qcc);
                            $datacc=mysqli_fetch_array($rscc);

                            echo $datacc['cc'];
                                ?>
        </h4>

        <p class="text-center">
            <a href="register-user.php" class="btn  btn-dark">Track </a>
        </p>
      </div>
    </div>

   

    <div class="col-md-4">
      <div class="bg-white shadow-lg p-4">
        <h2 class="text-danger text-center">
        Business Owner
        </h2>
        <h4 class="text-center text-danger">
        <?php 
                                   $qbo="SELECT count(oid)  as bo FROM   business_owner";
                                   $rsjob=mysqli_query($cn,$qbo);
                            $databo=mysqli_fetch_array($rsjob);

                            echo $databo['bo'];
                                ?>
        </h4>
        <p class="text-center">
            <a href="business-owner.php" class="btn  btn-dark">Track </a>
        </p>
      </div>
      </div>
      
      <div class="col-md-4">
        <div class="bg-white shadow-lg p-4">
          <h2 class="text-danger text-center">
            Contact Enquiry
          </h2>
          <h4 class="text-center text-danger">
            <?php 
                                   $qrcn="SELECT count(cn)  as cn FROM  contactdetails";
                                   $rscn=mysqli_query($cn,$qrcn);
                                   $datacn=mysqli_fetch_array($rscn);
                                   
                                   echo $datacn['cn'];
                                   ?>
        </h4>
        <p class="text-center">
          <a href="contact-report.php" class="btn  btn-dark">Track </a>
        </p>
      </div>
    </div>
    </div>
  </div>
         
      

       
      </div>
    </div>
<!-- contat End -->





<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
       
            AOS.init();
        
</script>
<script src="js/my.js">
   
</script>
    </body>
    </html>