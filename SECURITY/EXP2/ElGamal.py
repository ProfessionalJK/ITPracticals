#ElGamal Algorithm
print("Select a prime number")
p=(int)(input())
print("Enter primitive root of ",p,"\n")
e1=(int)(input())
print("Select private key d")
d=(int)(input())
e2=(int)(pow(e1,d)%p)
print("e2=",e2)
print("Select random integer r such as r<",p,"\n")
r=(int)(input())
print("Enter plain text")
pt=(int)(input())
c1=(int)(pow(e1,r)%p)
c2=(int)((pt*pow(e2,r))%p)
c1=(int)(pow(c1,p-1-d))
pt=(c2*c1)%p
print("c1=",c1,"\n")
print("c2=",c2,"\n")
print("Plain text=",pt,"\n")
