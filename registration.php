<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ini_set("display_errors","1");
    error_reporting(E_ALL);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $conn = mysqli_connect('localhost','root','','MUKUL-ADC-CU');
    $sql = "INSERT INTO 'registration' VALUES ('$fname','$lname','$email','$mobile')";
    $result= mysqli_query($conn,$sql);
    if($result)
    {
        header('Location: registration.html');
    }
</body>
</html>
