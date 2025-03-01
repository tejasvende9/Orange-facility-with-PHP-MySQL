<?php
// var_dump($cn);
include 'session-check.php'?>
 <?php
$msg="";
   if(isset($_POST['b1']))
   {
    $ureview=$cn -> real_escape_string($_POST['ureview']);

      $qI="INSERT INTO   feedbackdetail(cid,ftext,fstatus)VALUES($cid,'$ureview','Not Published')";
      if($rs=mysqli_query($cn,$qI))
      {
       
        echo "<script>
        alert('Review Submitted Successfully');
      
        </script>";
      }
      else
      {

        echo "<script>
        alert('Failed To Submit Review');
      
        </script>";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login</title>
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

      <div class="col-md-4 p-1 mx-auto bg-white shadow-lg my-3 p-3">
             
          
        
    <form action="give-feedback.php" method="post" class="main-form">
        <div class="col-md-6 mx-auto mt-5 ">
        <?php echo $msg ?>

          <div class="col-md-12 ">
            <label class="text-dark">Your Feedback</label>
            <textarea name="ureview"  class="form-control" rows="5" required></textarea>

          </div>
          
        
          
          
          
          
        </div>

        <div class=" text-center">

            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Add"
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