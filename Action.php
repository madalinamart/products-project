<?php

require_once 'products/Product.php';
require_once 'Db.php';

class Action
{
    function __construct()
    {
    if(isset($_GET['id'])){
        $product = new Product();
        $product->setId($_GET['id']);
      if($_POST['action'] == 'Update'){
          header("Location: update.php?id=" . $product->getId());
      } else if($_POST['action'] == 'Delete'){          
          $product->delete();                  
          header('Location: products.php'); 
      } else {
          echo 'error';
      }
    }
  }
}


if(isset($_POST['action'])) {
    $p = new Action();
} else {
    echo 'ops';
}


?>