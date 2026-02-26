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
    <title>Members - H-Auto</title>
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

        <h1>Members Description - Group 1</h1>
        <div class="title-container">
            <div class="title-card">
                <div class="content-container">
                    <div class="column">
                        <div class="member-card">
                            <img src="../assets/pictures/said.png" alt="Said Jr. B. Hussin">
                            <div class="info">
                                <h3>Hussin, Said Jr. B.<br>- Project Leader</h3>
                                <p>
                                    He leads the group by organizing tasks, setting schedules, 
                                    guiding decisions, and motivating members to complete their work on time 
                                    while ensuring all requirements are followed.
                                </p>
                            </div>
                        </div>

                        <div class="member-card">
                            <img src="../assets/pictures/geo.jpg" alt="Geoffrey S. Perello">
                            <div class="info">
                                <h3>Perello, Geoffrey S.<br>- Programmer</h3>
                                <p>
                                    Responsible for coding and technical implementation. He builds
                                    the website structure, ensures proper navigation, fixes errors,
                                    and improves the functionality of the system.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="member-card">
                            <img src="../assets/pictures/jc.png" alt="Jhan Criss Alba">
                            <div class="info">
                                <h3>Alba, Jhan Criss<br>- Documenter</h3>
                                <p>
                                    Focuses on organizing written content and ensuring clarity.
                                    He prepares descriptions, checks grammar, and ensures that
                                    information is complete and aligned with project requirements.
                                </p>
                            </div>
                        </div>

                        <div class="member-card">
                            <img src="../assets/pictures/cl.png" alt="Chrislord B. Dizon">
                            <div class="info">
                                <h3>Dizon, Chrislord B.<br>- Tester/Checker</h3>
                                <p>
                                    Reviews the system to ensure everything works correctly.
                                    He tests links, checks page loading, identifies errors,
                                    and suggests improvements before final submission.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>