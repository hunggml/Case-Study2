<?php


namespace PD\controller;

use PD\model\Type;
use PD\model\TypeModel;

class typeController
{
    protected $typeModel;

    public function __construct()
    {
        $this->typeModel = new TypeModel();
    }

    public function show()
    {
        $type = $this->typeModel->getAll();
        include_once 'src/view/listType.php';
    }

    public function addType()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/view/addType.php';
        } else {
            $name = $_REQUEST['name'];
            $des = $_REQUEST['des'];

            if ($name === "" || $des === "") {
                header('location:indexType.php');
            } else {
                $type = new Type($name, $des);
                $this->typeModel->addType($type);
                header('location:indexType.php');
            }
        }
    }

    public function editType()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $type = $this->typeModel->getTypeId($id);
            include_once 'src/view/editType.php';
        } else {
            $id = $_REQUEST['id'];
            $type = $this->typeModel->getTypeId($id);

            $name = $_REQUEST['name'];
            $des = $_REQUEST['des'];


            $newType = new Type($name, $des);
            $newType->setProductTypeId($id);
            $this->typeModel->editType($newType);
            header('location:indexType.php');
        }
    }

    public function deleteType()
    {
        $id = $_REQUEST['id'];
        $this->typeModel->deleteType($id);
        header('location:indexType.php');
    }
}