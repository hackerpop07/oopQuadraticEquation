<?php
include "QuadraticEquation.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quadraticEquation = new QuadraticEquation($_POST['a'], $_POST['b'], $_POST['c']);
    if ($quadraticEquation->getDiscriminant() > 0) {
        echo "r1: ", $quadraticEquation->getRoot1(), " r2: ", $quadraticEquation->getRoot2();
    } else if ($quadraticEquation->getDiscriminant() == 0) {
        echo "r1: ", $quadraticEquation->getRoot1();
    } else {
        echo "The equation has no roots";
    }

}
?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="a" placeholder="a">
    <input type="number" name="b" placeholder="b">
    <input type="number" name="c" placeholder="c">
    <button type="submit">tinh</button>
</form>
</body>
</html>
