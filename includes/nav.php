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
  <a href="<?php echo nav_url('question_1'); ?>">MinMaxSalaries</a>
  <a href="<?php echo nav_url('question_2'); ?>">NumEmployees</a>
  <a href="<?php echo nav_url('question_3'); ?>">MarketingEmployees</a>
  <a href="<?php echo nav_url('question_4'); ?>">NumJobs</a>
  <a href="<?php echo nav_url('question_5'); ?>">DepartmentName</a>
  <a href="<?php echo nav_url('question_6'); ?>">UniqueFirstNames</a>
  <a href="<?php echo nav_url('question_7'); ?>">FirstThreeCharacters</a>
  <a href="<?php echo nav_url('add_employee'); ?>">Add Employee</a>
  <a href="<?php echo nav_url('del_employee'); ?>">Delete Employee</a>

</nav>
