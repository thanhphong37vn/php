<?php

//include 'file_dao.php';
//$fileNameFileDao = "";
//$extFileFileDao = "apk"; //0: apk | 1:ipa
//$cateFileDao = "0"; //0: Apps //1:DialPad

function check_upload_admin() {
    $file = null;
    $ext = array("apk", "ipa");
    $fileName = $_FILES["uploadanhchinh"]["name"];
    $fileGoc = null;
    $fileFinfo = explode(".", $fileName);
    $duoiFileAnh = $fileFinfo[1];
    $host = "http://lambienquangcaogiare.com.vn/MEG/";

//    $host = "http://test.1contact.vn/";
//
//    
//    $extFileFileDao = $duoiFileAnh; //thiết lập cho biến global
//    $fileNameFileDao = $fileFinfo[0]; //thiết lập cho biến global

    if ($duoiFileAnh == $ext['0']) {
        if ($_FILES["uploadanhchinh"]["error"] > 0) {
//            echo "<script>alert('{$_FILES["uploadanhchinh"]["error"]}');</script>";
            echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        } else {
            $no = 1;
            while (true) {
                $flag = 0;
                if (file_exists("../Android/" . $fileName)) {
                    if ($flag == 0) {
                        $fileGoc = $fileFinfo[0];
                        $flag = 1;
                    }
                    $fileName = $fileGoc . "_" . ++$no . "." . $fileFinfo[1];
                } else {
                    move_uploaded_file($_FILES["uploadanhchinh"]["tmp_name"], "../Android/" . $fileName);
                    $file = "Android/" . $fileName;
                    break;
                }
            }
        }
        $rootFile = $host . $file;
        return $rootFile;
    } else
    if ($duoiFileAnh == $ext['1']) {
        if ($_FILES["uploadanhchinh"]["error"] > 0) {
            echo "<script>alert('{$_FILES["uploadanhchinh"]["error"]}');</script>";
        } else {
            $no = 1;
            while (true) {
                if (file_exists("../ios/" . $fileName)) {
                    $flag = 0;
                    if ($flag == 0) {
                        $fileGoc = $fileFinfo[0];
                        $flag = 1;
                    }
                    $fileName = $fileGoc . "_" . ++$no . "." . $fileFinfo[1];
                } else {
                    move_uploaded_file($_FILES["uploadanhchinh"]["tmp_name"], "../ios/" . $fileName);
                    $file = "ios/" . $fileName;
                    break;
                }
            }
        }

//    $host = "";
        $rootFile = $host . $file;
        return $rootFile;
    } else {
        echo "<script>alert('Không đúng định dạng file ! Xin vui lòng chọn lại !');</script>";
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    }
}

?>