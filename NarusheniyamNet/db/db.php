<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "naru_net1");
if (!$db) {
    $error = mysqli_error($db);
    echo '<script>console.log("MySQL Connection Error: ' . htmlspecialchars($error) . '");</script>';
    die("Ошибка подключения к базе данных. Проверьте консоль разработчика для деталей.");
}

function find($login, $password) {
    global $db;
    
    $stmt = mysqli_prepare($db, "SELECT * FROM user WHERE username = ? AND password = MD5(?)");
    if (!$stmt) {
        echo '<script>console.log("MySQL Prepare Error: ' . htmlspecialchars(mysqli_error($db)) . '");</script>';
        return false;
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $login, $password);
    
    if (!mysqli_stmt_execute($stmt)) {
        echo '<script>console.log("MySQL Execute Error: ' . htmlspecialchars(mysqli_error($db)) . '");</script>';
        mysqli_stmt_close($stmt);
        return false;
    }
    
    $result = mysqli_stmt_get_result($stmt);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        return $user;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}
?>