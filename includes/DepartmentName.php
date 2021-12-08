<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the department name for all employees. Include the employee’s first name, last name, and department name in your output (In that order).  Sort the list by department name in ascending order, then by employee last name in ascending order and employee first name in ascending order.';

  $sql = "
  SELECT FIRST_NAME,LAST_NAME, DEPARTMENT_NAME
  FROM employees E INNER JOIN departments D USING(DEPARTMENT_ID) 
  ORDER BY DEPARTMENT_NAME, LAST_NAME, FIRST_NAME             
      ";

  $get_names = mysqli_query($conn, $sql);
  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
