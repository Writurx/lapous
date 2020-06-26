<?php
$cssVersion = '3.4.2'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?php echo $cssVersion; ?>" type="text/css">
</head>
<body>


<?php

//хедер
include_once 'pages/header.php';


//область меню
include_once 'pages/left_menu.php';


//основной контент
include_once 'pages/content.php';


//правая колонка
include_once 'pages/right_column.php';


//футер
include_once 'pages/footer.php';
?>


</body>
</html>

