<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Literata|Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../resources/css/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="../resources/js/script.js"></script>

	<title>Add Employee</title>
</head>
	<body>

		<?php 
        include("header.php"); 
        // include("nav.php");
        include("db.php");
        include("display_results_table.php");
        if(isset($_POST['submit'])){ 
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $hire_date = $_POST['hire_date'];
            $job_id = $_POST['job_id'];
            $Salary = $_POST['Salary'];
            $COMMISSION_PCT = $_POST['COMMISSION_PCT'];
            $MANAGER_ID = $_POST['MANAGER_ID'];
            $DEPARTMENT_ID = $_POST['DEPARTMENT_ID'];
            $sql = "select * from employees";
            $get_employee = $conn->query($sql);
            var_dump($get_employee);
            die;
            $sql = "Insert into employees (EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER ,HIRE_DATE, JOB_ID, SALARY, COMMISSION_PCT, MANAGER_ID, DEPARTMENT_ID) values ('300', '".$first_name."', '".$last_name."', '".$email."', '".$phone_number."', '".$hire_date."', '".$job_id."',  '".$Salary."', '0', '".$MANAGER_ID."', '".$DEPARTMENT_ID."')";
            $query = $conn->query($sql);
            // var_dump($sql);
            // die;
            if($query){
                $sql = "select * from employees ORDER BY EMPLOYEE_ID DESC LIMIT 1";
                $get_employee = mysqli_query($conn, $sql);
                if($get_employee){
                    display_results_table($get_employee);
                }
                
            };
            // $sql = "select *from employees ORDER BY employee_id DESC LIMIT 1;"
            
        }
        
        include("footer.php");
         ?>

	</body>
</html>