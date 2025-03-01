<?php include 'session-check.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | My Enquiry</title>
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
    
<div class="row">
<div class="col-md-12 mx-auto">
   
    <table class="table table-bordered" id="contact">
        <thead>
            <tr>
                <th>#</th>
                <th>Business Logo</th>
                <th>Business Name</th>
                <th>Business Address</th>
               
                <th>Enquiry Date</th>
               
              
            </tr>
                    </thead>
                    <tbody>
<?php 
        $qB="SELECT b.bid,b.bnm,b.blogo,b.badr,e.enid,e.cid,e.endate FROM 
        business_info b  INNER JOIN  enquirydetails e ON b.bid = e.bid WHERE e.cid =$cid";
        $rB=mysqli_query($cn,$qB);

        $i=1;

        while($dataB = mysqli_fetch_assoc($rB))
        {

?>


                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $dataB['bnm']?></td>
                            <td>
                                <img src="service_provider/<?php echo $dataB['blogo'];?>" width="20">
                            </td>
                            <td><?php echo $dataB['badr']?></td>
                            <td><?php echo $dataB['endate']?></td>

                          
                        </tr>
                        
<?php
$i++;

}   
?>
                 

                       
                    </tbody>
                </table>

                <br><br><br><br><br>
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