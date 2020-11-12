<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2">
    <title>Rick and Morty Characters</title>
</head>

<body>
    <div class="container">
        <table class="table">
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
                        <td>
                            <img src="{$char['image']}" width="100px">
                        </td>
                    </tr>
                    _TR;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>