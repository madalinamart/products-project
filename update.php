<?php

require_once 'products/Product.php';
$data = new Product();
$data->setId($_GET['id']);

if(isset($_POST['submit']))
{
    $data->setName($_POST['name']);
    $data->setPrice($_POST['price']);
    $data->setCategory($_POST['category']);
    $data->update();
    header('Location: products.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>

    <header class="header">
        <div class="logo">
            <i class="fab fa-shopware"></i>
            <h1> My shop</h1>
        </div>    
    </header>

    <div class="intro">
    <h2> Edit product </h2>
    <div class="btn">
    <button type="submit" id="submit" name="submit" form="updateForm">Save</button>
    <!-- goes back to product list -->    
    <button id="myBtn" type="button" onclick="window.location = 'products.php'">Cancel</button>
    </div>
    </div>
    <hr>

<section class="add">
    <form method='POST' action='' id="updateForm">       

        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name"> 
            <span class = "error-message"></span>         
        </p>

        <p>
            <label for="price">Price ($) </label>
            <input type="text" name="price" id="price"> 
            <span class = "error-message"></span>         
        </p> 


        <p>
            <label for="category"> Category </label>
            <select name="category">
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
                <option value="electronics">Electronics</option>
            </select>
        </p>
    </form>
</section>
</body>
</html>
