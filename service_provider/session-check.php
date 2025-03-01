<?php session_start();
if (!isset($_SESSION['oid'])) {
    echo "<script>
       window.location.href='index.php';
     </script>";
  }

  else
  {
    $oid = $_SESSION['oid'];
include 'connection.php';


$qCS="SELECT * FROM  business_owner WHERE oid=$oid";
// echo $qS;

$rsC=mysqli_query($cn,$qCS);
$dataS = mysqli_fetch_assoc($rsC); 
 //var_dump($dataS);
}