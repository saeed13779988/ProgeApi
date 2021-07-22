<?php


if(isset($_POST['sand'])){
    if(isset($_POST['name']) && $_POST['name'] !=""
       && isset($_POST['description']) && $_POST['description'] !=""
       && isset($_POST['price']) && $_POST['price'] !=""
       && isset($_POST['category_id']) && $_POST['category_id'] !=""){

        $url = 'http://localhost/api/items/create';
        $ch = curl_init($url);
        $data= response($_POST['name'],$_POST['description'],$_POST['price'],$_POST['category_id']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        echo $result;
        curl_close($ch);

     header('Location: ../index.php');

    }
}


function response($name,$description,$price,$category_id){
$response['name'] = $name;
$response['description'] = $description;
$response['price'] = $price;
$response['category_id'] = $category_id;
$json_response = json_encode($response);
echo $json_response;
return $json_response;
}