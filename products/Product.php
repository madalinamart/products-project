<?php


class Product 
{
    private $id;
    private $name;
    private $sku;
    private $price;
    protected $category;
    protected $dbConn;
    


    public function __construct()
    {
        require_once('./Db.php');
        $db = new Db();
        $this->dbConn = $db->connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getSku() 
    {
        return $this->sku;
    }

    public function setSku($sku) {
        $this->sku = $sku;
    }

    
    public function getPrice() 
    {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
    }





    //INSERT
    public function insert()
    {
        $sql = 'INSERT INTO products(nameproducts, skuproducts, priceproducts, categoryproducts) VALUES (:nameproducts, :skuproducts, :priceproducts, :categoryproducts)';
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':nameproducts', $this->sku);
        $stmt->bindParam(':skuproducts', $this->name);
        $stmt->bindParam(':priceproducts', $this->price);
        $stmt->bindParam(':categoryproducts', $this->category);
        if($stmt->execute())
        {
            return true;
        } else 
        {
            return false;
        }
    }


    //SELECT
    public function select()
    {
        $stmt = $this->dbConn->prepare('SELECT * FROM products');
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }


    //DELETE
   public function delete()
   {
    try{
        $sql = 'DELETE FROM products WHERE idproducts=:idproducts';
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':idproducts', $this->id);
        $stmt->execute();
    } catch (Exception $e)
        {
            return $e->getMessage();
        }
   }

    //UPDATE
    public function update()
    {
        try{
            $sql = 'UPDATE products SET nameproducts=:nameproducts, priceproducts=:priceproducts, categoryproducts=:categoryproducts WHERE idproducts=:idproducts ';
            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':nameproducts', $this->sku);    
            $stmt->bindParam(':priceproducts', $this->price);
            $stmt->bindParam(':categoryproducts', $this->category);
            $stmt->bindParam(':idproducts', $this->id);
            $stmt->execute();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}