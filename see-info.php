<?php session_start();
if (!isset($_SESSION['cid'])) {
    echo "<script>
       window.location.href='login.php';
     </script>";
  }

  else
  {
    $cid = $_SESSION['cid'];
  include 'connection.php';
  $qCS="SELECT * FROM  customer_details WHERE cid=$cid";

$rsC=mysqli_query($cn,$qCS);
$dataC = mysqli_fetch_assoc($rsC); 
//var_dump($dataC);
}




$ctid = $_GET['ctid'];
include 'connection.php';
$qb ="SELECT * FROM business_category WHERE ctid= $ctid";
$rsb=mysqli_query($cn,$qb);
$dataB=mysqli_fetch_assoc($rsb);
// var_dump($dataC);


?>
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
        
        <div class=" p-5">
            <h2 class='text-center'>Business Category - <span class="text-warning">

                <?php echo $dataB['ctnm']?></h2>
            </span>

            <div class="row">
                <?php

                $qI="SELECT bo.oid,bo.onm,bo.omob,bi.bid,bi.bnm,bi.blogo,bi.binfo,bi.badr,bi.ctid,bi.bstatus 
                FROM  business_owner bo  INNER JOIN business_info bi ON bo.oid = bi.oid WHERE bi.ctid =$ctid";
                $rsI=mysqli_query($cn,$qI);
                    while($datI = mysqli_fetch_assoc($rsI))
                    {
                       // var_dump($datI);

                ?>

                <div class="bg-white p-3 mt-3 shadow-lg">
                    <div class="row">
                        <div class='col-md-3  text-center p-3'>
                            <img src="service_provider/<?php echo $datI['blogo']; ?>" alt=""
                            width='100'>
                          
                        </div>
                        <div class='col-md-9'>
                        <h3 class="text-warning">
                                <?php echo $datI['bnm']?>
                            </h3>
                            <hr>
                        <p>
                            <span class="text-warning">
                                Owner Name - 
                            </span>
                            <?php echo $datI['onm']?>
                            
                        <br>
                            <span class="text-warning">
                                Address - 
                            </span>
                            <?php echo $datI['badr']?>
                            
                        <br>
                            <span class="text-warning">
                                Information - 
                            </span>
                            <?php echo $datI['binfo']?>
                        
                      <br>
                        <?php if(isset($_SESSION["cid"])) 
                        {
                            ?>
                            <p>
                            <span class="text-warning">
                                Mobile No - 
                            </span>
                            <?php echo $datI['omob']?>
                            <form action="send-enquiry.php" method="post">
                                <div class="col-md-4">
                                    <input type="hidden" name="cid" class="form-control"
                                    value="<?php echo $cid;?>">
                                    <input type="hidden" name="bid" class="form-control"
                                    value="<?php echo $datI['bid'];?>">

                                    <input type="submit" value="Send Enquiry"
                                    name="b1" class='btn btn-danger'>
                                </div>
                            </form>
                        </p>

                            <?php }
                            
                            else
                            {
                                
                                ?>
                                <div class='mt-3'>

                                    <a href="login.php" class='btn btn-danger'>Please Login To Send enquiry</a>
                                </div>    
                        <?php } ?>
                        </p>
                        </div>
                    </div>
                </div>

                <?php

                    }
                ?>
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