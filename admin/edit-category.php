<?php include 'session-check.php';
$cat_id = $_GET['cat_id'];
$folder = "photo/";
$msg =$err="";
$qT = "SELECT * FROM  business_category WHERE ctid=$cat_id";
$rT = mysqli_query($cn, $qT);
$dataT = mysqli_fetch_array($rT);
// var_dump($dataT);
 
if(isset($_POST["b1"])){
    // echo"clicked";
    $cat_id=$_POST['cat_id'];
    $cat_nm=$_POST["cat_nm"];
    
    if(!empty(basename($_FILES["cat_photo"]["name"])))
    {
        
        $filename = basename($_FILES["cat_photo"]["name"]);
        $path = $folder . $filename;
        if (move_uploaded_file($_FILES['cat_photo']['tmp_name'], $path))
     {
       $qU="UPDATE business_category SET ctnm='$cat_nm',ct_photo='$path' WHERE ctid=$cat_id";
       
     }
     else
     {
         $err="image failed to upload";
     }
    }
     else
     {
        $qU="UPDATE business_category SET ctnm='$cat_nm' WHERE ctid=$cat_id";
       
     }
      
      if(mysqli_query($cn, $qU))
      {
          echo"<script> 
                alert ('Updated successful');
                  window.location.href='add-category.php';
          </script>";  
      }
      else{
        echo"<script> 
                alert ('Failed to update');
                  window.location.href='add-category.php';
          </script>";  
      }

    


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Facilities | Add Category</title>
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
    

  <div class="row bg-white p-3">
  <div class="col-md-11 mx-auto shadow-lg p-1 ">


<div class="row p-1">
<div class=" bg-white col-md-10 mx-auto glass ">
           
                <h3 class="text-center text-primary">
                           Edit Category Info
                        </h3>

                        <p class="text-center text-danger">
                            <?php echo $err;?>
                        </p>
                        <div class="col-md-6 mx-auto bg-white shadow-lg p-3">
                        <form action="edit-category.php?cat_id=<?php echo $cat_id; ?>" method="post" class="main-form"
                            enctype="multipart/form-data">
                            <div class="row mt-5 ">
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <input type="hidden" name="cat_id" class="form-control mb-2"
                                        value="<?php echo $dataT['ctid']; ?>">
                                        
                                    <label>Package Name</label>
                                    <input type="text" class="form-control"  name="cat_nm"
                                        required value="<?php echo $dataT['ctnm']; ?>">
                                </div>
                               
                               

                              
                                <div class="col-12  py-2 wow ">
                            <div class="row">
                                <div class="col-md-8">
                                <label> Photo</label>
                                    <input type="file" class="form-control" name="cat_photo">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo $dataT['ct_photo']; ?>" alt="img" width="70">
                                </div>
                            </div>
                            <div class="col-12  py-2 wow fadeInLeft">
                                
                            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Edit Treatement"
                                        name="b1">

                                    <a href="add-category.php " class="pt-3 text-danger">Back</a>

                                </div>

                                </div>


                            </div>


                        </form>
                        <div>
   

      <br><br><br><br><br>
    </div>

        </form>
    </div>
    
</div>
</div>
</div>

</div>
  
  </div>
         
      

       
      </div>
    </div>
<!-- contat End -->




<!-- Social icons fixed start-->

<?php include 'social.php';?>
        <!-- Social icons fixed end-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
       
            AOS.init();
        
</script>
<script src="js/my.js">
   
</script>
    </body>
    </html>