<?php

include '../phpdao-2.7/generated/include_dao.php';
//include 'file_dao.php';
include 'check_upload_admin.php';
include("../config/dbconnect.php");
include("file_dao.php");

if (isset($_POST['btnThem'])) {

    if ($_FILES["uploadanhchinh"]["error"] > 0) {
        echo "<script>alert('Error : File updload: {$_FILES['uploadanhchinh']['error']}')</script>";
    } else {
        $linkDowload = check_upload_admin();
//        $linkDowload = $host . $linkDowload;
        if (strlen(trim($linkDowload)) > 0) {
            $IDApp = 0;
            $nameApp = $category = $device = $desc = "";

            $query = "SELECT IDApp FROM apps ORDER BY IDApp DESC LIMIT 0, 1;";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            $IDApp = $row['IDApp']; // Mã sp cuối cùng
            error_reporting(0);
            ++$IDApp;
            $nameApp = $_POST['nameApp'];
            $category = $_POST["category"];
            $device = $_POST['device'];
//            $desc = $_POST['desc'];
            //Kiểm tra để chuyển sang bước gen file Properlist
            if ($device == 1) {
                if ($category != null) {
                    $linkDowload = generLinkIOS($linkDowload, $category);
                }
            }
//            echo "<script>alert('nameApp: " . $IDApp . "')</script>";
//            echo "<script>alert('nameApp: " . $nameApp . "')</script>";
//            echo "<script>alert('category: " . $category . "')</script>";
//            echo "<script>alert('Idevice: " . $device . "')</script>";
//            echo "<script>alert('linkDowload : " . $linkDowload . "')</script>";
//            echo "<script>alert('Desc : " . $desc . "')</script>";
            $sql = "INSERT INTO apps(IDApp,NameApp,LinkDowload,IDDevice,IDCategory)
                VALUES('{$IDApp}','{$nameApp}','{$linkDowload}','{$device }','{$category }')";

            $result = mysql_query($sql) or die(mysql_error());
            if ($result) {
                echo "<script type='text/javascript'>alert('Successed !');</script>";
            } else {
                echo "<script type='text/javascript'>alert('Thêm apps thất bại.');</script>";
            }
            echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
        }
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    }
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
} else {
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
}
?>
