
#!/usr/bin/env python
import pika
credentials = pika.PlainCredentials('guest','guest123')
parameters = pika.ConnectionParameters('172.16.5.154',5672,'/',credentials)
connection = pika.BlockingConnection(parameters)
channel = connection.channel()
channel.queue_declare(queue='ITAsystem')
print (" [*] Waiting for messages. To exit press CTRL+C")
def callback(ch, method, properties, body):
 #print (" [x] Detected %r" % (body),)
 #print(body)
 if(body==b'person'):
  print("Red")
 else:
  print("Green")  
channel.basic_consume(callback,queue='ITAsystem',no_ack=True)
channel.start_consuming()

