<?php
 
  session_start();
   
  session_destroy();
   
 // echo "<a href=index.php>click</a>";
   
  header('Location: index.php');
 
 
?>