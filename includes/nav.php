<?php

  // generate an href using the existing first and last name variables, so the welcome message doesn't disappear
  function nav_url($query_name) {
    if ($_SESSION['first_name']==''){
      header('location:./includes/login.php');
    }
    else
    {
      $link = (isset($_GET['first_name']) && isset($_GET['last_name'])) ?
        '?first_name=' . $_GET['first_name'] . '&last_name=' . $_GET['last_name'] . '&' . $query_name:
        '?' . $query_name;
      return $link;
    }
  }

?>

<nav>
  <a href="<?php echo nav_url('display_name'); ?>">Display Names</a>
  <a href="<?php echo nav_url('employee_department'); ?>">Employee Department</a>
  <a href="<?php echo nav_url('employee_lasts'); ?>">Employee Last Name with S or T</a>
  <a href="<?php echo nav_url('employee_pf'); ?>">Employee PF</a>
  <a href="<?php echo nav_url('employee_salary'); ?>">Employee Salaries 10,000</a>
  <a href="<?php echo nav_url('total_salary'); ?>">Total Salaries</a>
</nav>
