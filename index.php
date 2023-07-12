<?php 
session_start();
if (isset($_SESSION['id']) && $_SESSION['uname']) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
   <div class="container">
    <ul class="det">
        <li class="li">Emp_Id : <?php echo $_SESSION['empid'] ; ?></li>
        <li class="li">Name : <?php echo $_SESSION['uname'] ; ?></li>
        <li class="li">Working Type : <?php echo $_SESSION['working_type'] ; ?></li>
        <li class="li">Salary : <?php echo $_SESSION['salary'] ; ?></li>
        <li class="li">No Of Days Worked : <?php echo $_SESSION['workeddays'] ; ?></li>
    </ul>
    <div class="logout">
        <a href="logout.php" class="out">logout</a>
    </div>
   </div>
</body>
</html>


<?php
}else{
    header('location:index.php?error=username and password is not set');
    exit();
}

?>