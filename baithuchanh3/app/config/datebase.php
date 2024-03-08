<?php
require_once 'config.php';
function DBconnection() {
    global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE;
    $conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
    if(!$conn) 
        die('Ket noi database that bai');
    return $conn;
}

// hàm thực hiện truy vấn 
function query($sql) {
    $conn = DBconnection();
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        die("Loi truy van database: ".mysqli_error($conn));
    }
    return $result;
}

?>