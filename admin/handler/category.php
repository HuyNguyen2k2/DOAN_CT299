<?php
    require_once '../../boostrap.php';
    require_once _DIR_ROOT.'/database/connect.php';
    require_once 'functions.php';

    if(isset($_GET["handler-add"])){
        $value = $_GET["nameCategory"];
        if(!empty($value)){
            $sql = " INSERT INTO loai(L_TEN) VALUES('".$value."') ";
            $isSucces = add($sql);
            if($isSucces){
                alert('Them thanh cong!');
                redirect("/admin/index.php?idPage=category", true);
            }else{
                alert('Khong the them!');
                redirect("/admin/index.php?idPage=category", true);
            }
        }

    }

    if(isset($_GET["handler"])){
        $handler = $_GET["handler"];
        switch($handler){
            case "delete":
                $get_id = $_GET["idTree"];
                $sql = " DELETE FROM loai WHERE L_MA = ".$get_id." ";
                $isSucces = delete($sql);
                if($isSucces){
                    alert('Xoa thanh cong!');
                    redirect("/admin/index.php?idPage=category", true);
                }else{
                    alert('Khong the xoa!');
                    redirect("/admin/index.php?idPage=category", true);
                }
                break;

            case "edit":
                $get_id = $_GET["idTree"];
                $get_name = $_GET["nameCategory"];
                if(isset($get_id) && isset($get_name)){
                    $sql = " UPDATE loai SET L_Ten = '".$get_name."' WHERE L_MA = ".$get_id." ";
                    $isSucces = edit($sql);
                    if($isSucces){
                        alert('Sửa tên thành công!');
                        redirect("/admin/index.php?idPage=category", true);
                    }else{
                        alert('Khong the sửa!');
                        redirect("/admin/index.php?idPage=category", true);
                    }
                }else{
                    alert('Thiếu thông tin!');
                    redirect("/admin/index.php?idPage=category", true);
                }
                
            break;
        }
        
    }

    function add($sql) {
        global $conn;
        $result = $conn->query($sql);

        if($result){
            return true;
        }
        return false;
        
    }

    function delete($sql) {
        global $conn;
        $result = $conn->query($sql);

        if($result){
            return true;
        }
        return false;

    }

    function edit($sql){
        global $conn;
        $result = $conn->query($sql);

        if($result){
            return true;
        }
        return false;
    }

?>