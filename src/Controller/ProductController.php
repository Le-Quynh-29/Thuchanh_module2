<?php

namespace App\Controller;
use App\Model\productModel;
class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new productModel();
    }

    public function getProduct()
    {
        $products = $this->productModel->getProduct();
        include "src/View/list.php";
    }

    public function addProduct()
    {
        if (  !empty($_POST['name'])
            && !empty($_POST['type'])
                && !empty($_POST['price'])
                    && !empty($_POST['quantity'])
                        && !empty($_POST['date'])
                            && !empty($_POST['description']))
        {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = (float)$_POST['price'];
            $quantity = $_POST['quantity'];
            $date = $_POST['date'];
            $description = $_POST['description'];

            $this->productModel->addProduct($name,$type,$price,$quantity,$date,$description);
            header('location:index.php?page=list');
        } else {
            include "src/View/add.php";
        }
    }

    public function delete($id)
    {
        $_REQUEST['id'];
        $this->productModel->delete($id);
        header("location:index.php?page=list");
    }

    public function editProduct()
    {
        if($_SERVER['REQUEST_METHOD']== 'GET'){
            $id = $_REQUEST['id'];
            $product = $this->productModel->get($id);
            include 'src/View/edit.php';
        }
        else{
            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = (float)$_POST['price'];
            $quantity = $_POST['quantity'];
            $date = $_POST['date'];
            $description = $_POST['description'];

            $this->productModel->editProduct($name,$type,$price,$quantity,$date,$description,$id);
            header("location:index.php?page=list");
        }
    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $products = $this->productModel->getSearch($search);
        include "src/View/search.php";
    }
}