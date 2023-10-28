<?php

function redirect($uri='',$delay=false,$delayTimes='0.1'){
    if(preg_match('~^(http|https)~is',$uri)){
        $url=$uri;
    }else{
        $url=_WEB_ROOT.'/'.$uri;
    }
    if($delay){
        header('Refresh: '.$delayTimes.';url='._WEB_ROOT.'/'.$uri);
    }else{
        header('location:'.$url);
    }
    exit;
}

function alert($value=''){
    echo "<script type='text/javascript'>alert('$value');</script>";
}

//Check empty
function checkEmpty($value) {
    return $value != "";
}

// Check ảnh upload
function checkUploadImg($file_root, $uploadDir) {
    
    foreach ($_FILES as $key => $file) {
        if ($file['error'] == 0) {
            $fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
            // Tạo tên file mới để tránh trùng lặp
            
            $newFileName = uniqid('img_') . '.' . $fileType;

            // Đường dẫn đầy đủ đến file mới
            $newFilePath = $uploadDir . $newFileName;

            $allowedTypes = array('jpg', 'jpeg', 'png');
            if (in_array(strtolower($fileType), $allowedTypes)) {
                // Kiểm tra kích thước file, chỉ cho phép tối đa 2MB
                if ($file['size'] <= 2097152) {
                    move_uploaded_file($file['tmp_name'], $newFilePath);
                    $uploadedFiles[$key] = $newFilePath;
                    return $newFileName;
                } else {
                    return 1;
                    // echo "Kích thước file {$file['name']} quá lớn.";
                }
            } else {
                return 2;
                // echo "Loại file {$file['name']} không được hỗ trợ.";
            }
        } else {
            return 3;
            // echo "Có lỗi khi upload file {$file['name']}. Mã lỗi: {$file['error']}.";
        }
    }
}

?>