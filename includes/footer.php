<?php
  $login_count = isset($_SESSION['login_count']) ? $_SESSION['login_count'] : 1; 
?>
<footer>
  <div>
    <h4>Database Project with PHP Scripting</h4>
    <?php
    if($login_count > 0){
      echo '<h5>User Login Count: '.$login_count;
    }
    ?>
  </div>
</footer>
