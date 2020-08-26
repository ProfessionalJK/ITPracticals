#Rivest Shamir Adleman
print("Select two prime numbers")
p=(int)(input())
q=(int)(input())
n=p*q
pn=(p-1)*(q-1)
print("Select e such that GCD(e,",pn,")=1\n")
e=(int)(input())
m=(int)(input("Enter plain text\n"))
for d in range(0,1000):
    j=d*e
    j=j%pn
    if(j==1):
        print("d=",d)
        break
c=(int)((pow(m,e))%n)
m=(int)((pow(c,d))%n)
print("Cipher text=",c)
print("Plain text=",m)
