<?php
include '../phpdao-2.7/generated/include_dao.php';
session_start();
ob_start();
include("../config/dbconnect.php");
//include '../dao/include_dao.php';

if ($_SESSION["admin_login"] == false) {
    header('location:login.php');
}
//
//if (!isset($_GET['page'])) {
//    $_GET['page'] = 'product_show';
//}

?>
<html>
    <head>
        <meta content="text/html"  charset = "utf8"/>
        <link href="http://1contact.vn/meg/icon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link href="icon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link type="text/css" rel="styleSheet" href="css/style.css"/>
        <link type="text/javascript"  rel="styleSheet" href="js/script.js"/>
        <title>VMS One Contact Dowloads</title>
        <script type="text/javascript">
            function GetFileInfo () {
                var fileInput = document.getElementById ("fileInput");
                var descValue = "";
                var nameAppValue="";
                var extFileValue="";
                var sizeFileValue="";

                if ('files' in fileInput) {
                    if (fileInput.files.length == 0) {
                        //                        descValue = "Please browse for one or more files.";
                    } else {
                        for (var i = 0; i < fileInput.files.length; i++) {
                            //                            descValue += "<br /><b>" + (i+1) + ". file</b><br />";
                            var file = fileInput.files[i];
                            if ('name' in file) {
                                descValue += "Name: " + file.name+"\n";
                                nameAppValue =  file.name.toString().split(".")[0];
                                extFileValue =  file.name.toString().split(".")[1];
                            }
                            else {
                                descValue += "Name: " + file.fileName +"\n";
                                nameAppValue = file.fileName.toString().split(".")[0];
                                extFileValue =  file.fileName.toString().split(".")[1];
                            }
                            if ('size' in file) {
                                descValue += "Size: " + file.size + " bytes"+"\n";
                                sizeFileValue = file.size;
                            }
                            else {
                                descValue += "Size: " + file.fileSize + " bytes "+"\n";
                                sizeFileValue = file.fileSize;
                            }
                            if ('mediaType' in file) {
                                descValue += "Type: " + file.mediaType;
                            }
                        }
                    }
                }
                
                var nameApp = document.getElementById ("nameApp");
                nameApp.value=nameAppValue;
                var device = document.getElementById ("device");
                if (extFileValue=="apk") {
                    var device = document.getElementById ("device");
                    device.options[0].selected = true;
                } if (extFileValue=="ipa")  {
                    var device = document.getElementById ("device");
                    device.options[1].selected = true;
                }
//                device.disabled="true";
                
                var desc = document.getElementById ("desc");
                desc.value = descValue;
            }
            
        </script>
    </head>
    <body >
        <div class="header">
            <center>
                <!--                <img src='http://1contact.vn/meg/style/images/Onecontact-header.png'/>-->
            </center>
        </div>
        <div class="menu">
            <a href="http://1contact.vn/meg/">Trang chủ</a>|
            <a href="http://1contact.vn/meg/app/">Hướng dẫn sử dụng</a>|
            <a href="../index.php">Dowloads</a>|
            <a href="login.php">Login</a>|
            <a href="logout.php">Logout</a>
            <hr width="100%"/>
        </div>
        <div class="content">
            <div class ="upload">
                <div style="height: 100px;  border: #9aafe5; ">
                    <h3> <p>Upload ứng dụng lên Server : </p></h3>
                     <form action="add_admin.php" method="POST" enctype='multipart/form-data' id="formAdd" >
                        <table>
                            <tr>
                                <td colspan="2">  <label>Tên ứng dụng : <input type="text"id="nameApp" name ="nameApp"  size="40" /> </label>
                                    <input type="file" name="uploadanhchinh" id="fileInput" multiple="multiple" size="60" onchange="GetFileInfo ()" />
                                </td>
                            </tr>   
                            <tr>
                                <td width="200px"> <label > Thiết bị :
                                        <select id="device" name="device" >
                                            <option value="0">--Android--</option>
                                            <option value="1" >--IOS--</option>
                                        </select>
                                    </label></td>
                                <td><label > Ứng dụng :
                                        <select id="category" name="category"  >
                                            <option value="0">--Apps--</option>
                                            <option value="1">--Dialpads--</option>
                                        </select>
                                    </label></td>
                            </tr>
                            <tr>
                                <td colspan="2"> <input type="submit" value ="Upload" name ="btnThem"/>
                                    <input type="reset" value ="Reset" name ="btReset"/></td>
                            </tr>
                        </table>
                    </form>
                    <hr/>
                </div>
            </div>
            <div class ="show">
                <div style="border: #9aafe5;">
                </div>
            </div>
            <div class="content_left">
                <div class="android_title">
                    <h3>
                        <a href="#">Android</a>
                    </h3>
                </div>
                <!-- SHow all list Apps for android-->
                <div class="android_left">
                    <?php include 'load_android_apps.php'; ?>
                </div>
                <!-- SHow all list DialPad  for android-->
                <div class="android_right">
                    <?php include 'load_android_dialpad.php'; ?>
                </div>
            </div>
            <div class="content_right">
                <div class="ios_title">
                    <h3>
                        <a href="#">IOS</a>
                    </h3>
                </div>
                <!-- SHow all list Apps  for IOS-->
                <div class="ios_left">
                    <?php include 'load_ios_apps.php'; ?>
                </div>
                <!-- SHow all list DialPad  for IOS-->
                <div class="ios_right">
                    <?php include 'load_ios_dialpad.php'; ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <a hreft="#">Copyright © 2014 VMS MobiFone. Supported by VNPT Global</a>
        </div>
    </body>
</html>
