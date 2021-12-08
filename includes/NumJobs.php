<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the number of different types of jobs available in the employees table.';

  $sql = "
  SELECT J.JOB_TITLE, COUNT(*) JOBS 
  FROM employees E INNER JOIN jobs J USING(JOB_ID) 
  GROUP BY JOB_ID 
  ORDER BY JOB_TITLE        
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
