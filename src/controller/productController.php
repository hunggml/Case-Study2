<?php

namespace PD\controller;

use PD\model\Product;
use PD\model\ProductModel;

class productController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function show()
    {
        $product = $this->productModel->getAll();
        include_once 'src/view/listProduct.php';
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/view/addProduct.php';
        } else {
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $status = $_REQUEST['status'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $warehouse = $_REQUEST['warehouse'];

            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/' . $_FILES['image']['name'];
            move_uploaded_file($file, $path);
            $image = $path == 'uploads/' ? 'uploads/default.png' : $path;
            if ($name === "" || $type === "" || $status === "" || $price === "" || $quantity === "" || $date === "" || $warehouse === "") {
                header('location:index.php');
            }
            else{
            $product = new Product($image, $name, $type, $status, $price, $quantity, $date, $warehouse);
            $this->productModel->addProduct($product);
            header('location:index.php');
            }
        }
    }

    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->productModel->getProductId($id);
            include_once 'src/view/editProduct.php';
        } else {
            $id = $_REQUEST['id'];
            $product = $this->productModel->getProductId($id);

            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $status = $_REQUEST['status'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $warehouse = $_REQUEST['warehouse'];


            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/' . $_FILES['image']['name'];
            move_uploaded_file($file, $path);
            $image = $path == 'uploads/' ? $product->getImage() : $path;

            $newProduct = new Product($image, $name, $type, $status, $price, $quantity, $date, $warehouse);
            $newProduct->setId($id);
            $this->productModel->editProduct($newProduct);
            header('location:index.php');
        }
    }

    public function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->productModel->deleteProduct($id);
        header('location:index.php');
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = "%" . $_REQUEST['search'] . "%";
            $input = $this->productModel->search($search);
            include_once 'src/view/searchProduct.php';
        }
    }

}