<?php


namespace PD\model;


class WareHouse
{
    protected $warehouseId;
    protected $warehouseName;
    protected $warehouseAddress;
    protected $warehouseCity;
    protected $warehouseCountry;

    /**
     * WareHouse constructor.
     * @param $warehouseName
     * @param $warehouseAddress
     * @param $warehouseCity
     * @param $warehouseCountry
     */
    public function __construct($warehouseName, $warehouseAddress, $warehouseCity, $warehouseCountry)
    {
        $this->warehouseName = $warehouseName;
        $this->warehouseAddress = $warehouseAddress;
        $this->warehouseCity = $warehouseCity;
        $this->warehouseCountry = $warehouseCountry;
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

    /**
     * @return mixed
     */
    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    /**
     * @param mixed $warehouseName
     */
    public function setWarehouseName($warehouseName): void
    {
        $this->warehouseName = $warehouseName;
    }

    /**
     * @return mixed
     */
    public function getWarehouseAddress()
    {
        return $this->warehouseAddress;
    }

    /**
     * @param mixed $warehouseAddress
     */
    public function setWarehouseAddress($warehouseAddress): void
    {
        $this->warehouseAddress = $warehouseAddress;
    }

    /**
     * @return mixed
     */
    public function getWarehouseCity()
    {
        return $this->warehouseCity;
    }

    /**
     * @param mixed $warehouseCity
     */
    public function setWarehouseCity($warehouseCity): void
    {
        $this->warehouseCity = $warehouseCity;
    }

    /**
     * @return mixed
     */
    public function getWarehouseCountry()
    {
        return $this->warehouseCountry;
    }

    /**
     * @param mixed $warehouseCountry
     */
    public function setWarehouseCountry($warehouseCountry): void
    {
        $this->warehouseCountry = $warehouseCountry;
    }


}