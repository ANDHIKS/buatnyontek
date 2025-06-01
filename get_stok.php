<?php
$conn = new mysqli("localhost", "root", "", "produk");

$result = $conn->query("SELECT * FROM makanan");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[$row['nama']] = [
        'harga' => $row['harga'],
        'stok' => $row['stok']
    ];
}

echo json_encode($data);
?>
