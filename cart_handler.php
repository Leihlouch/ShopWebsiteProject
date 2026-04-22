<?php
session_start();
include 'login_connect.php';

header('Content-Type: application/json');

$action = $_POST['action'] ?? $_GET['action'] ?? '';
$email = $_SESSION['email'] ?? null;

if (!$email) {
    echo json_encode(['status' => 'not_logged_in']);
    exit();
}

if ($action === 'add') {
    $product_id   = $conn->real_escape_string($_POST['product_id']);
    $product_name = $conn->real_escape_string($_POST['product_name']);
    $price        = floatval($_POST['price']);
    $quantity     = intval($_POST['quantity']);

    $sql = "INSERT INTO cart (user_email, product_id, product_name, price, quantity)
            VALUES ('$email', '$product_id', '$product_name', $price, $quantity)
            ON DUPLICATE KEY UPDATE quantity = quantity + $quantity";
    $conn->query($sql);
    echo json_encode(['status' => 'added']);

} elseif ($action === 'remove') {
    $product_id = $conn->real_escape_string($_POST['product_id']);
    $conn->query("DELETE FROM cart WHERE user_email='$email' AND product_id='$product_id'");
    echo json_encode(['status' => 'removed']);

} elseif ($action === 'get') {
    $result = $conn->query("SELECT * FROM cart WHERE user_email='$email'");
    $items = [];
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
    echo json_encode(['status' => 'ok', 'items' => $items]);

} elseif ($action === 'clear') {
    $conn->query("DELETE FROM cart WHERE user_email='$email'");
    echo json_encode(['status' => 'cleared']);
}
?>