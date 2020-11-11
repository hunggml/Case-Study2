<?php


namespace PD\model;


class TypeModel
{
    protected $database;

    public function __construct()
    {
        $db = new connDB();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `productTypes`';
        $stmt = $this->database->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $value) {
            $type = new Type($value['productType'], $value['textDiscription']);
            $type->setProductTypeId($value['productType_id']);
            array_push($array, $type);
        }
        return $array;
    }

    public function getTypeId($id)
    {
        $sql = 'SELECT * FROM `productTypes` WHERE `productType_id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $value = $stmt->fetch();
        $type = new Type($value['productType'], $value['textDiscription']);
        $type->setProductTypeId($id);
        return $type;
    }

    public function addType($type)
    {
        $sql = 'INSERT INTO `productTypes`(`productType`,`textDiscription`) VALUES (:productType,:textDiscription)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productType', $type->getProductType());
        $stmt->bindParam(':textDiscription', $type->getTextDiscription());
        $stmt->execute();
    }

    public function editType($type)
    {
        $sql = 'UPDATE `productTypes` SET `productType`= :productType, `textDiscription`= :textDiscription WHERE `productType_id`= :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productType', $type->getProductType());
        $stmt->bindParam(':textDiscription', $type->getTextDiscription());
        $stmt->bindParam('id', $type->getProductTypeId());
        $stmt->execute();
    }

    public function deleteType($id)
    {
        $sql = 'DELETE FROM `productTypes` WHERE `productType_id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}