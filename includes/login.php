
<?php
    // if($_SESSION['id']=''
    //     session_start(); 
    // else
    //     session_unset();   
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Literata|Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../resources/css/style1.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="./resources/js/script.js"></script>


	<title>Employee Manager</title>
</head>
<body background="blue">
<br><br><br><br>

<form name="name" action="" method="POST">
    <table width="25%"  border="0px" cellspacing="20" align="center">
        <tr align="center"> <td><img src="logo.png"  width="40%"></td></tr>
        <tr>
           <td><input  name="first_name" placeholder="First Name" id="type" type="text" value=''></td>
        </tr>
        <tr>
            <td><input  name="last_name" placeholder="Last Name" id="type" type="text"></td>
        </tr>
        <tr><br><br></tr>
        <tr align="center">
            <td><input name="submit" type="submit" value=" Login " id="button"></td>
        </tr>
    </table>
</form>
    </body>
</html>
<?php
    session_set_cookie_params(0);
    session_start();
    if(isset($_POST['submit'])){  
        $_SESSION['first_name']=$_POST['first_name'];
        $_SESSION['last_name']=$_POST['last_name'];
        header('location:../index.php');
    }
?>