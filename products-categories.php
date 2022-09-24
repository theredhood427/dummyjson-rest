<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);
$response = $client->get('https://dummyjson.com/products/category/laptops');
$code = $response->getStatusCode();
$body = $response->getBody();
$product_category= json_decode($body, true);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  
    <title>Category</title>
</head>
<body>


<div class="container">
        <div class="row">
            <div class="col-9"><h1>Product Category</h1></div>
        </div>
    </div>

    <div class = "container">
           <table class="table table-hover">
             <thead>
               <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Brand</th>
                <th scope="col">Category</th>
                <th scope="col">Thumbnail</th>
                </tr>
              </thead>
        <tbody>
        <?php
        foreach ($product_category['products'] as $product){
        ?>
          <tr>
            <th scope="row" href="single-product.php"><?= $product['id']; ?></th>
            <td><?= $product['title']; ?></td>
            <td><?= $product['description']; ?></td>
            <td><?= $product['price']; ?></td>
            <td><?= $product['brand']; ?></td>
            <td><?= $product['category']; ?></td>
            <td><img src="<?= $product['thumbnail']; ?>" class="img-responsive" height="200px"></td>
          <tr>
     <?php
     }
?>
        </tbody>
      </table>
    
</body>
</html>