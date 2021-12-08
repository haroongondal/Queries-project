<header>
  <h1>Project Management</h1>
  <?php //include 'name.php'; ?>
    <!-- if($_GET['first_name']) -->
  <?php
    $currentCookieParams = implode(session_get_cookie_params())[0];
    session_start();
    if($_SESSION['first_name']!='')
    {
        if(strtolower($_SESSION['first_name'])=="laurie" && strtolower($_SESSION['last_name'])=="crawford")
        {
          $_SESSION['first_name']='Professor';
          $_SESSION['last_name']='';
        }
      echo 'Welcome to my site, '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'!'.$currentCookieParams;
    }
    else 
      echo 'Guest User';
  ?>
  
</header>
