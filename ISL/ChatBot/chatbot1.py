from nltk.chat.util import Chat,reflections
import random 
pairs = [
    [r"hi|hey|hello",["Hey there. Welcome to Online Ticket Booking ChatBot.\nEnter Source Location:(Begin with Source: )"]],
    [r"Source:(.*)",["Enter Destination Location:(Begin with Destination: )"]],
    [r"Destination:(.*)",["Tutari Express,KokanKanya Express, Matsyaganda Express, Rajdhani Express"]],
    [r"Tutari Express|KokanKanya Express|Matsyaganda Express|Rajdhani Express",["Sleeper Class, 2S, AC1, AC2"]],
    [r"Sleeper Class",["Rs. 244","Rs. 250","Rs. 260"]],
    [r"2S",["Rs. 180","Rs. 185","Rs. 190"]],
    [r"AC1",["Rs. 1500","Rs. 1600","Rs. 2000"]],
    [r"AC2",["Rs.900","Rs. 1200","Rs. 1500"]],
    [r"Payment done|payment done",["Thank You for the payment\nYour Booking number is BKID0000"+str(random.randrange(0,2000))]],
    [r"quit",["Bye take care. See you soon :) ","It was nice talking to you. See you soon :)"]]
]
def chatty():
    print("Hi, I'm JoJo and I chat alot :)\nPlease type lowercase English language to start a conversation. Type 'quit' to leave ") #default message at the start
    chat = Chat(pairs, reflections)
    chat.converse()
if __name__ == "__main__":
    chatty()
