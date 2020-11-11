<?php


namespace PD\model;


class WareHouseModel
{
    protected $database;

    public function __construct()
    {
        $db = new connDB();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `warehouses`';
        $stmt = $this->database->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $value) {
            $warehouse = new WareHouse($value['warehouseName'], $value['address'], $value['city'], $value['country']);
            $warehouse->setWarehouseId($value['warehouse_id']);
            array_push($array, $warehouse);
        }
        return $array;
    }

    public function getWarehouseId($id)
    {
        $sql = 'SELECT * FROM `warehouses` WHERE `warehouse_id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $value = $stmt->fetch();
        $warehouse = new WareHouse($value['warehouseName'], $value['address'], $value['city'], $value['country']);
        $warehouse->setWarehouseId($id);
        return $warehouse;
    }

    public function addWarehouse($warehouse)
    {
        $sql = 'INSERT INTO `warehouses`(`warehouseName`, `address`, `city`, `country`) VALUES (:warehouseName,:address,:city,:country)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':warehouseName',$warehouse->getWarehouseName());
        $stmt->bindParam(':address',$warehouse->getWarehouseAddress());
        $stmt->bindParam(':city',$warehouse->getWarehouseCity());
        $stmt->bindParam(':country',$warehouse->getWarehouseCountry());
        $stmt->execute();
    }

    public function editWarehouse($warehouse)
    {
        $sql = 'UPDATE `warehouses` SET `warehouseName`= :warehouseName,`address`= :address,`city`= :city,`country`= :country WHERE `warehouse_id`= :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':warehouseName',$warehouse->getWarehouseName());
        $stmt->bindParam(':address',$warehouse->getWarehouseAddress());
        $stmt->bindParam(':city',$warehouse->getWarehouseCity());
        $stmt->bindParam(':country',$warehouse->getWarehouseCountry());
        $stmt->bindParam(':id',$warehouse->getWarehouseId());
        $stmt->execute();
    }

    public function deleteWarehouse($id)
    {
        $sql = 'DELETE FROM `warehouses` WHERE `warehouse_id` = :id ';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }

}