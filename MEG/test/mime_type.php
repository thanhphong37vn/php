<?php

//$filename = "index.html";
$filename = "Android/1Contact_20140430_16h.apk";
//$filename = "index.html";
//$filename = "index.html";
$mime_type = mime_content_type($filename);
echo "mime_content_type index    : {$mime_type}<br/>";
//echo "mime_content_type APK    : " . mime_content_type('Android/1Contact_20140430_16h.apk') . "<br/>";
//echo "mime_content_type IPA    : " . mime_content_type('ios/1Contact_DialPad_20140515_16h.plist') . "<br/>";
//echo "mime_content_type plist   : " . mime_content_type('ios/1Contact_DialPad_20140515_16h.plist') . "<br/>";
?>
