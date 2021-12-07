<?php

  include 'display_results_table.php';

  $question = 'Display Each Employee With Salary >= 10,000';

  $sql = "
        SELECT EMPLOYEE_ID 'EMPLOYEE ID', LAST_NAME 'LAST NAME', FIRST_NAME 'FIRST NAME', SALARY 
        FROM employees WHERE SALARY>=10000 
        ORDER BY SALARY             
      ";

  $get_names = mysqli_query($conn, $sql);
  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
