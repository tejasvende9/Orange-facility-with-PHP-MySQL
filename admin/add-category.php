<?php include "session-check.php";
$folder = "photo/";
$msg = "";
if (isset($_POST["b1"])) {
    // echo"clicked";
    

    $cat_nm = $_POST["ctnm"];
    $filename = $_FILES["ct_photo"]["name"];
    $path = $folder . $filename;

    if (move_uploaded_file($_FILES['ct_photo']['tmp_name'], $path)) {
        $qi = "INSERT INTO  business_category(ctnm,ct_photo)
       VALUES('$cat_nm','$path')";

        //    echo $qi;

        if (mysqli_query($cn, $qi)) {
          
            echo "<script>
            alert('Category Added Successfully');
           
            </script>";

        } else {
            $msg = "failed to add ";
        }

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
    

  <div class="row mt-5 bg-white p-3">
  <div class="col-md-11 mx-auto shadow-lg p-1 ">


<div class="row p-1">
    <div class="col-md-3 border-right border-2">
    <p class="text-danger">
            <?php echo $msg;?>
        </p>
        <form action="add-category.php" method="post" 
        class="main-form" enctype="multipart/form-data">
            <div class="row mt-5 ">
                <div class="col-12  py-2 wow fadeInLeft">
                    <label> Category Name</label>
                    <input type="text" class="form-control"
                     placeholder="Name" name="ctnm"
                        required>
                </div>
                
              

                <div class="col-12  py-2 wow fadeInLeft">
                    <label> Photo</label>
                    <input type="file" class="form-control" name="ct_photo" required>
                </div>

                <div class="col-12  py-2 wow text-center">
                    <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Add"
                        name="b1">

                </div>


            </div>


        </form>
    </div>
    <div class="col-md-9">
        <h3 class="text-center text-primary">
             Category Info
        </h3>
        <table class="table table-bordered" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Photo</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                   $qs="SELECT * FROM   business_category";
                   $rs=mysqli_query($cn,$qs);
        $i=1;
                   while ($data=mysqli_fetch_array($rs)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['ctnm']; ?></td>
                    <td>
                        <img src="<?php echo $data['ct_photo']; ?>" alt="image" width="50">
                    </td>

                  
                 
                    <td>
                        <a href="edit-category.php?cat_id=<?php echo $data['ctid']; ?>">Edit</a>
                       

                    </td>
                </tr>
<?php $i++;} ?>


                
            </tbody>
        </table>
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