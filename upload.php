

<?php
     header("Access-Control-Allow-Origin: *");
     header("Access-Control-Allow-Credentials: true");
     header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
     $tgl = date("H:i:s");
     $get = file_get_contents("php://input");
     $convert = base64_decode($get,true);
     $im = imagecreatefromstring($convert);
     if($im !== false){
        header('Content-Type: image/jpeg');
        imagejpeg($im,"foto".$tgl.".jpeg");
        imagedestroy($im);
        echo "Oke";
     }else{
        echo "Gagal";
     } 
    ?>


