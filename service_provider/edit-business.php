<?php include 'session-check.php';
$bid = $_GET['bid'];
$qB = "SELECT * FROM  business_info WHERE bid=$bid";
$rB = mysqli_query($cn, $qB);
$dataB = mysqli_fetch_array($rB);
 //var_dump($dataB);
$folder='photo/';
if (isset($_POST['b1']))
{
     
$bid = $_POST['bid'];
    $bnm = $cn->real_escape_string($_POST['bnm']);
    $badr = $cn->real_escape_string($_POST['badr']);
    $binfo = $cn->real_escape_string($_POST['binfo']);
    $ctid=$_POST['ctid'];
   
       
    if(!empty(basename($_FILES["blogo"]["name"])))
    {
        
        $filename = basename($_FILES["blogo"]["name"]);
        $path = $folder . $filename;
        if (move_uploaded_file($_FILES['blogo']['tmp_name'], $path))
     {
       $qU="UPDATE business_info SET bnm='$bnm',blogo='$path',binfo='$binfo',badr ='$badr',ctid= $ctid WHERE bid=$bid";
       
     }
     else
     {
        echo"<script> 
        alert ('Failed To Upload Image');
          window.location.href='business-info.php';
  </script>";  
     }
    }
     else
     {
      $qU="UPDATE business_info SET bnm='$bnm',binfo='$binfo',badr ='$badr',ctid= $ctid WHERE bid=$bid";
       
     }
      
      if(mysqli_query($cn, $qU))
      {
          echo"<script> 
                alert ('Business Info updated');
                  window.location.href='business-info.php';
          </script>";  
      }
      else{
        echo"<script> 
                alert ('Failed to update');
                  window.location.href='business-info.php';
          </script>";  
      }

     
}

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
    

  <div class="col-md-10 p-3 shadow-lg mx-auto" >
                
          
          <form action="edit-business.php?bid=<?php echo $bid;?>" method="post" enctype="multipart/form-data">
                          <div class="row">

                          <div class="row">
                           <div class=" col-md-6">
                           <input type="hidden" name="bid" class="form-control mb-2" value="<?php echo $dataB['bid'];?>">

                              <label for="" class=''>
                                 Business Name
                              </label>
                              <input type="text" name="bnm" class="form-control" required
                              value="<?php echo $dataB['bnm']?>">
                           </div>
                           <div class=" col-md-6">
                           <label for="" class=''>
                                 Business Logo
                              </label>
                            
                              <div class="row">
                                 <div class="col-md-8">
                                 <input type="file" name="blogo" class="form-control" >
                                 </div>
                                 <div class="col-md-4">
                                    <img src="<?php echo $dataB['blogo']?>" alt=""
                                    width='20'>
                                 </div>
                              </div>
                           </div>
                          </div>
                          <div class="row">
                           <div class=" col-md-6">
                              <label for="" class=''>
                                 Business Address
                              </label>
                              <input type="text" name="badr" class="form-control" required
                              value="<?php echo $dataB['badr']?>">
                           </div>
                           <div class=" col-md-6">
                           <label for="" class=''>
                                 Business Category
                              </label>
                              <select name="ctid" class="form-control">
                <option value="" disabled selected >select category</option>
                <?php 
                $date = date('Y-m-d');
                $qC="SELECT * FROM business_category ";
                $rC=mysqli_query($cn, $qC);
                while($rowC=mysqli_fetch_array($rC)){
                  // var_dump($row);
                  ?>
                <option <?php if($dataB['ctid'] == $rowC['ctid'] ) {echo 'selected';}?> value="<?php echo $rowC['ctid']?>"><?php echo $rowC["ctnm"]?></option>
               
               <?php
                }
                ?>
              </select>
                           </div>
                        </div>
                           <div class="row">
                           <div class=" col-md-12">
                              <label for="" class=''>
                                 Business Info
                              </label>
<textarea name="binfo" class="form-control"  rows="3"><?php echo $dataB['binfo']?></textarea>   
                        </div>
                          
                          </div>
                                     <div class="text-center mt-3">

<input type="submit" class="btn btn-primary text-center " value="Update Business information"
name="b1">
<a href="business-info.php" class='btn btn-danger'>
   Back
</a>


</div>
                      </form>
              
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