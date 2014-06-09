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
        <p>Updated:<a href="<?php echo $value->linkDowload; ?>"> <?php echo $value->releaseDate; ?></a></p>
        <a href="<?php echo $value->linkDowload; ?>" class="btnIOS">Download</a>
        <hr width="100%"/>
    </div>
<?php
}
?>