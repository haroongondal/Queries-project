<?php 
        if(isset($_POST['submit'])){
            $sql = "select EMPLOYEE_ID from employees ORDER BY EMPLOYEE_ID DESC LIMIT 1";
            $query = $conn->query($sql);
            $employee_id = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $employee_id = $employee_id[0]['EMPLOYEE_ID'];
            $employee_id++;
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $hire_date = $_POST['hire_date'];
            $job_id = $_POST['JOB_ID'];
            $Salary = $_POST['Salary'];
            $COMMISSION_PCT = $_POST['COMMISSION_PCT'];
            $MANAGER_ID = $_POST['MANAGER_ID'];
            $DEPARTMENT_ID = $_POST['DEPARTMENT_ID'];
            $sql = "select * from employees";
            $get_employee = $conn->query($sql);
            $sql = "Insert into employees (EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER ,HIRE_DATE, JOB_ID, SALARY, COMMISSION_PCT, MANAGER_ID, DEPARTMENT_ID) values ('".$employee_id."', '".$first_name."', '".$last_name."', '".$email."', '".$phone_number."', '".$hire_date."', '".$job_id."',  '".$Salary."', '0', '".$MANAGER_ID."', '".$DEPARTMENT_ID."')";
            $query = $conn->query($sql);
            if($query){
                    header("Location: index.php?employee");             
            };

        }
         ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Literata|Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../resources/css/style.css" />
    <link rel="stylesheet" href="../resources/css/style1.css" />
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="./resources/js/script.js"></script>

    <title>Employee Manager</title>
  </head>
  <body background="blue">
    <form class="add_employee" action="" method="POST">
      <table width="75%" border="0px" cellspacing="20" align="center">
        <tr>
          <td>
            <label>First Name:</label><br />
            <input
              name="first_name"
              required
              placeholder="First Name"
              id="type"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>Last Name:</label><br />
            <input
              name="last_name"
              placeholder="Last Name"
              id="type"
              type="text"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>Email:</label><br />
            <input name="email" placeholder="Email" id="type" type="email" />
          </td>
        </tr>

        <tr>
          <td>
            <label>Phone:</label><br />
            <input
              name="phone_number"
              placeholder="Phone Number"
              id="type"
              type="tel"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>Hire Date:</label><br />
            <input
              name="hire_date"
              placeholder="Hire Date"
              id="type"
              type="date"
            />
          </td>
        </tr>
        <tr>
        <td>
              <label>Select The JOB</label>
           <select name="JOB_ID">
               <?php 
               foreach ($jobs as $job) {

                  echo '<option value='.$job['JOB_ID'].'>
                  '.$job['JOB_TITLE'].'
             </option>';
               }
               ?>
               
           </select>
          </td>
        </tr>
        <tr>
          <td>
            <label>Salary:</label><br />
            <input name="Salary" placeholder="salary" id="type" type="number" />
          </td>
        </tr>
        <tr>
          <td>
            <label>COMMISSION_PCT:</label><br />
            <input
              name="COMMISSION_PCT"
              placeholder="COMMISSION_PCT"
              id="type"
              type="number"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>MANAGER_ID:</label><br />
            <input
              name="MANAGER_ID"
              placeholder="MANAGER_ID"
              id="type"
              type="number"
            />
          </td>
        </tr>
        <tr>
        <td>
              <label>Select The DEPARTMENT_ID</label>
           <select name="DEPARTMENT_ID">
               <?php 
               foreach ($departments as $department) {

                  echo '<option value='.$department['DEPARTMENT_ID'].'>
                  '.$department['DEPARTMENT_ID'].'
             </option>';
               }
               ?>
               
           </select>
          </td>
        </tr>
        <tr>
          <br /><br />
        </tr>
        <tr align="center">
          <td>
            <input
              name="submit"
              type="submit"
              value="Add Employee"
              id="add-button"
            />
          </td>
        </tr>
      </table>
    </form>
  </body>
  </html>

