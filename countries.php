<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Countries</title>
</head>

<body>
    <h1>World Countries</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Population</th>
            <th>Area</th>
            <th>Flag</th>
        </thead>
        <tbody>
            <?php
            $context = stream_context_create([
                'http' => [
                    'proxy' => 'tcp://localhost:8888',
                    'request_fulluri' => true,
                ],
            ]);
            $countries = json_decode(file_get_contents("http://restcountries.eu/rest/v2/all", false, $context), true);
            foreach ($countries as $country) {
                echo <<<_TR
                <tr>
                    <td>{$country['name']}</td>
                    <td>{$country['population']}</td>
                    <td>{$country['area']}</td>
                    <td>
                        <a href="https://www.google.com/search?q={$country['name']}" target="_blank">
                            <img src="{$country['flag']}" alt="{$country['name']}" width="100px" />
                        </a>
                    </td>
                </tr>
                _TR;
            }
            ?>
        </tbody>
    </table>
</body>

</html>