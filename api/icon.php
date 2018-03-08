<?php
//header('Content-Type: image/png');


if (isset($_GET['id'])) {
$id = urlencode($_GET['id']);
require("index.php");
$json = appDetails($id);
if ($json['success'] == 1) {
$json = $json['data'];


echo header("location: ".$json['appIcon']);

} else {
	echo 'not an app.';
}
} else {
  echo "no id";
}


?>
