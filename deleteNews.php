<?php
require"../news_api/connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $response = array();
    $id_news  = $_POST['id_news'];

    $delete = "DELETE FROM tbl_news WHERE id_news='$id_news'";

    if(mysqli_query($connect,$delete)){
        $response['value']   = 1;
        $response['message'] = "Delete News Successfully";
        echo json_encode($response);
    }else{
        $response['value']   = 0;
        $response['message'] = "Delete news not Successfully";
        echo json_encode($response);
    }

}
?>