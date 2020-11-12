<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
          integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous"/>

</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand">Home </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <a href="index.php?page=showType" class="nav-item active nav-link">Product Type</a>
            <a href="index.php?page=showWarehouse" class="nav-item active nav-link">WareHouse</a>
        </ul>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">Admin</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="loginAdmin.php" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </div>
</nav>
<!------ Include the above in your HEAD tag ---------->
<br>
<style>
    div{
        border-radius: 10px;
    }
    #header{
        margin: 0 auto;
    }
    #main{
        font-size: 40px;
        background-color: #0e84b5;
        border-radius: 10px;
        color: white;
    }
</style>
<table id="header">
    <tr>
        <th id="main">LIST WAREHOUSE</th>
    </tr>
</table>
<br>
<div class="container">
    <div class="row" style="background-color: azure;">
        <a href="index.php?page=addWarehouse" class="btn btn-primary btn-xs pull-right"><b>+</b> Add WareHouse</a>
        <table class="table table-hover table-striped">
            <thead>
            <tr class="thead-dark">
                <th>STT</th>
                <th>WareHouse Id</th>
                <th>WareHouse Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (empty($warehouse)): ?>
                <tr>
                    <td>No Data</td>
                </tr>
            <?php else: ?>
                <?php foreach ($warehouse as $key => $value): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $value->getWarehouseId() ?></td>
                        <td><?php echo $value->getWarehouseName() ?></td>
                        <td><?php echo $value->getWarehouseAddress() ?></td>
                        <td><?php echo $value->getWarehouseCity() ?></td>
                        <td><?php echo $value->getWarehouseCountry() ?></td>
                        <td>
                            <a href="index.php?page=editWarehouse&id=<?php echo $value->getWarehouseId() ?>"
                               class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                            <a onclick="return confirm('Do you want delete item ?')"
                               href="index.php?page=deleteWarehouse&id=<?php echo $value->getWarehouseId() ?>"
                               class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>