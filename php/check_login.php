<?php
session_start();
include "../db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    if (empty($email) || empty($password)) {
        header("Location: ../login_page.php?error=Email and Password Fields are Required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];

            header("Location: ../pages/dashboard.php");
            exit();
        } else {
            header("Location: ../login_page.php?error=Incorrect Email or Password");
            exit();
        }
    }
} else {
    header("Location: ../login_page.php");
    exit();
}
