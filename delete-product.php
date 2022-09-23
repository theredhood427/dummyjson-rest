<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);
  
$products = [
    'json' => ['id' => '101',
    'title' => 'Xiaomi Mi Mix 3',
    'description' => 'Xiaomi Mi Mix 3 was good phone in 2018',
    'price' => '500',
    'brand' => 'Xiaomi',
    'category' => 'smartphones',
    'thumbnail' => 'thumbnail.jpg'
      ]
  ];
  
  $response = $client->delete('https://dummyjson.com/products/1');
  $code = $response->getStatusCode();
  $body = $response->getBody();
  $product = json_decode($body);
  //var_dump(json_decode($body))
  ?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  
    <title>Delete Product</title>
</head>
<body>


<div class="container">
        <div class="row">
            <div class="col-9"><h1>Remove Product</h1></div>
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
                <tr>
                <th scope="row" href="single-product.php"><?php echo $product->id ?></th>
                <td><?php echo $product->title?></td>
                <td><?php echo $product->description?></td>
                <td><?php echo $product->price?></td>
                <td><?php echo $product->brand?></td>
                <td><?php echo $product->category?></td>
                <td><img src="<?php echo $product->thumbnail?>"></td>
                </tr>
        </tbody>
</table>
</body>
</html>