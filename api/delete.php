<?php
header('Content-Type: application/json');
include 'config.php';

$input = json_decode(file_get_contents('php://input'), true);

$id = $input['id'];

$query = "DELETE FROM mahasiswa WHERE id=$id";
$conn->query($query);

echo json_encode([
    'status' => 'success',
    'message' => 'Data berhasil dihapus'
]);
?>