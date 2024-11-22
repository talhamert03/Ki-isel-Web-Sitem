<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urunler";

$conn = new mysqli($servername, $username , $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı Başarısız: " .$conn->connect_error);
}


$start = $_GET['start'];
$lenght = $_GET['lenght'];
$search = $_GET['search']['value'];



$where = "";

if (!empty($search)) {
    $where = "";
}
if (!empty($where)) {
    $where = "WHERE name LIKE '%$search%' OR barcode LIKE '%$search%'";
}


$totalRecordsQuery = "SELECT COUNT(*) AS total FROM product";
$totalRecordResult = $conn->query($totalRecordsQuery);
$totalRecords = $totalRecordResult->fetch_assoc();['total'];

$totalFilteredQuery = "SELECT COUNT (*) AS TOTAL FROM product $where";
$totalFilteredResult = $conn->query($totalFilteredQuery);
$totalFiltered = $totalFilteredResult->fetch_assoc()['total'];

$query = "SELECT * FROM product $where LIMIT $start, $length";
$result = $conn->query($query);


$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        $row['name'],
        $row['barcode'],
        $row['quantity'],
        '<img src= "images/' . $row['image'] . '" width= "50">',
        $row['status'] ? 'Active' : 'Inactive',
        $row['price'],
        '<button class= "edit-btn" data-id="' . $row['id']. '">Edit</button>'
    ];
}
echo json_encode([
    "draw" => intval($_GET['draw']),
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $totalFiltered,
    "data" => $data
]);

$conn->close();
?>