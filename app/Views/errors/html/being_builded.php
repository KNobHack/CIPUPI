<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">

    <title>Yahhh :(</title>

    <style type="text/css">
        <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
    </style>
</head>

<body>

    <div class="container text-center">

        <h1 class="headline">Yahhh :(</h1>

        <p class="lead">Halaman ini sedang dalam proses pembuatan...</p>
        <p class="lead"><a href="<?= previous_url() ?>">Kembali</a></p>

    </div>

</body>

</html>