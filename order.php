<?php
$conn = new mysqli("localhost", "root", "", "produk");
$data = json_decode(file_get_contents("php://input"), true);
$errors = [];
$total = 0;

foreach ($data as $nama => $jumlah) {
    $nama = $conn->real_escape_string($nama);
    $jumlah = (int) $jumlah;

    $result = $conn->query("SELECT stok, harga FROM makanan WHERE nama = '$nama'");
    $row = $result->fetch_assoc();

    if (!$row || $row['stok'] < $jumlah) {
        $errors[$nama] = "Stok tidak cukup atau tidak ditemukan";
        continue;
    }

    $total += $jumlah * $row['harga'];
    $conn->query("UPDATE makanan SET stok = stok - $jumlah WHERE nama = '$nama'");
}

if (count($errors) > 0) {
    echo json_encode([
        "status" => "error",
        "message" => "Beberapa item gagal dipesan.",
        "errors" => $errors
    ]);
} else {
    echo json_encode([
        "status" => "success",
        "total" => $total
    ]);
}
?>
