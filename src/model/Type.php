<?php


namespace PD\model;


class Type
{
    protected $productTypeId;
    protected $productType;
    protected $TextDiscription;

    /**
     * Type constructor.
     * @param $productType
     * @param $TextDiscription
     */
    public function __construct($productType, $TextDiscription)
    {
        $this->productType = $productType;
        $this->TextDiscription = $TextDiscription;
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
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     */
    public function setProductType($productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @return mixed
     */
    public function getTextDiscription()
    {
        return $this->TextDiscription;
    }

    /**
     * @param mixed $TextDiscription
     */
    public function setTextDiscription($TextDiscription): void
    {
        $this->TextDiscription = $TextDiscription;
    }


}