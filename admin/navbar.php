<?php
include "../Php/connect.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}if ($_SESSION['role'] != 'admin') {
    header("Location: ../Php/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=dehaze" />

    <title>navigation</title>
</head>

<body>
    <button id="menu"class="menu-toggle" onclick="toggleMenu()"><span class="material-symbols-outlined">
dehaze
</span></button>
    <div class="navbar">

        <div class="logo">Smart Training Institute</div>

        <div class="navbar-left">
            <a href="home.php" class="navlink">Home</a>
            <a href="course.php" class="navlink">Courses</a>

            <a href="package.php" class="navlink">Packages</a>
            <a href="schedule.php" class="navlink">Schedule </a>

            <a href="instructor.php" class="navlink">instructors</a>
        </div>


        <div class="navbar-right">

            <a href="../Php/signout.php" class="navlink" id="signout">sign out</a>
        </div>
    </div>
    <script src="../Javascript/script.js"></script>

</body>

</html>