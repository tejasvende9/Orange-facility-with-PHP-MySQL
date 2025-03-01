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

       // echo $qI;
       
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
    

  <div class="col-md-12 p-1 shadow-lg mx-auto"  >
                
          
                <h3 class=" text-center">Business Information</h3>
                <table class="table table-bordered ">
                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Logo</th>
                            <th>Busniness Name</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                        <tbody>
                            <?php 
                            $qB="SELECT * FROM business_info WHERE oid= $oid";
                            $rsB = mysqli_query($cn,$qB);
                            $i =1;
                                while($dataB = mysqli_fetch_assoc($rsB))
                                {
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><img src="<?php echo $dataB['blogo']?>" width="50"></td>
                                <td><?php echo $dataB['bnm']?></td>
                                <td><?php echo $dataB['badr']?></td>
                                <td>
                                    <a href="edit-business.php?bid=<?php echo $dataB['bid'];?>" class="btn btn-success">
                                        Edit
                                    </a>
                                    <a href="business-enquiry.php?bid=<?php echo $dataB['bid'];?>" class="btn btn-danger">
                                        See Enquiry
                                    </a>
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