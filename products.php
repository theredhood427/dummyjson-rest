<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);

$response= $client ->get("products");
$code = $response->getStatusCode();
$body = $response ->getBody();
$x = json_decode($body);

$products =$x->products;

?>



<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  
    <title>Products Lists</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-9"><h1>Products</h1></div>
        </div>
    </div>
    <div class="container">
    <table class="table table-hover">
    <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discounted Percentage</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Thumbnail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($products as $info):
                    ?>
                    <tr>
                        <td><?=$info->id;?></td>
                        <td><?=$info->title;?></td>
                        <td><?=$info->description;?></td>
                        <td><?=$info->price;?></td>
                        <td><?=$info->discountPercentage;?></td>
                        <td><?=$info->rating;?></td>
                        <td><?=$info->stock;?></td>
                        <td><?=$info->brand;?></td>
                        <td><?=$info->category;?></td>
                        <td><?="<img width=200x; height=200x; src=" . $info->thumbnail . ">";?></td>
                    </tr>
                    <?php endforeach; ?>				
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>