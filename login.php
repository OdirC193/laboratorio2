<?php
include('config.php');
session_start();
if (isset($_POST['laboratorio2'])) {

    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM usuarios WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        header("location: login.php");
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user'] = $result['pass'];
            header("location: principal.php");
        } else {
            header("location: login.php");
        }
    }
}
