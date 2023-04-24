<!DOCTYPE html>
<html lang="en">
<?php
    try{
        if(!isset($_SESSION['login'])){ //if login in session is not set
            header('Location:intro.php');
        }
    }catch (Exception $e) {
        echo "fuck";
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>testing</title>
</head>
<body
</body>
</html>