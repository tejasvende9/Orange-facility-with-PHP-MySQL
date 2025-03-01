<?php session_start();
  include 'connection.php';
  
  if(!isset($_SESSION['aem'])) 
  {
     echo "<script>
     window.location.href='forgot-password.php';
     </script>";
  } 
 
  else
  {
     $em = $_SESSION['aem'];

  }
   $np=$cp=$msg="";
  if(isset($_POST["b1"])){
  
  

  $np=$_POST['npwd'];
  $cp=$_POST['cpwd'];

     if($np == $cp){
          $qu="UPDATE admindetails SET apwd='$np' WHERE aemail='$em'";

            if(mysqli_query($cn,$qu))
            {
                session_destroy();
                echo"<script>
                alert('Password update successfully');
                window.location.href='index.php';
                 </script>";
            }
            else{
                $msg="failed to update password";
            }
     }
       else{
         $msg ="New Password Must be same as Confirm Password";
       }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Reset Password </title>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>

  <div class="container">

  <!-- Header Start -->

  <?php  include 'header.php';?>
  <!-- Header End -->
 
    <!-- footer Start -->

<div class="container bg-light shadow mb-5 p-4">
    <div class="row">
        <div class="col-md-6 ">
         
           
                  
                    
                    <div class="text-center">
            <img src="images/ss.jpg" alt="ss"
            width="60%">

                    </div>
        
        </div>
        <div class="col-md-6  p-4">
            <div class="col-md-8  mt-5">

                <h3 class="ps-3 text-center">
                    <span class="border-3 border-start border-danger ps-3  mb-3">
                        Reset Password
                    </span>        </h3>
                    <p class="text-center text-danger">
                        <?php echo $msg;?>
                    </p>
                    
                    <form action="reset-password.php" method="post">
                       <label>New Password </label>
                        <input type="password" name="npwd" class="form-control  " required>
                        
                       
                       <label>Confirm Password </label>
                        <input type="password" name="cpwd" class="form-control " required>
                        
                       
                        
                        
                        
                        <div class="text-center mt-3">
                            
                        <input type="submit" class="btn btn-orange text-white" 
value="Reset Password " name="b1">  

                            <p class="mt-2">
                                <a href="index.php"
                                class="text-decoration-none"> Back</a>

                               
                            </p>
                        </div>
                    </form>
                </div>


        </div>
    </div>
    </div>
</div>

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