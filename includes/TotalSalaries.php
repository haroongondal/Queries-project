<?php

  include 'display_results_table.php';

  $question = 'Display Total Salaries of All Employees.';

  $sql = "
          SELECT CONCAT('$ ',SUM(SALARY)) 'Total Salaries' FROM employees        
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
