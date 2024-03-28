

<?php
    
     header("Access-Control-Allow-Origin: *");
     header("Access-Control-Allow-Credentials: true");
     header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    $tgl = "foto/".date("dmYHis").".jpeg";
    $ddd =  file_get_contents("php://input");
	$get = json_decode($ddd,true);
    //$convert = base64_decode(,true);// untuk file_get_contents
    $im = imagecreatefromstring(base64_decode($get['foto'],true));
    if($im !== false){
        header('Content-Type: image/jpeg');
        imagejpeg($im,$tgl);
        imagedestroy($im);
		echo json_encode(array("data" => "success"));
    }else{
        echo json_encode(array("data" => $get['foto']));
    }
?>


