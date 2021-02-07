

<?php
    /*
     header('Access-Control-Allow-Origin: *');
     header("Access-Control-Allow-Credentials: true");
     header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
     $new_image_name = $_FILES["file"]["name"];
     $cek = move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$new_image_name);
     if($cek){
     echo"Oke";
     }else{
     echo "Ng";
     }
     */
    
    
     header("Access-Control-Allow-Origin: *");
     header("Access-Control-Allow-Credentials: true");
     header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    $tgl = date("H:i:s");
    $get = file_get_contents("php://input");
     //$decode = base64_encode($get,true);
     //$encoded_file = $_POST['file'];
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


