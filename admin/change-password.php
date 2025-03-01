<?php
// var_dump($cn);
include 'session-check.php'?>

<?php
        $msg = $passerr = "";
        if (isset($_POST['b1'])) {
          $opwd=$_POST["opwd"];
          $npwd = $_POST["npwd"];
          $cpwd = $_POST["cpwd"];

          $qCP="SELECT * FROM admindetails WHERE apwd='$opwd' AND aid=".$aid;
          $rsCP=mysqli_query($cn,$qCP);

          $count=mysqli_num_rows($rsCP);
          // echo $count;
          if($count==1)
          {
          if ($npwd == $cpwd) 
          {
            $update = "UPDATE admindetails SET apwd='$npwd' WHERE aid=" . $aid;

            if (mysqli_query($cn, $update)) 
            {
              session_destroy();
              echo "<script>alert('Password Updated');
            
              window.location.href='index.php'</script>";
            } 
            else
             {
              echo "<script>alert('Password Updation Failed')</script>";
            }
          } 
          else {
            $msg = "Password Dose Not Match";
          }
        }
        else
        {
            $msg="Invalid Credtials";
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
             
          
          <form action="change-password.php" method="post" class="main-form">
        
        <span class="text-danger"> <?php echo $msg; ?></span>

          <div class="col-md-12 ">
            <label >Old Password</label>
            <input type="password" class="form-control" placeholder="Old Password"
            name="opwd" required>
          </div>
          <div class="col-md-12 ">
            <label >New Password</label>
            <input type="password" class="form-control" placeholder="New Password"
            name="npwd" required>
          </div>
          <div class="col-md-12 ">
            <label >Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password"
            name="cpwd" required>
          </div>
        
          
          
          
          
        

        <div class=" text-center">

            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Change Password"
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