<?php

//$filePath = "http://lambienquangcaogiare.com.vn/MEG/ios/1Contact_DialPad_20140515_16h.plist";
////$extFile = "ipa";
//$cate = "0"; //0: Apps //1:DialPad

function generLinkIOS($filePath, $cate) {
    $linkdow = "";
    if ($filePath != NULL) {

//        $filePath = "http://lambienquangcaogiare.com.vn/MEG/ios/1Contact_DialPad_20140515_16h.plist";
        $fileSplitSlash = explode("/", $filePath);
        $fileNameSlash = $fileSplitSlash[5];
        $fileSplitDot = explode(".", $fileNameSlash);
        $fileName = $fileSplitDot[0];
        $filePlist = "../ios/" . $fileName . ".plist";
        //Cate = 0 : Category : Apps
        if ($cate == "0") {
            $linkdow = generPlistApps($filePath, $filePlist);
        }
        //Cate = 1 : Category : Dialpad
        if ($cate == "1") {
            $linkdow = generPlistDialPad($filePath, $filePlist);
        }
    }

    return $linkdow;
}

//Tao file Proper LIST Dialpad
//Tra ve duong dan file plistgenerPlistDialPad
function generPlistDialPad($filePathDialPad, $filePlistDialPad) {
    $file = fopen($filePlistDialPad, "w+");
    $content = generContentDialpad($filePathDialPad);
    fwrite($file, $content);
    fclose($file);
    return generLinkDowload($filePlistDialPad);
}

//Tao file Proper LIST Apps
//Tra ve duong dan file plistgenerPlistApps
function generPlistApps($filePathApps, $filePlistApps) {
    $file = fopen($filePlistApps, "w+");
    $content = generContentApps($filePathApps);
    fwrite($file, $content);
    fclose($file);
    return generLinkDowload($filePlistApps);
}

function generContentApps($filePathApps) {
    return "
        <!DOCTYPE plist PUBLIC '-//Apple//DTD PLIST 1.0//EN' 'http://www.apple.com/DTDs/PropertyList-1.0.dtd'>
    <plist version='1.0'>
    <dict>
   <!-- array of downloads.-->
   <key>items</key>
   <array>
       <dict>
           <!-- an array of assets to download -->
           <key>assets</key>
           <array>
               <!-- software-package: the ipa to install.-->
               <dict>
                   <!-- required.the asset kind.-->
                   <key>kind</key>
                   <string>software-package</string>
                   <!-- optional.md5 every n bytes.will restart a chunk if md5 fails.-->
				   <!--
                   <key>md5-size</key>
                   <integer>104857</integer>
				   -->
                   <!-- optional.array of md5 hashes for each 'md5-size' sized chunk.-->
                   <!-- <key>md5s</key>
                   <array>
                       <string>41fa64bb7a7cae5a46bfb45821ac8bba</string>
                       <string>51fa64bb7a7cae5a46bfb45821ac8bba</string>
                   </array>-->
                   <!-- required.the URL of the file to download.-->
                   <key>url</key>
                   <string>" . $filePathApps . "</string>
               </dict>
               <!-- display-image: the icon to display during download .-->
               <dict>
                   <key>kind</key>
                   <string>display-image</string>
                   <!-- optional.indicates if icon needs shine effect applied.-->
                   <key>needs-shine</key>
                   <true/>
                   <key>url</key>
                   <string>https://app.meg.vn/VMS/iOS/app_icon_MEG.png</string>
               </dict>
               <!-- full-size-image: the large 512x512 icon used by iTunes.-->
               <dict>
                   <key>kind</key>
                   <string>full-size-image</string>
                   <!-- optional.one md5 hash for the entire file.-->
                   <!--<key>md5</key>
                   <string>61fa64bb7a7cae5a46bfb45821ac8bba</string>-->
                   <key>needs-shine</key>
                   <true/>
                   <key>url</key>
				   <string>https://app.meg.vn/VMS/iOS/app_icon_MEG.png</string>
               </dict>
           </array><key>metadata</key>
           <dict>
               <!-- required -->
               <key>bundle-identifier</key>
               <string>com.srt.VietnamVMS</string>
               <!-- optional (software only) -->
               <key>bundle-version</key>
               <string>1.0</string>
               <!-- required.the download kind.-->
               <key>kind</key>
               <string>software</string>
               <!-- optional. displayed during download; typically company name -->
               <key>subtitle</key>
               <string>Apple</string>
               <!-- required.the title to display during the download.-->
               <key>title</key>
               <string>1Contact App</string>
           </dict>
       </dict>
   </array>
</dict>
</plist>
";
}



function generContentDialpad($filePathDialPad) {
    return "<!DOCTYPE plist PUBLIC '-//Apple//DTD PLIST 1.0//EN' 'http://www.apple.com/DTDs/PropertyList-1.0.dtd'>
    <plist version='1.0'>
    <dict>
   <!-- array of downloads.-->
   <key>items</key>
   <array>
       <dict>
           <!-- an array of assets to download -->
           <key>assets</key>
           <array>
               <!-- software-package: the ipa to install.-->
               <dict>
                   <!-- required.the asset kind.-->
                   <key>kind</key>
                   <string>software-package</string>
                   <!-- optional.md5 every n bytes.will restart a chunk if md5 fails.-->
               <!-- <key>md5-size</key>
                   <integer>104857</integer>
				-->
                   <!-- optional.array of md5 hashes for each 'md5-size' sized chunk.-->
                   <!-- <key>md5s</key>
                   <array>
                       <string>41fa64bb7a7cae5a46bfb45821ac8bba</string>
                       <string>51fa64bb7a7cae5a46bfb45821ac8bba</string>
                   </array>-->
                   <!-- required.the URL of the file to download.-->
                   <key>url</key>
				    <!-- Thay thế thư mục-->
                   <string>" . $filePathDialPad . "</string>
               </dict>
               <!-- display-image: the icon to display during download .-->
               <dict>
                   <key>kind</key>
                   <string>display-image</string>
                   <!-- optional.indicates if icon needs shine effect applied.-->
                   <key>needs-shine</key>
                   <true/>
                   <key>url</key>
                   <string>https://app.meg.vn/VMS/iOS/app_icon_DialPad.png</string>
               </dict>
               <!-- full-size-image: the large 512x512 icon used by iTunes.-->
               <dict>
                   <key>kind</key>
                   <string>full-size-image</string>
                   <!-- optional.one md5 hash for the entire file.-->
                   <!--<key>md5</key>
                   <string>61fa64bb7a7cae5a46bfb45821ac8bba</string>-->
                   <key>needs-shine</key>
                   <true/>
                   <key>url</key><string>https://app.meg.vn/VMS/iOS/app_icon_DialPad.png</string>
               </dict>
           </array><key>metadata</key>
           <dict>
               <!-- required -->
               <key>bundle-identifier</key>
               <string>com.vietnam.mobiDialPad</string>
               <!-- optional (software only) -->
               <key>bundle-version</key>
               <string>1.0.1</string>
               <!-- required.the download kind.-->
               <key>kind</key>
               <string>software</string>
               <!-- optional. displayed during download; typically company name -->
               <key>subtitle</key>
               <string>Apple</string>
               <!-- required.the title to display during the download.-->
               <key>title</key>
               <string>1Contact DialPad</string>
           </dict>
       </dict>
   </array>
</dict>
</plist>
";
}

function generLinkDowload($filePlist) {
//    $filePlistDialPad = "../iOS/1Contact_DialPad_20140515_16h.plist";
    $host = "http://lambienquangcaogiare.com.vn/MEG/";
//    $host = "http://test.1contact.vn/";
    $url = str_replace("../", $host, $filePlist);
    return "itms-services://?action=download-manifest&amp;url=" . $url;
}

?> 