<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the first 3 characters of all last names that start with an H from the employees table and sort them in descending order. ';

  $sql = "
SELECT SUBSTRING(LAST_NAME,0,3) 'Last Name' 
FROM employees 
WHERE LAST_NAME LIKE 'H%' 
ORDER BY LAST_NAME DESC
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
