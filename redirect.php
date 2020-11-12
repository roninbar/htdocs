<?php
if (isset($_POST['url'])) {
    header("Location: {$_POST['url']}", true, 302);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
</head>

<body>
    <form method="POST">
        <input type="url" name="url" id="url">
        <button type="submit">Go</button>
    </form>
</body>

</html>