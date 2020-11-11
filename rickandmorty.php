<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty Characters</title>
</head>

<body>
    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $char = json_decode(file_get_contents("https://rickandmortyapi.com/api/character/$i"), true);
                echo <<<_TR
                <tr>
                    <td>$i</td>
                    <td>{$char['name']}</td>
                    <td><img src="{$char['image']}" width="100px"></td>
                </tr>
                _TR;
            }
            ?>
        </tbody>
    </table>
</body>

</html>