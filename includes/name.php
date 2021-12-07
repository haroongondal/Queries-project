<?php
  include 'name.html';
  if(isset($_GET['submit'])){
    echo $_GET['first_name'].' '. $_GET['last_name'];
    header('location:../home.php');
  }
?>
