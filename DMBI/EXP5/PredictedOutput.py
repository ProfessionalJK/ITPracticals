print("Program to predict environment to Play Tennis\n")
print("Select proper enviromental conditions from following\n")
print("Outlook\n1.Sunny\t2.Overcast\t3.Rain\n")
n1=int(input())
print("Temperature\n1.Hot\t2.Mild\t3.Cool\n")
n2=int(input())
print("Humidity\n1.High\t2.Normal\n")
n3=int(input())
print("Wind\n1.Weak\t2.Strong\n")
n4=int(input())
output1="Yes! can Play Tennis"
output2="No! can't Play Tennis"
if(n1==1 and n3==1):
    print("Outlook= Sunny\nHumidity= High")
    print(output2)
elif(n1==1 and n3==2):
    print("Outlook= Sunny\nHumidity= Normal")
    print(output1)
elif(n1==2):
    print("Outlook= Overcast")
    print(output1)
elif(n1==3 and n4==1):
    print("Outlook= Rain\nWind= Weak")
    print(output1)
elif(n1==3 and n4==2):
    print("Outlook= Rain\nWind= Strong")
    print(output2)
