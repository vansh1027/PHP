<!DOCTYPE html>
<html>
<head>
    <title>Favourite Car Selection</title>
    <style>
        .box {
            border: 2px solid #000;
            padding: 10px;
            width: 300px;
            margin-top: 20px;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<h2>Please select your favourite car</h2>

<form method="post">
    <input type="radio" name="car" value="Nissan"> Nissan<br>
    <input type="radio" name="car" value="Toyota"> Toyota<br>
    <input type="radio" name="car" value="Mitsubishi"> Mitsubishi<br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['car'])) {
        $car = $_POST['car'];
        echo "<div class='box'><strong>Your favourite car is $car</strong></div>";
    } else {
        echo "<div class='box'><strong>Please select a car!</strong></div>";
    }
}
?>
<p>This code is executed by Kamal Mittal!</p>
</body>
</html>