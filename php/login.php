<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

        if(
            isset($_POST['myAdmin']) &&
            isset($_POST['myPassword'])
        ){
            $adminUsername = $_POST['myAdmin'];
            $adminPassword = $_POST['myPassword'];
            if (
                $adminUsername === "admin" &&
                $adminPassword === "123"
            ){
                 $_SESSION['username'] = $adminUsername;
                 
                //go to dashboard page
                header("location: success.php");
                exit();
            }else {
                //go to failed page
                header("location: fail.php");
                exit();
            }
        }
    ?>
</body>
</html>