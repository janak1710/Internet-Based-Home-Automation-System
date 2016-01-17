<?php
require("php_serial.class.php");
$serial = new phpSerial();
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(9600); 
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");
$serial->deviceOpen();
$serial->sendMessage("1\r\n");
$file = fopen("testFile.txt","w");
fwrite($file, "1");
fclose($file);
$serial->deviceClose();
?>
