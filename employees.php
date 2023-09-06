<?php
include "classes/Employee.php";
$employeeInstance = new Employee();
$employees = $employeeInstance->selectAllEmployees();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include "components/navbar.php"?>
<table class= "table">
        <tr>
            <th>id</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>gender</th>
            <th>age</th>
            <th>occupation</th>
            <th>income</th>
            <th>married</th>
        </tr>

        <?php foreach($employees as $employee){?>
            <tr>
                <td><?php echo $employee['id'];?></td>
                <td><?php echo $employee['firstName'];?></td>
                <td><?php echo $employee['lastName'];?></td>
                <td><?php echo $employee['gender'];?></td>
                <td><?php echo $employee['age'];?></td>
                <td><?php echo $employee['occupation'];?></td>
                <td><?php echo $employee['income'];?></td>
                <td><?php echo $employee['married'];?></td>
            </tr>
        <?php
         }
         ?>
</body>
</html>