<?php
//include '../phpdao-2.7/generated/include_dao.php';
$appsMySqlDAO = new AppsMySqlDAO();
$queryAll = $appsMySqlDAO->queryAllByAndroidApps();
echo "<div class='item_android_apps'><a href='#'> <h4>Apps for Android </h4> </a><hr width='100%'/></div>";
$i = 1;
foreach ($queryAll as $value) {
?>
    <div class="item_android_apps">
        <?php echo $i++ ."."; ?>
        <a href="<?php echo $value->linkDowload; ?>"> <img alt=""  src="img/iconapps/app_icon_MEG.png" /></a>
        <a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->nameApp; ?> </a>
         <p>Updated:<a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->releaseDate; ?></a>
            <a href="<?php echo $value->linkDowload; ?>" class="btnAndr">Download</a></p>
        <p>
            <a href="edit_app.php?act=edit&iDapp=<?php echo $value->iDApp; ?>&name=<?php echo $value->nameApp; ?>&link=<?php echo $value->linkDowload; ?>">Edit</a>|
            <a href="delete_app.php?act=del&iDapp=<?php echo $value->iDApp; ?>&iDDevice=<?php echo $value->iDDevice; ?>&iDCate=<?php echo $value->iDCategory; ?>&name=<?php echo $value->nameApp; ?>&link=<?php echo $value->linkDowload; ?>">Delete</a>
        </p>
        <hr width="100%"/>
    </div>
<?php
}
?>

<style type="text/css" >
    .btnAndr {
        -moz-box-shadow:inset 0px 1px 0px 0px #a4e271;
        -webkit-box-shadow:inset 0px 1px 0px 0px #a4e271;
        box-shadow:inset 0px 1px 0px 0px #a4e271;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809));
        background:-moz-linear-gradient(top, #89c403 5%, #77a809 100%);
        background:-webkit-linear-gradient(top, #89c403 5%, #77a809 100%);
        background:-o-linear-gradient(top, #89c403 5%, #77a809 100%);
        background:-ms-linear-gradient(top, #89c403 5%, #77a809 100%);
        background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809',GradientType=0);
        background-color:#89c403;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #84ab46;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #528009;
    }
    .btnAndr:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
        background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
        background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
        background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
        background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
        background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
        background-color:#77a809;
    }
    .btnAndr:active {
        position:relative;
        top:1px;
    }

</style>