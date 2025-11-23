<?php
header('Content-Type: application/json');
include 'config.php';

$input = json_decode(file_get_contents('php://input'), true);

$id = $input['id'];
$nim = $input['nim'];
$nama = $input['nama'];
$prodi = $input['prodi'];

$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id=$id";
$conn->query($query);

echo json_encode([
    'status' => 'success',
    'message' => 'Data berhasil diperbarui'
]);
?>