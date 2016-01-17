void setup(){
  Serial.begin(9600);
}
void loop()
{int sensorValue = analogRead(A0);
float watervalue = analogRead(A1);
int i=100;
float voltage = sensorValue * (500 / 1024.0);
if (Serial.available() > 0) {
char inByte = Serial.read();
if(inByte == '1'){
digitalWrite(13,HIGH);
}
else if(inByte == '0'){
digitalWrite(13,LOW);
}
else if(inByte == '2'){
Serial.println(voltage);
}
else if(inByte == '3'){
Serial.println(watervalue);
}     
}
}
