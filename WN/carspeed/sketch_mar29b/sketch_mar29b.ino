int sen1=8;
int sen2=9;
unsigned long t1=0;
unsigned long t2=0; 
float velocity;
void setup()
{
  pinMode(sen1,INPUT);
  pinMode(sen2,INPUT);
  Serial.begin(9600);
}

void loop() 
{
  while(digitalRead(sen1));
  while(digitalRead(sen1)==0);
  t1=millis();
  while(digitalRead(sen2));
  t2=millis();
  velocity=t2-t1;
  velocity=velocity/1000;//convert millisecond to second
  velocity=(13.5/velocity);//v=d/t
  velocity=velocity*3600;//multiply by seconds per hr
  velocity=velocity/1000;//division by meters per Km
  Serial.print("Speed=");
  Serial.print(velocity);
  Serial.println(" Km/hr");
  delay(1000);  
}
