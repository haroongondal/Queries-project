<?php

  include 'display_results_table.php';

  $question = 'Display Each Employee Salary and PF?';

  $sql = "
        SELECT LAST_NAME 'LAST NAME', FIRST_NAME 'FIRST NAME', SALARY, ROUND(0.12*SALARY,2) PF 
        FROM employees
        ORDER BY LAST_NAME, FIRST_NAME           
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
