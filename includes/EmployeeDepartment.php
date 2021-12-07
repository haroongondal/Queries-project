<?php

  include 'display_results_table.php';

  $question = 'Display DepartmentID from employees table?';

  $sql = "
        SELECT DISTINCT DEPARTMENT_ID AS 'Department ID' 
        FROM employees      
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
