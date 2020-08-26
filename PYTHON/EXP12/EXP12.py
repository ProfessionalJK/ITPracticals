import math
print("Demonstration of Pickle\n")
import pickle
a=3.14
b=["Jawwad",1]
c="Kazi"
d={"Kolhapur":1,"Mumbai":2}
f=open("sample.dat","wb")
pickle.dump(a,f)
pickle.dump(b,f)
pickle.dump(c,f)
pickle.dump(d,f)
f.close()
f=open("sample.dat","rb")
p=pickle.load(f)
print(p)
p=pickle.load(f)
print(p)
p=pickle.load(f)
print(p)
p=pickle.load(f)
print(p)
f.close()

print("\n\nDemonstration of Lambda\n")
f=lambda x,y:(x*x)+(y*y)
print("Hypotenious=",math.sqrt(f(3,4)))


print("\n\nDemonstration of Map\n")
def square(x):
    return x*x
a=[1,4,5,7,8,-9,-10,-20,30]
b=list(map(square,a))
print(b)


print("\n\nDemonstration of Filter\n")
def isodd(x):
    if(x%2!=0):
        return True
    else:
        return False
def iseven(x):
    if(x%2==0):
        return True
    else:
        return False
a=[1,4,5,7,8,-9,-10,-20,30]
b=list(filter(isodd,a))
print("List of odd numbers:",b)
b=list(filter(iseven,a))
print("List of even numbers:",b)
