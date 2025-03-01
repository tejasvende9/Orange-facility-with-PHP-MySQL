   
<?php
$cnm =$cmb=$cem=$cpwd=$cque=$cans=$msg="";
$folder ="photo/";
include 'connection.php';
        if(isset($_POST['b1']))
        {
            $cnm =$_POST['cnm'];
            $cmb =$_POST['cmb'];
            $cem =$_POST['cem'];
            $cpwd =$_POST['cpwd'];
            $cadr =$_POST['cadr'];
            $cque =$_POST['cque'];
            $cans =$_POST['cans'];
            $qS="SELECT * FROM customer_details WHERE cem='$cem'";
            $rs =mysqli_query($cn,$qS);

            $count =mysqli_num_rows($rs);
            if($count >0)
            {

                echo "<script>
                alert('Username Already Exists');
                window.location.href='register.php';
                </script>";            }
            else
            {
                $filename = basename($_FILES["cphoto"]["name"]);
                $path = $folder.$filename;

                    if(move_uploaded_file($_FILES["cphoto"]["tmp_name"],$path))
                    {
                        $qI="INSERT INTO customer_details(cnm,cmob,cem,cpwd,cque,cans,cadr,cphoto) 
                        VALUES('$cnm',$cmb,'$cem','$cpwd','$cque','$cans','$cadr','$path')";

                        //echo $qI;
                       
                        if(mysqli_query($cn,$qI))
                        {
                                echo "<script>
                                alert('Register Successfully');
                                window.location.href='login.php';
                                </script>";
                        }

                        else
                        {
                            echo "<script>
                                alert('Registration failed');
                                window.location.href='register.php';
                                </script>";
                        }
                    }
            }
        }

?>
       


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Register </title>
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
                        Register Here..
                    </span>        </h3>
                    
                    <form action="register.php" method="post" enctype="multipart/form-data">
                        <label>Name</label>
                        <input type="text" name="cnm" class="form-control " required>
                        
                        <label>Mobile No </label>
                        <input type="text" name="cmb" class="form-control " required>
                        
                        <label>Email </label>
                        <input type="email" name="cem" class="form-control " required>
                        
                        <label>Password </label>
                        <input type="password" name="cpwd" class="form-control " required>
                        
                        <label>Address </label>
                        <input type="text" name="cadr" class="form-control " required>
                        
                        
                        <label class="text-white">Select Security Question</label>
                        <select  name="cque" class="form-control" required>
                            <option disabled selected>-- Select Quetion --</option>
                            <option value="What is your Hobby">What is your Hobby?</option>
                            <option value="What is your favourite color">What is your favourite color?</option>
                            <option value="What is school name">What is school name?</option>
                        </select>
                        
                        <label class="text-white">Your Answer</label>
                        <input type="text" name="cans" placeholder="Enter Answer"
                        class="form-control mb-2" required>

                        
                                  <label class="text-white">Photo:</label>
                                  <input type="file" class="form-control mt-2 bg-light"
                                  name="cphoto" required>
                                  
                             
                        
                        <div class="text-center mt-3">
                            
                        <input type="submit" value="Register"
                        class="btn btn-orange text-white" name="b1">
                         

                            <p class="mt-2">
                                <a href="login.php"
                                class="text-decoration-none">Already Have An Account ?</a>

                               
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