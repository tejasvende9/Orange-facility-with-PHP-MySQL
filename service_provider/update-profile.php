<?php include 'session-check.php';
if (isset($_POST['b1']))
{
     

    $onm=$_POST['onm'];
    $oque=$_POST['oque'];
    $omob=$_POST['omob'];
    $oans=$_POST['oans']; 
   
    
    if(!empty(basename($_FILES["ophoto"]["name"])))
    {
        
        $filename = basename($_FILES["ophoto"]["name"]);
        $path = $folder . $filename;
        if (move_uploaded_file($_FILES['ophoto']['tmp_name'], $path))
     {
       $qU="UPDATE business_owner SET onm='$onm',omob=$omob,oque='$oque', oans ='$oans',ophoto='$path' WHERE oid=$oid";
       
     }
     else
     {
        echo"<script> 
        alert ('Failed TO Update Image');
          window.location.href='update-profile.php';
  </script>";  
     }
    }
     else
     {
        $qU="UPDATE business_owner SET onm='$onm',omob=$omob,oque='$oque', oans ='$oans' WHERE oid=$oid";
       
     }
      
      if(mysqli_query($cn, $qU))
      {
          echo"<script> 
                alert ('Updated successful');
                  window.location.href='update-profile.php';
          </script>";  
      }
      else{
        echo"<script> 
                alert ('Failed to update');
                  window.location.href='update-profile.php';
          </script>";  
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
    

  <div class="col-md-4 p-3 shadow-lg mx-auto"  style="background-color:rgb(48, 31, 51);"
      >
                
          
          <form action="update-profile.php" method="post" enctype="multipart/form-data">
                          <div class="row">
                          <div class="col-md-12 ">

                          <input type="hidden" name="id" class="form-control mb-2" value="<?php echo $dataS['oid'];?>">

                                  <label class="text-white"> Name:</label>
                                  <input type="text" placeholder="Enter name" class="form-control mt-2 bg-light"
                                  name="onm" required  value="<?php echo $dataS['onm'];?>">
                              </div>
                        
                              <div class="col-md-12">
                                  <label class="text-white">Mobile:</label>
                                  <input type="text"  class="form-control mt-2 bg-light"
                                  name="omob"  required value="<?php echo $dataS['omob'];?>">
                                  
                              </div>


                             
                             
                              

                              
                          
                              <div class="col-md-12 ">
                                  <label class="text-white"> Security Quetion</label>
                                 <select name="oque" class="form-control">
                                    <option  disabled> -- Select Security Quetion --</option>
    <option value="What is your hobby" <?php if($dataS['oque'] == 'What is your hobby') {echo 'selected';}?>>What is your hobby?</option>
    <option value="What is your school Name" <?php if($dataS['oque'] == 'What is your school Name') {echo 'selected';}?>>What is your school Name?</option>
<option value="What is your Favourite Color" <?php if($dataS['oque'] == 'What is your Favourite Color') {echo 'selected';}?>>What is your Favourite Color?</option>
                                 </select>
                              </div>
                              <div class="col-md-12">
                                  <label class="text-white"> Security Answer</label>
                                  <input type="text" class="form-control mt-2 bg-light"
                                  placeholder="Answer" 
                                  name="oans" required value="<?php echo $dataS['oans'];?>">
                                  
                              </div>
                              <div class="col-12  py-2 wow ">
                            <div class="row">
                                <div class="col-md-8">
                                <label> Photo</label>
                                    <input type="file" class="form-control" name="ophoto">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo $dataS['ophoto']; ?>" alt="img" width="70">
                                </div>
                            </div>
                            <div clas
                              
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