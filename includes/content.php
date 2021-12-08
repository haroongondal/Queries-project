<section>

  <?php

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
      include 'AddEmployee.html';
    }

    $currentCookieParams = implode(session_get_cookie_params())[0];
    if($currentCookieParams == 0){
      include 'welcome.html.php';
    }
  ?>

</section>
