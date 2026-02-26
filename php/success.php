<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: fail.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page-wrapper">
    <div class="content">
        <div class="navigation">
            <div class="left-nav">
                <a href="success.php">Admin Page</a>
                <a href="project.php">Project Description</a>
                <a href="members.php">Members</a>
            </div>

            <div class="right-nav">
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <h1>Admin Page</h1>
        <div class="title-container">
            <div class="title-card">
                <h2>
                    H-Auto: A Proposed Online Smart Gardening Monitoring System for Vegetables using Microcontrollers
                </h2>

                <p>
                    Welcome to the Admin Page of our proposed capstone project.
                    H-Auto is designed to improve vegetable farming through
                    real-time environmental monitoring using microcontrollers and sensors.
                </p>
            </div>
        </div>
        
        <div class="about-container">
            <div class="about">
                <h3>About Group 1</h3>
                <p>
                    Group 1 is composed of four dedicated members who collaborated
                    to design and present this capstone proposal. Each member has
                    a specific role to ensure the system is organized,
                    functional, and well-documented.
                </p>
            </div>

            <div class="about">
                <h3>Our Goal</h3>
                <p>
                    Our goal is to integrate smart agriculture and IoT technology
                    to support data-driven decision-making in vegetable production.
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>