<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);
$users = [
    'json' => ['id' => '1',
    'firstName' => 'Bobs',
    'maidenName' => 'The',
    'lastName' => 'Doe',
    'age' => '69',
    'gender' => 'male',
    'email' => 'bobby.doe@gmail.com',
    'phone' => '0915 809 328',
    'bloodGroup' => 'O',
    'image' => 'thumbnail.jpg'
      ]
  ];

$response = $client->delete('https://dummyjson.com/users/1');
$code = $response->getStatusCode();
$body = $response->getBody();
$user = json_decode($body);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  
    <title>Delete User</title>
</head>
<body>


<div class="container">
        <div class="row">
            <div class="col-9"><h1>Removed User</h1></div>
        </div>
    </div>
<br><br>
<div class = "container"> 
   <table class="table table-striped">
        <thead>
           <tr>
               <th scope="col">ID</th>
               <th scope="col">Complete Name</th>
               <th scope="col">Age</th>
               <th scope="col">Gender</th>
               <th scope="col">Email</th>
               <th scope="col">Phone</th>
               <th scope="col">Blood Type</th>
               <th scope="col">Image</th>
           </tr>
              </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $user->id?></th>
                        <td><?= $user->firstName?><?= " "?><?= $user->maidenName?><?= " "?><?= $user->lastName?></td>
                        <td><?= $user->age ?></td>
                        <td><?= $user->gender?></td>
                        <td><?= $user->email?></td>
                        <td><?= $user->phone?></td>
                        <td><?= $user->bloodGroup?></td>
                        <td><img src="<?= $user->image?>" width="200" length="200"></td>
                    </tr>
                </tbody>
 </table>
</div>
</body>
</html>