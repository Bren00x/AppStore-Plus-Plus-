<?php
// IndigoHub

require('detection.php');

$device = new Device();
$Modal = $device->GetDevice();
$Firmware = $device->GetFirmware();
$Build = $device->GetBuild();



?>
