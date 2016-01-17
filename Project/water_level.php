<?php
require("php_serial.class.php");
$serial = new phpSerial();$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(9600); $serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1); 
$serial->confFlowControl("none");
$serial->deviceOpen();
$serial->sendMessage("3\r\n");
$serial->sendMessage("F1\r");
$file = fopen("water_reading.txt","w");
fwrite($file, "3");
fclose($file);
shell_exec("sh ./water_reader.sh");
$serial->deviceClose();
?>
