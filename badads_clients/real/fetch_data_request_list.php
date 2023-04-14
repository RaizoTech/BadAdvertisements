<?php

require_once '../config.php';
session_start();
$client_id = $_SESSION['client-id'];

// Get current page number
$page = $_GET['page'];

// Number of records per page
$records_per_page = 5;

// Calculate limit
$from = ($page - 1) * $records_per_page;

// Get total number of records
$total_records = $connection->query("SELECT COUNT(*) as total FROM request_gv WHERE client_id='$client_id'")->fetch_assoc()['total'];

// Calculate total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Fetch data for current page
$result = $connection->query("SELECT * FROM request_gv WHERE client_id='$client_id' LIMIT $from, $records_per_page");

// Create an array to hold the data
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Return data and total number of pages as JSON
echo json_encode(array('data' => $data, 'total_pages' => $total_pages));
?>