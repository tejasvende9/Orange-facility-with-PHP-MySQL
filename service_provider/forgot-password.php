<?php
include 'connection.php';
$email=$que=$ans=$msg=$count="";

if(isset($_POST['b1'])){
     $email=$_POST['rem'];
     $que=$_POST['rque'];
     $ans=$_POST['rans'];

    $qs="SELECT * FROM business_owner WHERE oem='$email' AND oque='$que' AND oans='$ans'" ;
    $rs=mysqli_query($cn,$qs);
        // var_dump($rs);
    $count = mysqli_num_rows($rs);
 
      if($count == 1)
      {
                session_start();
                $_SESSION['oem']=$email;
                echo "<script>
                window.location.href='reset-password.php';
                </script>";    
      }
      echo "<script>
               alert('Invalid Credentials');
                </script>";   
     
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Forgot Password </title>
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
            <div class="col-md-8 ">

                <h3 class="ps-3 text-center">
                    <span class="border-3 border-start border-danger ps-3 ">
                        Forgot Password
                    </span>        </h3>
                    
                    <form action="forgot-password.php" method="post">
                      <label>Email </label>
                        <input type="email" name="rem" class="form-control " required>
                        
                        
                        <label class="text-white">Select Security Question</label>
                        <select  name="rque" class="form-control" required>
                            <option disabled selected>-- Select Quetion --</option>
                            <option value="What is your Hobby">What is your Hobby?</option>
                            <option value="What is your favourite color">What is your favourite color?</option>
                            <option value="What is school name">What is school name?</option>
                        </select>
                        
                        <label class="text-white">Your Answer</label>
                        <input type="text" name="rans" placeholder="Enter Answer"
                        class="form-control mb-2" required>
                        
                        <div class="text-center mt-3">
                            
                        <input type="submit" class="btn btn-orange text-white" 
value="Forgot Password " name="b1">

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