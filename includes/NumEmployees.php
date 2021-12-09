<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the average salary and the total number of employees who work in the Accounting department.';

  $sql = "
  SELECT AVG(SALARY) 'Average Salary', COUNT(*) 'Total Employees' 
  FROM employees E INNER JOIN departments D USING(DEPARTMENT_ID) 
  WHERE DEPARTMENT_NAME='Accounting' 
  GROUP BY DEPARTMENT_ID   
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
