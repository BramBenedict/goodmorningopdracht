<?php

date_default_timezone_set("Europe/Amsterdam");

$partDayName = ["Nacht", "Morgen", "Middag", "Avond"];

$dayClassName = ["night", "morning", "afternoon", "evening"];

$hour = date("H:i:s");


if ($hour < 6) {
    $partDaynr = 0;
}else if ($hour < 12) {
    $partDaynr = 1;
}else if ($hour < 18) {
    $partDaynr = 2;
}else if ($hour < 24) {
    $partDaynr = 3;
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>website</title>
    <meta http-equiv="refresh" content="1">

</head>
<body class="<?php echo $dayClassName[$partDaynr]; ?>">
     <h1>Good<?php echo $dayClassName[$partDaynr]; ?> !</h1>
     <h1>Het is nu: <?php echo $hour ?></h1>
    <style>
h1{
    color: white;
    font-size: 35px;
}
.night{
    background-image: url(img/night.png);
    text-align: center;
    margin-top: 280px;
}

.morning{
    background-image: url(img/morning.png);
    text-align: center;
    margin-top: 280px;
}

.afternoon{
    background-image: url(img/afternoon.png);
    text-align: center;
    margin-top: 280px;
}

.evening{
    background-image: url(img/evening.png);
    text-align: center;
    margin-top: 280px;
}
</style>
</body>
</html>
