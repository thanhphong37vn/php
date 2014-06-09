<?php

//include("../phpdao-2.7/generate.php");
include("../config/dbconnect.php");

$act = $_GET["act"];
$iDapp = $_GET["iDapp"];
$iDDevice = $_GET["iDDevice"];
$iDCate = $_GET["iDCate"];
$name = $_GET["name"];

// echo "<script type='text/javascript'>alert('Successed !');</script>";

if ($iDDevice != null && $iDDevice == 1) {
    $url = $_GET["url"];
    /* Acction for url to make filename
     */
//    echo "<script type='text/javascript'>alert( 'URL : {$url}');</script>";
    $fileSplitSlash = explode("/", $url);
    $fileNameSlash = $fileSplitSlash[5];
    $fileSplitDot = explode(".", $fileNameSlash);
    $fileName = $fileSplitDot[0];
    $filePlist = "../ios/" . $fileName . ".plist";
    $fileIpa = "../ios/" . $fileName . ".ipa";

//    echo "<script type='text/javascript'>alert('Filename    : {$fileName}');</script>";
//    echo "<script type='text/javascript'>alert('FilePlist   : {$filePlist}');</script>";
//    echo "<script type='text/javascript'>alert('FileIpa     : {$fileIpa}');</script>";
//    $appsMySqlDAO = new AppsMySqlDAO();
//    $result = $appsMySqlDAO->delete($IDApp);

    $sql = "DELETE  FROM apps WHERE IDApp = '{$iDapp}'";
    $result = mysql_query($sql) or die(mysql_error());

    if ($result) {
        unlink($fileIpa);
        unlink($filePlist);
        echo "<script type='text/javascript'>alert('Successed !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cannot delete! .');</script>";
    }
//    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
}
//Delete for android
if ($iDDevice != null && $iDDevice == 0) {
    /* Acction for url to make filename
     */
    $link = $_GET["link"];
//    echo "<script type='text/javascript'>alert( 'URL : {$link}');</script>";
    $fileSplitSlash = explode("/", $link);
    $fileNameSlash = $fileSplitSlash[5];
    $fileSplitDot = explode(".", $fileNameSlash);
    $fileName = $fileSplitDot[0];
    $fileApk = "../Android/" . $fileName . ".apk";
    echo "<script type='text/javascript'>alert('Filename    : {$fileName}');</script>";
    echo "<script type='text/javascript'>alert('FileApk     : {$fileApk}');</script>";

    $sql = "DELETE  FROM apps WHERE IDApp = '{$iDapp}'";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        unlink($fileApk);
        echo "<script type='text/javascript'>alert('Successed !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cannot delete! .');</script>";
    }
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
}
?>
