<?php

require_once 'products/Product.php';
require_once 'Db.php';

class Add 
{

function __construct() 
{
if(isset($_POST['submit'])){
   $product = new Product();
   $product->setName($_POST['name']);
   $product->setSku($_POST['sku']);
   $product->setPrice($_POST['price']);
   $product->setCategory($_POST['category']);
   $product->insert();
} else {
    echo 'error';
}
} 
}

if(isset($_POST['submit']))
{
    $productAdd = new Add;
    
    header('Location: products.php');
} else 
{
    echo 'off';
}

?>