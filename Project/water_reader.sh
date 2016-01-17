awk '
/EOF/ {exit;} 
{print;}' < /dev/ttyUSB0 > water_reading.txt
