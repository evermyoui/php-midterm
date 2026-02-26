<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<h1>Not Properly Logged In</h1> <br>
          <p>You must log in to access this page.</p>
          <a href='../index.php'>Go to Login Page</a>";
    
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Project Description</title>
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
        
        <h1>Project Description</h1>
        <div class="title-container">
            <div class="title-card">
                <h2>
                    H-Auto: A Proposed Online Smart Gardening Monitoring System for Vegetables using Microcontrollers
                </h2>
            <br>
            <div class="content-container">
                <div class="column">
                    <h3>Project Overview</h3>
                    <p>
                        H-Auto is a proposed IoT-based smart gardening monitoring system
                        designed for the vegetable experimental area at BPSU – Abucay Campus.
                        The system collects real-time environmental data and transmits it
                        to a web-based platform for monitoring and analysis.
                    </p>
                </div>

                <div class="column">
                    <h3>Project Background</h3>
                    <p>
                        The experimental area currently relies on manual monitoring.
                        There is no existing digital or automated system to track
                        environmental conditions such as soil moisture, temperature,
                        humidity, light intensity, and soil nutrients.
                    </p>
                </div>
            </div>
            <div class="content-container">
                <div class="column">
                    <h3>Problem Statement</h3>
                    <p>
                        Manual monitoring leads to inefficient water management,
                        possible plant wilting, increased risk of contamination,
                        and potential crop losses due to lack of real-time data.
                    </p>
                </div>

                <div class="column">
                    <h3>Proposed Solution</h3>
                    <p>
                        The system integrates environmental sensors with an ESP32
                        microcontroller to collect and store real-time data.
                        The information will be accessible through a web-based
                        admin dashboard and a mobile application.
                    </p>
                </div>
            </div>
            </div>
        </div>

        <div class="content-container">
            <div class="column">
                <h3>Target Users</h3>
                    <ul>
                        <li>Student Researchers</li>
                        <li>Faculty Advisers</li>
                        <li>Field Administrators</li>
                    </ul>
            </div>

            <div class="column">
                <h3>Expected Features</h3>
                    <ul>
                        <li>Multi-parameter environmental monitoring module</li>
                        <li>Historical data logging</li>
                        <li>SMS notifications</li>
                        <li>Data visualization and analytics</li>
                        <li>Plant profile and growth management</li>
                        <li>Web-based admin dashboard</li>
                        <li>Mobile application access</li>
                    </ul>
            </div>
        </div>

    </div>
</div>

</body>
</html>