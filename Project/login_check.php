<?php
$host = "localhost";
$user = "root";
$passwd = "";
$db_name = "elearningproject";

$data = mysqli_connect($host, $user, $passwd, $db_name);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT id, usertype FROM `user` WHERE email=? AND password=?";
    $stmt = mysqli_prepare($data, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);

    if ($row) {
        session_start();
        $_SESSION['id'] = $row['id']; 
        if ($row["usertype"] == "user") {
            header("location: Student_home2.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            header("location: admHome.html");
            exit();
        }
    } else {
        echo "Invalid Username or password";
    }

    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
}

mysqli_close($data);
?>
