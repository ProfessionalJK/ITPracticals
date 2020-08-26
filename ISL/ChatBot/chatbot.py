from nltk.chat.util import Chat,reflections
pairs = [
    [r"my name is (.*)",["Hello %1, How are you today ?"]],
    [r"what is your name ?",["My name is JoJo and I'm a chatbot."]],
    [r"how are you?|how do you do?",["I'm doing good\nHow about You ?"]],
    [r"what do you do?",["I'm a chatbot developed for the purpose of helping human beings:)"]],
    [r"where are you from?|where do you live?",["I'm from FAMT, Ratnagiri, Maharashtra."]],
    [r"sorry (.*)",["Its alright","Its OK, never mind"]],
    [r"i'm (.*) doing good|i am doing good|i am fine|i'm fine",["Nice to hear that","Alright :)"]],
    [r"i was just kidding|i was kidding",["Alright:)"]],
    [r"hi|hey|hello",["Hello", "Hey there"]],
    [r"(.*) age?|how old are you?",["I'm a computer program dude\nSeriously you are asking me this?"]],
    [r"what (.*) want ?",["Make me an offer I can't refuse"]],
    [r"(.*) created ?",["Jawwad created me using Python's NLTK library ","top secret :)"]],
    [r"(.*) (location|city) ?",['FAMT, Ratnagiri, Maharashtra',]],
    [r"how is weather in (.*)?",["Weather in %1 is awesome like always","Too hot man here in %1","Too cold man here in %1","Never even heard about %1"]],
    [r"i work in (.*)?",["%1 is an Amazing company, I have heard about it. But they are in huge loss these days."]],
    [r"(.*)raining in (.*)",["No rain since last week here in %2","Damn its raining too much here in %2"]],
    [r"how (.*) health(.*)",["I'm a computer program, so I'm always healthy "]],
    [r"(.*) (sports|game) ?",["I'm a very big fan of Football"]],
    [r"who (.*) sportsperson ?",["Messy","Ronaldo","Roony"]],
    [r"who (.*) (moviestar|actor)?",["Aamir Khan"]],
    [r"tell me a joke|tell me joke",
     ['''Doctor: I\'m sorry but you suffer from a terminal illness and have only 10 to live.
Patient: What do you mean, 10? 10 what? Months? Weeks?!
Doctor: Nine.''',
      '''A doctor accidentally prescribes his patient a laxative instead of a coughing syrup.
Three days later the patient comes for a check-up and the doctor asks: "Well? Are you still coughing?”
The patient replies: “No. I’m afraid to.”''',
      '''An old grandma brings a bus driver a bag of peanuts every day.
First the bus driver enjoyed the peanuts but after a week of eating them he asked: "Please granny, don't bring me peanuts anymore. Have them yourself.".
The granny answers: "You know, I don't have teeth anymore. I just prefer to suck the chocolate around them."''']
    ],
    [r"quit",["Bye take care. See you soon :) ","It was nice talking to you. See you soon :)"]]
]
def chatty():
    print("Hi, I'm JoJo and I chat alot :)\nPlease type lowercase English language to start a conversation. Type 'quit' to leave ") #default message at the start
    chat = Chat(pairs, reflections)
    chat.converse()
if __name__ == "__main__":
    chatty()
