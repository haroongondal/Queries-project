<?php
$login_count = isset($_SESSION['login_count']) ? $_SESSION['login_count'] : 1; 
$firstName = $_SESSION['first_name'];
$lastName = $_SESSION['last_name'];

  echo '<div class="welcome"><div>Welcome!</div></div>';
$_SESSION['login_count'] = $login_count + 1;

?>