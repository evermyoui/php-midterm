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
    <title>Project Description - H-Auto</title>
   
</head>
<body>

<div class="page-wrapper">
    <div class="content">

        <div class="navigation">
            <a href="success.php">Admin Page</a>
            <a href="project.php">Project Description</a>
            <a href="members.php">Members</a>
            <a href="logout.php">Logout</a>
        </div>

        <h1>Project Description</h1>
        <h2>
        H-Auto: A Proposed Online Smart Gardening Monitoring System for Vegetables using Microcontrollers
        </h2>

        <h3>Project Overview</h3>
        <p>
        H-Auto is a proposed IoT-based smart gardening monitoring system
        designed for the vegetable experimental area at BPSU – Abucay Campus.
        The system collects real-time environmental data and transmits it
        to a web-based platform for monitoring and analysis.
        </p>

        <h3>Project Background</h3>
        <p>
        The experimental area currently relies on manual monitoring.
        There is no existing digital or automated system to track
        environmental conditions such as soil moisture, temperature,
        humidity, light intensity, and soil nutrients.
        </p>

        <h3>Problem Statement</h3>
        <p>
        Manual monitoring leads to inefficient water management,
        possible plant wilting, increased risk of contamination,
        and potential crop losses due to lack of real-time data.
        </p>

        <h3>Proposed Solution</h3>
        <p>
        The system integrates environmental sensors with an ESP32
        microcontroller to collect and store real-time data.
        The information will be accessible through a web-based
        admin dashboard and a mobile application.
        </p>

        <h3>Target Users</h3>
        <ul>
            <li>Student Researchers</li>
            <li>Faculty Advisers</li>
            <li>Field Administrators</li>
        </ul>

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

</body>
</html>