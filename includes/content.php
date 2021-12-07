<section>

  <?php

    if (isset($_GET['display_name'])) {
      include 'DisplayNames.php';
    }
    else if (isset($_GET['employee_department'])) {
      include 'EmployeeDepartment.php';
    }
    else if (isset($_GET['employee_lasts'])) {
      include 'EmployeeLastS.php';
    }
    else if (isset($_GET['employee_pf'])) {
      include 'EmployeePF.php';
    }
    else if (isset($_GET['employee_salary'])) {
      include 'EmployeeSalaries10000.php';
    }
    else if (isset($_GET['total_salary'])) {
    include 'TotalSalaries.php';
}



  ?>

</section>
