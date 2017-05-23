<?php

   include 'classes/DBAccess.php';

   class Sum {

       public function fetchAll($conn){
           $sql = "SELECT * FROM `users`";

           $query = mysqli_query($conn, $sql);
           $data = mysqli_fetch_all($query);
           return $data;

       }

   }

   $d = (new DBAccess())->mysqli;
   echo "<pre>";
   print_r($d);
   echo "</pre>";

   $f = Sum::fetchAll($connect);

   echo "<pre>";
   print_r($f);
   echo "</pre>";
?>