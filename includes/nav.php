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
  <a href="<?php echo nav_url('question_1'); ?>">Question 1</a>
  <a href="<?php echo nav_url('question_2'); ?>">Question 2</a>
  <a href="<?php echo nav_url('question_3'); ?>">Question 3</a>
  <a href="<?php echo nav_url('question_4'); ?>">Question 4</a>
  <a href="<?php echo nav_url('question_5'); ?>">Question 5</a>
  <a href="<?php echo nav_url('question_6'); ?>">Question 6</a>
  <a href="<?php echo nav_url('question_7'); ?>">Question 7</a>
  <a href="<?php echo nav_url('add_employee'); ?>">Add Employee</a>
  <a href="<?php echo nav_url('del_employee'); ?>">Delete Employee</a>

</nav>
