<?php
session_start();
include "../db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['address'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    if (empty($name)) {
        header("Location: ../pages/register_page.php?error=Name Field is Required");
        exit();
    }

    $email = validate($_POST['email']);
    if (empty($email)) {
        header("Location: ../pages/register_page.php?error=Email Field is Required");
        exit();
    }

    $password = validate($_POST['password']);
    if (empty($password)) {
        header("Location: ../pages/register_page.php?error=Password Field is Required");
        exit();
    }

    $age = validate($_POST['age']);
    if (empty($age)) {
        header("Location: ../pages/register_page.php?error=Age Field is Required");
        exit();
    }

    $address = validate($_POST['address']);
    if (empty($address)) {
        header("Location: ../pages/register_page.php?error=Address Field is Required");
        exit();
    }

    $conn = mysqli_connect("localhost", "root", "", "makotek_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $age = mysqli_real_escape_string($conn, $age);
    $address = mysqli_real_escape_string($conn, $address);

    $sql = "INSERT INTO users (name, email, password, age, address) VALUES ('$name', '$email', '$password', '$age', '$address')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $user_id = mysqli_insert_id($conn);
        $_SESSION['id'] = $user_id;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['age'] = $age;
        $_SESSION['address'] = $address;

        header("Location: ../pages/login_page.php");
        exit();
    } else {
        header("Location: ../pages/login_page.php?error=Failed to Register User");
        exit();
    }
} else {
    header("Location: ../pages/login_page.php");
    exit();
}
