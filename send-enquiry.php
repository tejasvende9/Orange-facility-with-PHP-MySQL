<?php session_start();
if (!isset($_SESSION['cid'])) {
    echo "<script>
       window.location.href='login.php';
     </script>";
  }

  else
  {
    $cid = $_SESSION['cid'];
  include 'connection.php';
  $qCS="SELECT * FROM  customer_details WHERE cid=$cid";

$rsC=mysqli_query($cn,$qCS);
$dataC = mysqli_fetch_assoc($rsC); 
//var_dump($dataC);
}




$bid = $_POST['bid'];
$cid = $_POST['cid'];
$date = date('Y-m-d');

$qI ="INSERT INTO enquirydetails(cid,bid,endate) VALUES($cid,$bid,'$date')";
    if(mysqli_query($cn,$qI))
    {
        echo "<script>
        alert('Enquiry Submitted');
        window.location.href='my-enquiry.php';
        </script>";

    }
    else
    {
        echo "<script>
        alert('Failed To Send')
        </script>";
    }
?>