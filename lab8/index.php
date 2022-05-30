<html>
<head>
    <title>Lab 8</title>
</head>
<body>

<?php
include('subTask1.php');
?>

<?php
include("subTask2.php");
?>

<div class="container text-center d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col-12">
            <form action="subTask3.php" name="myActionName" method="POST">
                <input type="text" class="form-control" name="lastName" placeholder="Last name"/> <br> <br>
                <input type="text" class="form-control" name="firstName" placeholder="First Name"/> <br> <br>
                <input type="text" class="form-control" name="age" placeholder="Age"/> <br> <br>
                <input type="email" class="form-control" name="email" placeholder="Email@example.com"/> <br> <br>
                <input name="myActionName" class="btn btn-outline-success" type="submit" value="Do it!"/> <br> <br>
            </form>
        </div>
    </div>
</div>

<?php
include("subTask3.php");
?>

<?php
include("subTask4.php");
?>

<div class="container text-center d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col-12">
            <form action="subTask5.php" name="myActionName" method="POST">
                <input type="text" class="form-control" name="firstNumber" placeholder="First number" /> <br> <br>
                <input type="text" class="form-control" name="secondNumber" placeholder="Second number" /> <br> <br>
                <input name="myActionName" class="btn btn-outline-success" type="submit" value="Calculate" /> <br> <br>
            </form>
        </div>
    </div>
</div>

<?php
include("subTask5.php");
?>

</body>

</html>