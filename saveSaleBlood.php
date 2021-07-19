<?php
include 'config.php';

$patient_name = mysqli_real_escape_string($conn, $_POST['pname']);
$bloodGroup = mysqli_real_escape_string($conn, $_POST['pgroup']);
$patient_email = mysqli_real_escape_string($conn, $_POST['pemail']);
$patient_phone = mysqli_real_escape_string($conn, $_POST['pphone']);
$patient_city = mysqli_real_escape_string($conn, $_POST['pcity']);
$patient_age = mysqli_real_escape_string($conn, $_POST['page']);
$quantity = mysqli_real_escape_string($conn, $_POST['pquantity']);
$price = mysqli_real_escape_string($conn, $_POST['pprice']);
$purpose = mysqli_real_escape_string($conn, $_POST['ppurpose']);

$fetch_quantity = 'SELECT quantity from bloodgroupnames WHERE groupId=' . $bloodGroup;
$result = mysqli_query($conn, $fetch_quantity) or die("Query Unsuccessful !");
$row = $result->fetch_assoc();

$totalQuantity = (int)$row['quantity'] - (int)$quantity;

$update = "UPDATE bloodgroupnames SET quantity='$totalQuantity' WHERE groupId=" . $bloodGroup;
if (mysqli_query($conn, $update)) {
    header("Location: {$hostname}/recpList.php");
} else {
    echo $update;
}


$insert = "INSERT INTO recipients(patientName, bloodGroup , email, phone, city,purpose, quantity,price, age)
                VALUES('$patient_name','$bloodGroup','$patient_email','$patient_phone',
                '$patient_city','$purpose','$quantity','$price','$patient_age')";

if (mysqli_query($conn, $insert)) {
    header("Location: {$hostname}/recpList.php");
} else {
    echo $insert;
}

mysqli_close($conn);
