<?php
include 'phpdao-2.7/generated/include_dao.php';
?>
<html>
    <head>
        <meta content="text/html"  charset = "utf8"/>
        <link href="http://1contact.vn/meg/icon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link href="icon.ico" type="image/x-icon" rel="shortcut icon"/>
        <link type="text/css" rel="styleSheet" href="css/style.css"/>
<!--        <link type="text/javascript"  rel="styleSheet" href="js/script.js"/>-->
        <link type="text/javascript"  rel="styleSheet" href="js/script_1.js"/>
        <title>VMS One Contact Dowloads</title>
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
            <a href="#">Downloads</a>
            <hr width="100%"/>
        </div>
        <div class="content">
<!--            <div class ="upload">
                <div style="height: 100px;  border: #9aafe5; ">
                    <h3> <p>Upload ứng dụng lên Server : </p></h3>
                    <form action="add_admin.php" method="POST" enctype='multipart/form-data' id="formAdd">
                        <label>Chọn file :<input type="file" name="uploadanhchinh" id="fileInput" multiple="multiple" size="60" onchange="GetFileInfo ()" /></label>
                        <label id="sizeFile"/><br/>
                        <label>Tên ứng dụng : <input type="text"id="nameApp" name ="nameApp"  size="40" /> </label><br/>
                        <label>Mô tả :  </label>
                        <textarea  type="text"  id="desc" name ="desc" cols="40" rows="3" ></textarea><br/>
                        <label > Thiết bị :
                            <select id="device" name="device" >
                                <option value="0">--Android--</option>
                                <option value="1" >--IOS--</option>
                            </select>
                        </label>
                        <label > Ứng dụng :
                            <select id="category" name="category" >
                                <option value="0">--Apps--</option>
                                <option value="1">--Dialpads--</option>
                            </select>
                        </label>

                        <br/>
                        <input type="submit" value ="Upload" name ="btnThem"/>
                        <input type="reset" value ="Reset" name ="btReset"/>
                    </form>
                    <hr/>
                </div>
            </div>-->
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
                    <?php include 'src/load_android_apps.php'; ?>
                </div>
                <!-- SHow all list DialPad  for android-->
                <div class="android_right">
                    <?php include 'src/load_android_dialpad.php'; ?>
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
                    <?php include 'src/load_ios_apps.php'; ?>
                </div>
                <!-- SHow all list DialPad  for IOS-->
                <div class="ios_right">
                    <?php include 'src/load_ios_dialpad.php'; ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <a hreft="#">Copyright © 2014 VMS MobiFone. Supported by VNPT Global</a>
        </div>
    </body>
</html>
