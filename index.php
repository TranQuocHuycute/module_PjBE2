<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>02</title>
    <link href="./blocks/02/css/02.css" rel="stylesheet" type="text/css" />
    <link href="./blocks/08/css/08.css" rel="stylesheet" type="text/css" />
    <link href="./blocks/09/css/09.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <main>
        <div class="container">
            <div class="matches row">
                <div class="col-7">
                    <?php include $dir_block . '/blocks/08/08-content.php'; ?>
                    <?php include $dir_block . '/blocks/09/09-content.php'; ?>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include $dir_block . '/blocks/02/02-content.php' ;?>
    </footer>
</body>
</html>