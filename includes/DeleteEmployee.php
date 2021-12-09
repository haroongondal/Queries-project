<?php
    if(isset($_POST['submit'])){  
        $id = $_POST['employee'];
        $sql = "Delete from employees where employee_id=$id";
        mysqli_query($conn, $sql);
        header("Refresh:0");
    }
?>
<!DOCTYPE html>
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

    <title>Delete Employee</title>
  </head>
  <body background="blue">
    <form class="del_employee" action="" method="POST">
      <table width="50%" border="0px" cellspacing="20" align="center">

        <tr>
          <td>
              <label>Select The Employee You want to delete</label>
              <br>
              <br>
           <select name="employee">
               <?php 
               foreach ($employees as $employee) {

                  echo '<option value='.$employee['EMPLOYEE_ID'].'>
                  '.$employee['FIRST_NAME'].'
             </option>';
               }
               ?>
               
           </select>
          </td>
        </tr>
        <tr align="center">
          <td>
            <input
              name="submit"
              type="submit"
              value="Delete Employee"
              id="button"
            />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
