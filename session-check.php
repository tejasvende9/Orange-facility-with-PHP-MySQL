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
// echo $qCS;

$rsC=mysqli_query($cn,$qCS);
$dataC = mysqli_fetch_assoc($rsC); 
//var_dump($dataC);
}