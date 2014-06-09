<?php
//include '../phpdao-2.7/generated/include_dao.php';
$appsMySqlDAO = new AppsMySqlDAO();
$queryAll = $appsMySqlDAO->queryAllByIOSApps();
echo "<div class='item_ios_apps'><a href='#'> <h4>Apps for IOS </h4> </a><hr width='100%'/></div>";
$i = 1;
foreach ($queryAll as $value) {
?>
    <div class="item_ios_apps">
         <?php echo $i++ ."."; ?>
        <a href="<?php echo $value->linkDowload; ?>"> <img alt=""  src="img/iconapps/app_icon_MEG.png" /></a>
        <a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->nameApp; ?> </a>
        <p>Updated:<a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->releaseDate; ?></a>
            <a href="<?php echo $value->linkDowload; ?>" class="btnIOS">Download</a></p>
        <hr width="100%"/>
    </div>
<?php
}
?>
<style type="text/css" >
    .btnIOS {
        -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
        box-shadow:inset 0px 1px 0px 0px #ffffff;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c9c5c9), color-stop(1, #dfdfdf));
        background:-moz-linear-gradient(top, #c9c5c9 5%, #dfdfdf 100%);
        background:-webkit-linear-gradient(top, #c9c5c9 5%, #dfdfdf 100%);
        background:-o-linear-gradient(top, #c9c5c9 5%, #dfdfdf 100%);
        background:-ms-linear-gradient(top, #c9c5c9 5%, #dfdfdf 100%);
        background:linear-gradient(to bottom, #c9c5c9 5%, #dfdfdf 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c9c5c9', endColorstr='#dfdfdf',GradientType=0);
        background-color:#c9c5c9;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #dcdcdc;
        display:inline-block;
        cursor:pointer;
        color:#777777;
        font-family:arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #ffffff;
    }
    .btnIOS:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #c9c5c9));
        background:-moz-linear-gradient(top, #dfdfdf 5%, #c9c5c9 100%);
        background:-webkit-linear-gradient(top, #dfdfdf 5%, #c9c5c9 100%);
        background:-o-linear-gradient(top, #dfdfdf 5%, #c9c5c9 100%);
        background:-ms-linear-gradient(top, #dfdfdf 5%, #c9c5c9 100%);
        background:linear-gradient(to bottom, #dfdfdf 5%, #c9c5c9 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#c9c5c9',GradientType=0);
        background-color:#dfdfdf;
    }
    .btnIOS:active {
        position:relative;
        top:1px;
    }



</style>