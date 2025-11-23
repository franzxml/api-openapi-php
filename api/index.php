<?php
header('Content-Type: application/json');
include 'config.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode([
    'status' => 'success',
    'data' => $data
]);
?>