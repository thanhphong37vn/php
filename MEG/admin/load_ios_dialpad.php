<?php
//include '../phpdao-2.7/generated/include_dao.php';
$appsMySqlDAO = new AppsMySqlDAO();
$queryAll = $appsMySqlDAO->queryAllByIOSDialpads();
echo "<div class='item_ios_dialpad'><a href='#'> <h4>Dialpads for IOS </h4> </a><hr width='100%'/></div>";
$i = 1;
foreach ($queryAll as $value) {
?>
    <div class="item_ios_dialpad">
         <?php echo $i++ ."."; ?>
        <a href="<?php echo $value->linkDowload; ?>"> <img alt=""  src="img/iconapps/app_icon_DialPad.png" /></a>
        <a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->nameApp; ?> </a>
        <p>Release:<a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->releaseDate; ?></a>
            <a href="<?php echo $value->linkDowload; ?>" class="btnIOS">Download</a></p>
        <p>
            <a href="edit_app.php?act=edit&iDapp=<?php echo $value->iDApp; ?>&name=<?php echo $value->nameApp; ?>&link=<?php echo $value->linkDowload; ?>">Edit</a>|
         <a href="delete_app.php?act=del&iDapp=<?php echo $value->iDApp; ?>&iDDevice=<?php echo $value->iDDevice; ?>&iDCate=<?php echo $value->iDCategory; ?>&name=<?php echo $value->nameApp; ?>&link=<?php echo $value->linkDowload; ?>">Delete</a>     <hr width="100%"/>
    </div>
<?php
}
?>