<?php

// Memastikan request yang diterima adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('405 Method Not Allowed');
}

// Mengambil data dari form
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$pesan = $_POST['pesan'] ?? '';

// Menghapus spasi yang tidak diperlukan
$nama = trim($nama);
$email = trim($email);
$pesan = trim($pesan);

// Validasi server
if ($nama === '' || $email === '' || $pesan === '') {
    http_response_code(422);
    exit('422 Input tidak boleh kosong');
}

// Validasi format email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    exit('422 Format email tidak valid');
}

// Jika semua data valid, redirect ke halaman berhasil
header('Location: success.php', true, 303);
exit;