<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the maximum and minimum salary from the employees table.';

  $sql = "
  SELECT MAX(SALARY) 'Maximum Salary', MIN(SALARY) 'Minimum Salary' 
  FROM employees
      ";

  $get_names = mysqli_query($conn, $sql);
  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
