<?php
   $dbhost = 'localhost';
   $dbuser = '';
   $dbpass = '';
   $dbname = 'test';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    $id = $_GET['id'];

   
    $sql = "DELETE FROM rest where id = '$id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );
   
if($retval) {
         header("location: Restaurant.php");
      }else {
        echo "Deletion failed!";
      }
   mysqli_close($conn);
?>
