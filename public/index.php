<?php

require_once __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= \App\Wcs\Hello::talk() ?></title>
</head>
<body>

<?= \App\Wcs\Hello::talk() ?>

</body>
</html>
