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
    <title>Members - H-Auto</title>
  
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

        <h1>Members Description - Group 1</h1>

        <h3>Hussin, Said Jr. B. - Project Leader</h3>
        <p>
        He guides the whole group throughout the project. He organizes tasks,
        sets schedules, and ensures that the group follows the instructions
        and requirements. He assists in decision-making and motivates members
        to complete their assigned work on time.
        </p>

        <h3>Perello, Geoffrey S. - Programmer</h3>
        <p>
        Responsible for coding and technical implementation. He builds
        the website structure, ensures proper navigation, fixes errors,
        and improves the functionality of the system.
        </p>

        <h3>Alba, Jhan Criss - Documenter</h3>
        <p>
        Focuses on organizing written content and ensuring clarity.
        He prepares descriptions, checks grammar, and ensures that
        information is complete and aligned with project requirements.
        </p>

        <h3>Dizon, Chrislord B. - Tester/Checker</h3>
        <p>
        Reviews the system to ensure everything works correctly.
        He tests links, checks page loading, identifies errors,
        and suggests improvements before final submission.
        </p>

    </div>
</div>

</body>
</html>