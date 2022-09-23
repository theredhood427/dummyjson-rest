<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com/',
]);
$users = [
    'json' => [
    'firstName' => 'Joel',
    'maidenName' => 'Dickson',
    'lastName' => 'Delmonte',
    ]
  ];
  
  $response = $client->put('https://dummyjson.com/users/1', $users);
  $code = $response->getStatusCode();
  $body = $response->getBody();
  $user = json_decode($body);
  //var_dump($body);
  
  ?>
 <!DOCTYPE html>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Update</title>
    </head> 
        <body>  
        <div class="container">
        <div class="row">
            <div class="col-9"><h1>Update User</h1></div>
        </div>
    </div>
            <br><br>
        <div class = "container"> 
        <table class="table table-hover">
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
                        <th scope="row"><?php echo $user->id?></th>
                        <td><?php echo $user->firstName?><?php echo " "?><?php echo $user->maidenName?><?php echo " "?><?php echo $user->lastName?></td>
                        <td><?php echo $user->age ?></td>
                        <td><?php echo $user->gender?></td>
                        <td><?php echo $user->email?></td>
                        <td><?php echo $user->phone?></td>
                        <td><?php echo $user->bloodGroup?></td>
                        <td><img src="<?php echo $user->image?>" width="100" length="100"></td>
                    </tr>
                </tbody>
 </table>
</div>
</body>
</html>