<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);
  
$products = [
	'json' => [
	'title' => 'Boomer iPhone9 so old'
	]
  ];
  
  $response = $client->put('https://dummyjson.com/products/1', $products);
  $code = $response->getStatusCode();
  $body = $response->getBody();
  $product = json_decode($body);
  ?>

  
<!DOCTYPE html>
<html>
<head>
<title> Single Product (T-T) </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
         <div class="container">
        <div class="row">
            <div class="col-9"><h1>Single Product</h1></div>
        </div>
    </div>
      <br><br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>