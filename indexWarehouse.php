<?php
require __DIR__ . '/vendor/autoload.php';
$warehouseController = new \PD\controller\warehouseController();
$page = $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : NULL;
switch ($page) {
    case 'add':
        $warehouseController->addWarehouse();
        break;
    case 'edit':
        $warehouseController->editWarehouse();
        break;
    case 'delete':
        $warehouseController->delete();
        break;
    default:
        $warehouseController->show();
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    body {
        background-size: cover;
        background-attachment: fixed;
        background-image: url("uploads/background.jpg");
    }

    img {
        max-width: 66%;
        height: auto;
    }

</style>
</body>
</html>
