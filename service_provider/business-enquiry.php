<?php include 'session-check.php';
$bid = $_GET['bid'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Service Provider Profile</title>
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
    

  <div class="col-md-12 p-1 shadow-lg mx-auto"  >
                
          
                <h3 class=" text-center">Business Information</h3>
                <table class="table table-bordered ">
                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Customer Mobile</th>
                            <th>Customer Address</th>
                            <th>Photo</th>
                        </tr>
                    </thead>

                        <tbody>
                            <?php 
                            $qB="SELECT c.cid,c.cnm,c.cmob,c.cem,c.cadr,c.cphoto,e.cid,e.bid FROM customer_details c INNER JOIN enquirydetails e 
                            on c.cid =e.cid WHERE e.bid =$bid";
                            $rsB = mysqli_query($cn,$qB);
                            $i =1;
                                while($dataB = mysqli_fetch_assoc($rsB))
                                {
                                    
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $dataB['cnm']?></td>
                                <td><?php echo $dataB['cmob']?></td>
                                <td><?php echo $dataB['cadr']?></td>
                                <td>
                                   <img src="../<?php echo $dataB['cphoto']?>" alt=""
                                   width="50">
                                </td>

                            </tr>

                            <?php
                                 $i++;
                                }
                            ?>
                            
                            
                        </tbody>
                </table>
              
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