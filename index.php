<?php
session_start();
if (!isset($_SESSION['user'])){
    header('location:loginAdmin.php');
}
?>
<?php
require __DIR__ . '/vendor/autoload.php';
$productController = new \PD\controller\productController();
$page = $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : NULL;
switch ($page) {
    case 'add':
        $productController->addProduct();
        break;
    case 'edit':
        $productController->editProduct();
        break;
    case 'delete':
        $productController->deleteProduct();
        break;
    case 'search':
        $productController->search();
        break;
    default:
        $productController->show();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
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