<?php
$login_count = isset($_SESSION['login_count']) ? $_SESSION['login_count'] : 1; 
$firstName = $_SESSION['first_name'];
$lastName = $_SESSION['last_name'];
if($_SESSION['first_name']!='')
{
    if(strtolower($_SESSION['first_name'])=="laurie" && strtolower($_SESSION['last_name'])=="crawford")
    {
      $_SESSION['first_name']='Professor';
      $_SESSION['last_name']='';
    }
    if($login_count == 0)
  echo '<div class="welcome"><div>Welcome  '.$_SESSION['first_name'].' '.$_SESSION['last_name'].' to my site for the First Time.</div> <div>We Are Glad To see you Here</div>';
}
$_SESSION['login_count'] = $login_count + 1;

?>