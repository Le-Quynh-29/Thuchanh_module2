<?php
namespace App\Model;

class productModel
{

    public $product;

    public function __construct()
    {
        $db = new DBConnect();
        $this->product = $db->connect();
    }

    public function getProduct(){
        $sql = "SELECT * FROM products";
        $stmt = $this->product->query($sql);
        return $stmt->fetchAll();
    }

    public function addProduct($name,$type,$price,$quantity,$date,$description)
    {
        $sql = "INSERT INTO `products` ( `productName`, `productType`, `price`, `quantity`, `dateCreate`, `description`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->product->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$type);
        $stmt->bindParam(3,$price);
        $stmt->bindParam(4,$quantity);
        $stmt->bindParam(5,$date);
        $stmt->bindParam(6,$description);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products where productCode = ?";
        $stmt = $this->product->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }

    public function editProduct($name,$type,$price,$quantity,$date,$description,$id)
    {
        $sql = "UPDATE `products` SET `productName`= ?, `productType` = ?, `price` = ?, `quantity` = ?,`dateCreate` = ?, `description` = ? WHERE `products`.`productCode` = ?";
        $stmt = $this->product->prepare($sql);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$type);
        $stmt->bindValue(3,$price);
        $stmt->bindValue(4,$quantity);
        $stmt->bindValue(5,$date);
        $stmt->bindValue(6,$description);
        $stmt->bindValue(7,$id);
        $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE productCode = ?";
        $statement = $this->product->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM products  WHERE `productName` LIKE '$search'";
        $stmt = $this->product->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}