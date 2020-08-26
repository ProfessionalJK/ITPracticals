#Diffie Hellman Algorithm
p=(int)(input("User A: Enter a prime number\n"))
g=(int)(input("User B: Enter a prime number\n"))
x=(int)(input("User A: Enter a random number\n"))
y=(int)(input("User B: Enter a random number\n"))
r1=(pow(g,x))%p
r2=(pow(g,y))%p
k1=(pow(r2,x))%p
k2=(pow(r1,y))%p
if k1==k2:
    print("Successfully implemented Diffie Hellman Algorithm\n")
    print("K=",k1)
else:
    print("Better luck next time")
