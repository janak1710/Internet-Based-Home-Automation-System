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
$serial->sendMessage("2\r\n");
$file = fopen("temp_reading.txt","w");
fwrite($file, "2");
fclose($file);
shell_exec("sh ./temp_reader.sh");
$serial->deviceClose();
?>
