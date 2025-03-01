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
                    
                    <form action="contact.php" method="post">
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
                        
                        <div class="text-center mt-3">
                            
                            <button type="submit" class="btn btn-orange text-white">
                                Register <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                
                            </button>

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