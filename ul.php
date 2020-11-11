<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unordered List</title>
</head>

<body>
    <ul>
        <?php
        $arr = ['a', 'b', 'c', 'd'];
        for ($i = 0; $i < sizeof($arr); $i++) {
            echo "<li>$arr[$i]</li>";
        }
        ?>
    </ul>
</body>

</html>