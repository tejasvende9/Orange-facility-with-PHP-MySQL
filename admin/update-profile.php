<?php include 'session-check.php';
if (isset($_POST['b1']))
{
     

    $anm=$_POST['anm'];
    $aque=$_POST['aque'];
    $aans=$_POST['aans']; 
   



    
        $qu="UPDATE  admindetails SET anm ='$anm',aque='$aque',aans= '$aans'  WHERE aid =" .$_SESSION['aid'];
    

    if(mysqli_query($cn,$qu))
{
    
    echo "<script>
alert('update successfully');
window.location.href='update-profile.php';
</script>";

}
else
{
    echo "<script>
alert(' failed to update');

</script>";

}
     
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facility | Admin Profile</title>
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
    

  <div class="col-md-4 p-3 shadow-lg mx-auto"  style="background-color:rgb(48, 31, 51);"
      >
                
          
          <form action="update-profile.php" method="post" enctype="multipart/form-data">
                          <div class="row">
                          <div class="col-md-12 ">

                          <input type="hidden" name="id" class="form-control mb-2" value="<?php echo $dataA['aid'];?>">

                                  <label class="text-white"> Name:</label>
                                  <input type="text" placeholder="Enter name" class="form-control mt-2 bg-light"
                                  name="anm" required  value="<?php echo $dataA['anm'];?>">
                              </div>
                        
                              <div class="col-md-12">
                                  <label class="text-white">Email :</label>
                                  <input type="text"  class="form-control mt-2 bg-light"
                                  name="aem"  required value="<?php echo $dataA['aemail'];?>" readonly>
                                  
                              </div>

                             
                             
                              

                              
                          
                              <div class="col-md-12 ">
                                  <label class="text-white"> Security Quetion</label>
                                 <select name="aque" class="form-control">
                                    <option  disabled> -- Select Security Quetion --</option>
    <option value="What is your hobby" <?php if($dataA['aque'] == 'What is your hobby') {echo 'selected';}?>>What is your hobby?</option>
    <option value="What is your school Name" <?php if($dataA['aque'] == 'What is your school Name') {echo 'selected';}?>>What is your School Name?</option>
<option value="What is your Favourite Color" <?php if($dataA['aque'] == 'What is your Favourite Color') {echo 'selected';}?>>What is your Favourite Color?</option>
                                 </select>
                              </div>
                              <div class="col-md-12">
                                  <label class="text-white"> Security Answer</label>
                                  <input type="text" class="form-control mt-2 bg-light"
                                  placeholder="Answer" 
                                  name="aans" required value="<?php echo $dataA['aans'];?>">
                                  
                              </div>
                              
                              
                          </div>
                          <div class="text-center mt-3">

<input type="submit" class="btn btn-primary text-center mt-3  mb-5" value="Update Profile"
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