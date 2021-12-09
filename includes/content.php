<section>

  <?php
  
  $sql = " Select * from employees";
  $employees = $conn->query($sql);
  $sql = " Select * from jobs";
  $jobs = $conn->query($sql);
  $sql = " Select * from departments";
  $departments = $conn->query($sql);


    if (isset($_GET['question_1'])) {
      include 'MinMaxSalaries.php';
    }
    else if (isset($_GET['question_2'])) {
      include 'NumEmployees.php';
    }
    else if (isset($_GET['question_3'])) {
      include 'MarketingEmployees.php';
    }
    else if (isset($_GET['question_4'])) {
      include 'NumJobs.php';
    }
    else if (isset($_GET['question_5'])) {
      include 'DepartmentName.php';
    }
    else if (isset($_GET['question_6'])) {
    include 'UniqueFirstNames.php';
    }
    else if (isset($_GET['question_7'])) {
    include 'FirstThreeCharacters.php';
    }
    else if (isset($_GET['add_employee'])) {
      include 'AddEmployee.php';
    }
    else if (isset($_GET['del_employee'])) {
      include 'DeleteEmployee.php';
    }
    else if (isset($_GET['employee'])) {
      include 'Employee.php';
    }
    else{
      $currentCookieParams = implode(session_get_cookie_params())[0];
      if($currentCookieParams == 0){
        include 'welcome.html.php';
      }
    }

  ?>

</section>
