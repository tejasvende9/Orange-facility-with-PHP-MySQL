<?php
include 'connection.php';
// var_dump($cn);
$email=$pass=$msg="";
if(isset($_POST['b1']))
{
  $email=$_POST['cem'];
  $pass=$_POST['cpwd'];


$qS="SELECT * FROM  customer_details WHERE cem='$email' AND cpwd='$pass'";


    $rs= mysqli_query($cn,$qS);
    $count=mysqli_num_rows($rs);
     var_dump($count);

    if($count==0)
    {

        echo"<script>
        window.alert('Invalid Credentials');
     </script>";
   }
   
    else{
      session_start();
      $data=mysqli_fetch_assoc($rs);
      $_SESSION['cid']=$data['cid'];
      
      echo"<script>
         window.location.href='dashboard.php';
      </script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Login </title>
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
                    <span class="border-3 border-start border-danger ps-3 ">
                        Login Here..
                    </span>        </h3>
                    
                    <form action="login.php" method="post">
                       <label>Email </label>
                        <input type="email" name="cem" class="form-control " required>
                        
                        <label>Password </label>
                        <input type="password" name="cpwd" class="form-control " required>
                        
                       
                        
                        
                        
                        <div class="text-center mt-3">
                            
                          <input type="submit" value="Login" name="b1" class="btn btn-orange text-white">
                                
                            <p class="mt-2">
                                <a href="register.php"
                                class="text-decoration-none">Create An Account ?</a>

                                <a href="forgot-password.php"
                                class="text-decoration-none text-danger">forgot password? ?</a>
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