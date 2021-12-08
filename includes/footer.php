<?php
  $currentCookieParams = implode(session_get_cookie_params())[0];
?>
<footer>
  <div>
    <h4>Database Project with PHP Scripting</h4>
    <?php
    if($currentCookieParams > 0){
      echo '<h5>User Login Count: '.$currentCookieParams;
    }
    else{
      
      // session_destroy();
      // session_set_cookie_params($currentCookieParams+1);
      
    }
    ?>
  </div>
</footer>
