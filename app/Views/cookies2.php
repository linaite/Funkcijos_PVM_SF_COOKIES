<?php
include_once '../php/array.php';
include_once '../Models/functions.php';
var_dump($_POST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="container mt-5 d-flex  flex-column justify-content-center align-items-center">
<form action="" method="post">
    <input type="email" name="user_email">
    <input type="submit" name="btn_delete" value="Delete">
</form>
<?php delete_cookies(); ?>
<?php set_table($_COOKIE); ?>
<script src="../../assets/js/jQuery.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>