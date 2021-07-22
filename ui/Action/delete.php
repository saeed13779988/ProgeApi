<?Php

    if(isset($_GET['id']) && $_GET['id'] !=""){

        $url = 'http://localhost/api/items/delete';
        $ch = curl_init($url);
        $data= response($_GET['id']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        echo $result;
        curl_close($ch);

        header('Location: ../index.php');

}
function response($id){
    $response['id'] = $id;
    $json_response = json_encode($response);
    return $json_response;
}

?>