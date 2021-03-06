<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../class/Items.php';

$database = new Database();
$db = $database->getConnection();
 
$items = new Items($db);

$items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $items->read();


if($result->num_rows > 0){

	while ($item = $result->fetch_assoc()) {
       extract($item);
       $old_post[] = ['id'=>$id,'name'=>$name,'description'=>$description,'price'=>$price,'category_id'=>$category_id,'created'=>$created,'modified'=>$modified];
    }    
    http_response_code(200);
    echo json_encode($old_post,JSON_UNESCAPED_UNICODE);
   /* echo json_encode($itemRecords);*/
}else{     
    http_response_code(404);     
    echo json_encode(
        array("message" => "No item found.")
    );
} 