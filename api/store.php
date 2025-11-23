<?php
header('Content-Type: application/json');
include 'config.php';

$input = json_decode(file_get_contents('php://input'), true);

$nim = $input['nim'];
$nama = $input['nama'];
$prodi = $input['prodi'];

$query = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
$conn->query($query);

echo json_encode([
    'status' => 'success',
    'message' => 'Data berhasil disimpan'
]);
?>