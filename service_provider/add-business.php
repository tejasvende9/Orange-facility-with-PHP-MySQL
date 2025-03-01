<?php include 'session-check.php';
$folder='photo/';
if (isset($_POST['b1']))
{
     

    $bnm = $cn->real_escape_string($_POST['bnm']);
    $badr = $cn->real_escape_string($_POST['badr']);
    $binfo = $cn->real_escape_string($_POST['binfo']);
    $ctid=$_POST['ctid'];
   
    $filename = basename($_FILES["blogo"]["name"]);
    $path = $folder.$filename;

    if(move_uploaded_file($_FILES["blogo"]["tmp_name"],$path))
    {
        $qI="INSERT INTO business_info(bnm,blogo,binfo,badr,ctid,oid,bstatus)
        VALUES('$bnm','$path','$binfo','$badr',$ctid,$oid,'Published')";

        echo $qI;
       
        if(mysqli_query($cn,$qI))
        {
                echo "<script>
                alert('Business Added Successfully');
                window.location.href='business-info.php';
                </script>";
        }

        else
        {
            echo "<script>
                alert('Failed To Add Business');
                window.location.href='add-business.php';
                </script>";
        }
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
    

  <div class="col-md-10 p-3 shadow-lg mx-auto"  style="background-color:rgb(48, 31, 51);">
                
          
          <form action="add-business.php" method="post" enctype="multipart/form-data">
                          <div class="row">

                          <div class="row">
                           <div class=" col-md-6">
                              <label for="" class='text-white'>
                                 Business Name
                              </label>
                              <input type="text" name="bnm" class="form-control" required>
                           </div>
                           <div class=" col-md-6">
                           <label for="" class='text-white'>
                                 Business Logo
                              </label>
                              <input type="file" name="blogo" class="form-control" required>
                           </div>
                          </div>
                          <div class="row">
                           <div class=" col-md-6">
                              <label for="" class='text-white'>
                                 Business Address
                              </label>
                              <input type="text" name="badr" class="form-control" required>
                           </div>
                           <div class=" col-md-6">
                           <label for="" class='text-white'>
                                 Business Category
                              </label>
                              <select name="ctid" class="form-control">
                <option value="" disabled selected >select category</option>
                <?php 
                $date = date('Y-m-d');
                $qC="SELECT * FROM business_category ";
                $rC=mysqli_query($cn, $qC);
                while($rowC=mysqli_fetch_array($rC)){
                  // var_dump($rowT);
                  ?>
                <option value="<?php echo $rowC['ctid']?>"><?php echo $rowC["ctnm"]?></option>
               
               <?php
                }
                ?>
              </select>
                           </div>
                        </div>
                           <div class="row">
                           <div class=" col-md-12">
                              <label for="" class='text-white'>
                                 Business Info
                              </label>
<textarea name="binfo" class="form-control"  rows="3"></textarea>                           </div>
                          
                          </div>
                                     <div class="text-center mt-1">

<input type="submit" class="btn btn-primary text-center mt-3  mb-5" value="Add Business"
name="b1">


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