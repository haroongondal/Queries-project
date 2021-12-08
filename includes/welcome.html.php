<?php
$currentCookieParams = implode(session_get_cookie_params())[0];
$firstName = $_SESSION['first_name'];
$lastName = $_SESSION['last_name'];
if($_SESSION['first_name']!='')
{
    if(strtolower($_SESSION['first_name'])=="laurie" && strtolower($_SESSION['last_name'])=="crawford")
    {
      $_SESSION['first_name']='Professor';
      $_SESSION['last_name']='';
    }
  echo 'Welcome  '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'!';
}
session_destroy();
$currentCookieParams++;
session_set_cookie_params($currentCookieParams);
session_start();
$_SESSION['first_name']=$firstName;
$_SESSION['last_name']=$lastName;
?>