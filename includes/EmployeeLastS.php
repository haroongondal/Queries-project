<?php

  include 'display_results_table.php';

  $question = 'Employees Last Name starting with T or S?';

  $sql = "
        SELECT * 
        FROM employees
        WHERE FIRST_NAME LIKE 'T%' OR FIRST_NAME LIKE 'S%'
        ORDER BY LAST_NAME DESC, FIRST_NAME DESC           
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
