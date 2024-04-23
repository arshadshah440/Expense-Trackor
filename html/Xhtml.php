<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>

</head>

<body>
    <div class="container py-5">

        <div class="table-responsive border">
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">First</th>
                        <th scope="col" class="text-center">Age</th>
                        <th scope="col" class="text-center">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($transactions as $transaction) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $transaction[0] ?></td>
                            <td class="text-center"><?php echo $transaction[1] ?></td>
                            <td class="text-center"><?php echo $transaction[2] ?></td>
                            <td class="text-center"><?php echo $transaction[3] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>