awk '
/EOF/ {exit;} 
 {print;}' < /dev/ttyUSB0 > temp_reading.txt
