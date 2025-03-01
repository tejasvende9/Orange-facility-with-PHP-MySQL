<?php session_start();

include 'connection.php';

if(isset($_POST["b1"]))
{
    $cnm =$_POST['cnm'];
    $cem =$_POST['cem'];
    $cmb =$_POST['cmb'];
    $cmsg =$_POST['cmsg'];

    $qI="INSERT INTO contactdetails(cn_name,cn_mob,cn_email,cn_msg) VALUES('$cnm',$cmb,'$cem','$cmsg')";
        if(mysqli_query($cn,$qI))
        {
           
            echo "<script>
            alert('Enquiry Submitted Successfully');
          
            </script>";
    
        }
        else
        {
            
            echo "<script>
            alert('Failed To Submit Enquiry');
          
            </script>";
    }

        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility</title>
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
            <div class="bg-white shadow-lg col-md-8 mx-auto rounded-4 p-3   ">
                    <h4>Contact Support</h4>
                    <p>+022 3243245476 <br>
(Monday to Friday 9 am to 5 pm IST)
</p>
            </div>
            <div class="bg-white shadow-lg col-md-8 mx-auto rounded-4 p-3 mt-3">
                    <h4>Address
</h4>
                    <p>
                    Near Satara Bus Stand, Raviwar Peth, <br> Satara, Maharashtra, 415001.

</p>
            </div>
            <div class="bg-white shadow-lg col-md-8 mx-auto rounded-4 p-3 mt-3 ">
                    <h4>Location Map</h4>
                    
                    <div class="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.09169315951!2d74.00156157439537!3d17.693128043926944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc23966039c4107%3A0xcc881ad38283113d!2sST%20Stand%20Satara!5e0!3m2!1sen!2sin!4v1711608906016!5m2!1sen!2sin" width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
        </div>
        <div class="col-md-6  p-4">
        <h3 class="ps-3 text-center">
<span class="border-3 border-start border-danger ps-3 ">
Contact Us
</span>        </h3>

        <form action="contact.php" method="post">
            <label>Name</label>
            <input type="text" name="cnm" class="form-control mb-3">

            <label >Mobile No.</label>
                        <input type="text" name="cmb" class="form-control mb-2" required>
            <label>Email</label>
            <input type="text" name="cem" class="form-control mb-3">
            <label>Message</label>
            <textarea name="cmsg" class="form-control" rows="5"></textarea>

            <div class="text-center mt-3">
                
            <input type="submit" value="Send Enquiry"
            name="b1" class="btn btn-danger">
                   
            </div>
        </form>


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