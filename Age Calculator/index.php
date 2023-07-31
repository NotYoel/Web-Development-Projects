<?php

$status = "";

if(isset($_POST["birthdate"])){
    if(empty($_POST["birthdate"])){
        $status = '<h4 style="color: red;">Error: Please input a date.</h4>';
    } else {
        $today = date("Y-m-d");
        $diff = date_diff(date_create($today), date_create($_POST["birthdate"]));

        $status = '<h4>You are: ' . $diff->format("%y") . ' years old.</h4>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main-container">
        <h1>Age Calculator</h1>
        <h4>Enter your date of birth:</h3>
        <form method="post">
            <input type="date" name="birthdate"><br>
            <input type="submit" value="Calculate Age">
        </form>

        <?=$status?>
    </div>
</body>
</html>