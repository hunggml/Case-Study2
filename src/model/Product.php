<?php

namespace PD\model;

class Product
{
    protected $id;
    protected $image;
    protected $productName;
    protected $productTypeId;
    protected $statusProduct;
    protected $price;
    protected $quantityStock;
    protected $warehouseDate;
    protected $warehouseId;

    public function __construct($image, $productName, $productTypeId, $status, $price, $quantityStock, $warehouseDate, $warehouseId)
    {
        $this->image = $image;
        $this->productName = $productName;
        $this->productTypeId = $productTypeId;
        $this->statusProduct = $status;
        $this->price = $price;
        $this->quantityStock = $quantityStock;
        $this->warehouseDate = $warehouseDate;
        $this->warehouseId = $warehouseId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductTypeId()
    {
        return $this->productTypeId;
    }

    /**
     * @param mixed $productTypeId
     */
    public function setProductTypeId($productTypeId): void
    {
        $this->productTypeId = $productTypeId;
    }

    /**
     * @return mixed
     */
    public function getStatusProduct()
    {
        return $this->statusProduct;
    }

    /**
     * @param mixed $statusProduct
     */
    public function setStatusProduct($statusProduct): void
    {
        $this->statusProduct = $statusProduct;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantityStock()
    {
        return $this->quantityStock;
    }

    /**
     * @param mixed $quantityStock
     */
    public function setQuantityStock($quantityStock): void
    {
        $this->quantityStock = $quantityStock;
    }

    /**
     * @return mixed
     */
    public function getWarehouseDate()
    {
        return $this->warehouseDate;
    }

    /**
     * @param mixed $warehouseDate
     */
    public function setWarehouseDate($warehouseDate): void
    {
        $this->warehouseDate = $warehouseDate;
    }

    /**
     * @return mixed
     */
    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    /**
     * @param mixed $warehouseId
     */
    public function setWarehouseId($warehouseId): void
    {
        $this->warehouseId = $warehouseId;
    }


}