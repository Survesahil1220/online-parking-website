<?php
header('Content-Type: application/json');
include('users/includes/dbconnection.php');

// Simple endpoint to get all vehicles
$query = mysqli_query($con, "SELECT ParkingNumber, RegistrationNumber, InTime FROM tblvehicle");
$vehicles = [];
while ($row = mysqli_fetch_assoc($query)) {
    $vehicles[] = $row;
}

// Return JSON response
echo json_encode(['status' => 'success', 'vehicles' => $vehicles]);
mysqli_close($con);
?>