<!DOCTYPE html>
<html lang="en">

<head>
    <!-- links -->
    <link rel="stylesheet" href="./css/globals.css">

    <!-- settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Es2_PHP</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Numero</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 3; $i < 100; $i += 3): ?>
                <tr>
                    <td>
                        <?php echo $i ?>
                    </td>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>
</body>

</html>