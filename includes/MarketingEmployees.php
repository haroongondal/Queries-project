<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the number of employees working in the Marketing department with a job title of Marketing Manager. ';

  $sql = "
  SELECT *
  FROM employees E INNER JOIN departments D USING(DEPARTMENT_ID) INNER JOIN employees M ON M.MANAGER_ID=E.EMPLOYEE_ID
  WHERE DEPARTMENT_NAME='Marketing'            
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
