<?php
header('Content-Type: text/xml');


if (isset($_GET['id'])) {
$id = urlencode($_GET['id']);
require("index.php");
$json = appDetails($id);
if ($json['success'] == 1) {
$json = $json['data'];
	



	
$plist = "<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE plist PUBLIC '-//Apple//DTD PLIST 1.0//EN' 'http://www.apple.com/DTDs/PropertyList-1.0.dtd'>
<plist version='1.0'>
<dict>
  <key>items</key>
  <array>
    <dict>
      <key>assets</key>
      <array>
        <dict>
        <key>kind</key>
        <string>software-package</string>
        <key>url</key>
        <string>".$json['downloadUrl']."</string>
        </dict>
		<dict>
					<key>kind</key>
					<string>display-image</string>
					<key>url</key>
					<string>https://danield3v.us/a++/a++/api/icon/".$json['appId']."</string>
				</dict>
				<dict>
					<key>kind</key>
					<string>full-size-image</string>
					<key>url</key>
					<string>https://danield3v.us/a++/api/icon/".$json['appId']."</string>
				</dict>
      </array>
      <key>metadata</key>
      <dict>
        <key>bundle-identifier</key>
        <string>".$json['appBundleId']."</string>
        <key>bundle-version</key>
        <string>".$json['version']."</string>
        <key>kind</key>
        <string>software</string>
        <key>title</key>
        <string>".$json['appName']."</string>
      </dict>
    </dict>
  </array>
</dict>
</plist>
";

echo $plist;
} else {
	echo 'not an app.';
}
} else {
  echo "no id";
}


?>
