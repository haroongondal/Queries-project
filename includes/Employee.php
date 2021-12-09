<?php
include('display_results_table.php');
    $sql = "select * from employees ORDER BY EMPLOYEE_ID DESC LIMIT 1";
    $get_employee = mysqli_query($conn, $sql);
    if($get_employee){
        display_results_table($get_employee);
    }
?>