<?php


namespace PD\controller;

use PD\model\WareHouse;
use PD\model\WareHouseModel;

class warehouseController
{
    protected $warehouseModel;

    public function __construct()
    {
        $this->warehouseModel = new WareHouseModel();
    }

    public function showWarehouse()
    {
        $warehouse = $this->warehouseModel->getAll();
        include_once 'src/view/listWarehouse.php';
    }

    public function addWarehouse()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/view/addWarehouse.php';
        } else {
            $name = $_REQUEST['name'];
            $address = $_REQUEST['address'];
            $city = $_REQUEST['city'];
            $country = $_REQUEST['country'];

            if ($name === "" || $address === "" || $city === "" || $country === "") {
                header('location:indexWarehouse.php');
            } else {
                $warehouse = new WareHouse($name, $address, $city, $country);
                $this->warehouseModel->addWarehouse($warehouse);
                header('location:indexWarehouse.php');
            }
        }
    }

    public function editWarehouse()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $warehouse = $this->warehouseModel->getWarehouseId($id);
            include_once 'src/view/editWarehouse.php';
        } else {
            $id = $_REQUEST['id'];
            $warehouse = $this->warehouseModel->getWarehouseId($id);

            $name = $_REQUEST['name'];
            $address = $_REQUEST['address'];
            $city = $_REQUEST['city'];
            $country = $_REQUEST['country'];


            $newWarehouse = new WareHouse($name, $address, $city, $country);
            $newWarehouse->setWarehouseId($id);
            $this->warehouseModel->editWarehouse($newWarehouse);
            header('location:indexWarehouse.php');
        }
    }

    public function deleteWarehouse()
    {
        $id = $_REQUEST['id'];
        $this->warehouseModel->deleteWarehouse($id);
        header('location:indexWarehouse.php');
    }

}