<?php

namespace PD\model;
class ProductModel
{
    protected $database;

    public function __construct()
    {
        $db = new connDB();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `products` ';
        $stmt = $this->database->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $value) {
            $product = new Product($value['image'], $value['productName'], $value['productType_id'], $value['statusProduct'], $value['price'], $value['quantityStock'], $value['warehouseDate'], $value['warehouse_id']);
            $product->setId($value['product_id']);
            array_push($array, $product);
        }
        return $array;
    }

    public function getProductId($id)
    {
        $sql = 'SELECT * FROM `products` WHERE `product_id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $value = $stmt->fetch();
        $product = new Product($value['image'], $value['productName'], $value['productType_id'], $value['statusProduct'], $value['price'], $value['quantityStock'], $value['warehouseDate'], $value['warehouse_id']);
        $product->setId($id);
        return $product;
    }

    public function addProduct($product)
    {
        $sql = 'INSERT INTO `products`(`image`, `productName`, `productType_id`, `statusProduct`, `price`, `quantityStock`, `warehouseDate`,`warehouse_id`) VALUES (:image,:productName,:productType_id,:statusProduct,:price,:quantityStock,:warehouseDate,:warehouse_id)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':image', $product->getImage());
        $stmt->bindParam(':productName', $product->getProductName());
        $stmt->bindParam(':productType_id', $product->getProductTypeId());
        $stmt->bindParam(':statusProduct', $product->getStatusProduct());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantityStock', $product->getQuantityStock());
        $stmt->bindParam(':warehouseDate', $product->getWarehouseDate());
        $stmt->bindParam(':warehouse_id', $product->getWarehouseId());
        $stmt->execute();
    }

    public function editProduct($product)
    {
        $sql = 'UPDATE `products` SET `image`= :image ,`productName`= :productName,`productType_id`= :productType_id,`statusProduct`= :statusProduct,`price`= :price,`quantityStock`= :quantityStock,`warehouseDate`= :warehouseDate,`warehouse_id`= :warehouse_id WHERE `product_id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':image', $product->getImage());
        $stmt->bindParam(':productName', $product->getProductName());
        $stmt->bindParam(':productType_id', $product->getProductTypeId());
        $stmt->bindParam(':statusProduct', $product->getStatusProduct());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantityStock', $product->getQuantityStock());
        $stmt->bindParam(':warehouseDate', $product->getWarehouseDate());
        $stmt->bindParam(':warehouse_id', $product->getWarehouseId());
        $stmt->bindParam(':id', $product->getId());
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = 'DELETE FROM `products` WHERE `product_id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function search($key)
    {
        $sql = 'SELECT * FROM `products` WHERE `productName` LIKE :key ';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':key',$key);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $value) {
            $infor = new Product($value['image'], $value['productName'], $value['productType_id'], $value['statusProduct'], $value['price'], $value['quantityStock'], $value['warehouseDate'], $value['warehouse_id']);
            $infor->setId($value['product_id']);
            array_push($arr, $infor);
        }
        return $arr;
    }

}