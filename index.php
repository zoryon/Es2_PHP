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
    <?php 
        $numbers = range(3, 100, 3);

        $count = count($numbers);
        $avg = array_sum($numbers) / $count;
    ?>

    <table>
        <thead>
            <tr>
                <th>Numero</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo "I numeri sono: " . $count ?>
                </td>
                <td>
                    <?php echo "La media è: " . $avg ?>
                </td>
            </tr>
            <?php foreach ($numbers as $number): ?>
                <tr>
                    <td>
                        <?php echo $number ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>