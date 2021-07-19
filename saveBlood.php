<?php
include 'config.php';

$donar_name = mysqli_real_escape_string($conn, $_POST['bname']);
$bloodGroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
$donar_email = mysqli_real_escape_string($conn, $_POST['bemail']);
$donar_phone = mysqli_real_escape_string($conn, $_POST['bphone']);
$donar_city = mysqli_real_escape_string($conn, $_POST['bcity']);
$donar_age = mysqli_real_escape_string($conn, $_POST['bage']);
$quantity = mysqli_real_escape_string($conn, $_POST['bquantity']);

$query = 'SELECT quantity from bloodgroupnames WHERE groupId=' . $bloodGroup;
$fetch_quantity = mysqli_query($conn, $query) or die($query);
$row = $fetch_quantity->fetch_assoc();

$totalQuantity = (int)$row['quantity'] + (int)$quantity;

$update = "UPDATE bloodgroupnames SET quantity='$totalQuantity' WHERE groupId=" . $bloodGroup;
if (mysqli_query($conn, $update)) {
    header("Location: {$hostname}/donorsList.php");
} else {
    echo $update;
}
$insert = "INSERT INTO donars(donarName, bloodGroup , email, phone, city, age, donateQuantity)
                VALUES('$donar_name','$bloodGroup','$donar_email','$donar_phone',
                '$donar_city','$donar_age','$quantity')";
if (mysqli_query($conn, $insert)) {
    header("Location: {$hostname}/donorsList.php");
} else {
    echo $insert;
}

mysqli_close($conn);
