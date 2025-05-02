<?php 
$con = mysqli_connect("localhost", "root", "", "Soland");

if (!$con) {
    die('Connection Failed: ' . mysqli_connect_error());
}

$sql = "INSERT INTO flight_booking (departure, arrival, username, id_number, departure_date, class, phone, payment_method)
        VALUES (
            '$_POST[from]', 
            '$_POST[to]', 
            '$_POST[username]', 
            '$_POST[id]', 
            '$_POST[date]', 
            '$_POST[class]', 
            '$_POST[phone]', 
            '$_POST[payment]'
        )";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

echo \"Your flight has been successfully booked!\";
mysqli_close($con);
?>
