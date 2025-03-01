<?php session_start();
if (!isset($_SESSION['aid'])) {
    echo "<script>
       window.location.href='index.php';
     </script>";
  }

  else
  {
    $aid = $_SESSION['aid'];
include 'connection.php';


$qCS="SELECT * FROM admindetails WHERE aid=$aid";
// echo $qS;

$rsC=mysqli_query($cn,$qCS);
$dataA = mysqli_fetch_assoc($rsC); 
 //var_dump($dataA);
}