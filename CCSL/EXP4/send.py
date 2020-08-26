import pika
credentials = pika.PlainCredentials('guest', 'guest123')
parameters = pika.ConnectionParameters('172.16.5.154',5672,'/',credentials)
connection = pika.BlockingConnection(parameters)
channel = connection.channel()
channel.queue_declare(queue='ITAsystem')
value='person'
channel.basic_publish(exchange='',routing_key='ITAsystem',body=value)
print ("Message has been sent")

