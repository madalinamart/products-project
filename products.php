<?php

include_once 'Products/Product.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <!-- HEADER -->

    <header class="header">
        <div class="logo">
            <i class="fab fa-shopware"></i>
            <h1> My shop</h1>
        </div>    
    </header>


<section class="product__list">
<div class= "title">
<h1>Our products</h1>
<button type="button" onclick="window.location = 'addProduct.html'"> Add new </button>
</div>
</section>
<hr>


<?php

$obj = new Product();
$products = $obj->select();

?>

<form method="POST" action='Action.php?id=<?=$product['idproducts']?>'>
<?php

    echo '<div class="box">';

    foreach ($products as $product) {

        echo '<div class = cell__box>';
        echo '<p>' . $product['nameproducts']  .'</p>';
        echo '<p>' . $product['skuproducts']  .'</p>';
        echo '<p>' . $product['priceproducts']  .' &euro; </p>';
        echo '<p>' . $product['categoryproducts']  .'</p>';
        echo '<input type="submit" name="action" value="Update" class="product__button"/>';
        echo '<input type="submit" name="action" value="Delete" class="product__button"/>';
        echo '</div>';
    }
    echo '</div>';

    
 
?>
</form>

</section>


   <!-- CONTACTS -->
   
   <section class="contacts" id="contacts">
       <div class="contact">
           <h3>Learn more about us</h3>
           <div class="contacts__links">
               <p>Shipping</p> 
               <p>Find your order</p>
               <p>Where to find us</p>  
               <p>Get assistance</p>
           </div>
       </div>

       <div class="contact">
           <h3>Our policy</h3>
           <div class="contacts__links">
               <p>Terms and conditions</p>
               <p>Privacy Policy</p>
           </div>
       </div>
   </section>

   <footer>
       <p>Created by Madalina Martiniuc</p>
   </footer>
   
</body>
</html>