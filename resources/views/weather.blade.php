<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
</head>
<body>
<?php
    use App\Http\Controllers;

    // $weather = new WeatherController();
    $data = $weather->index(0);
    echo $data[0];
    ?>
</body>
</html>