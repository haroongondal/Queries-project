<?php

  include 'display_results_table.php';

  $question = 'Write a query to get all unique first names that start with the letter P from the employees table.  Output the names in all upper case. Sort the results in ascending order.';

  $sql = "
  SELECT DISTINCT UPPER(FIRST_NAME) 'First_Name' 
  FROM employees 
  WHERE FIRST_NAME LIKE 'P%' 
  ORDER BY FIRST_NAME ASC
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
