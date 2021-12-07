<?php

  include 'display_results_table.php';

  $question = 'Display the name of each employee?';

  $sql = "
      SELECT LAST_NAME 'Last Name', FIRST_NAME 'First Name' 
      FROM employees 
      ORDER BY LAST_NAME, FIRST_NAME
      ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
