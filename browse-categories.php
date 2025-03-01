<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>

  <div class="container">

  <!-- Header Start -->

  <?php  include 'header.php';?>
  <!-- Header End -->
 

    <div class="container">
        <div class="row      my-5">
            <div class="col-md-4 text-center">
                <div class="p-3">
                <h3 class=" mb-3">
       
          </h3>
                    <img src="images/about.png" alt=""
                    width="98%">
                </div>
            </div>
            <div class="col-md-8 bg-light p-3">
            <div class="p-3">
                <h3 class="text-center mb-4">
        <span>

          Browse By Categories
        </span>
          </h3>

          <div class="row">
          <?php 
          include 'connection.php';
                   $qs="SELECT * FROM   business_category ";
                   $rs=mysqli_query($cn,$qs);
        $i=1;
                   while ($dataC=mysqli_fetch_array($rs)) {
                ?>
            <div class="col-md-3">
                <div class="p-1 text-center">
                <img src="admin/<?php echo $dataC['ct_photo']?>" alt=""
              width="50">
              <p>
               
              <a href="see-info.php?ctid=<?php echo $dataC['ctid'];?>" class='text-decoration-none'>
              <?php echo $dataC['ctnm']?>
              </a>
              </p>
                </div>
            </div>

     
            <?php
                   }
          ?>
          
         <br><br><br><br><br>
         <br><br><br><br><br>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- footer Start -->

<?php include 'footer.php';?>
  <!-- footer End -->

  <!-- Social icon start -->

   <?php include 'social.php';?>
  <!-- Social icon end -->

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>

</body>
</html>