data=[[1,2,3,4,[1,2],[1,3],[1,4],[2,3],[2,4],[3,4],[1,2,3],[1,2,4],[1,3,4],[2,3,4],[1,2,3,4]],
      [1,2,4,[1,2],[1,4],[2,4],[1,2,4]],
      [1,2,[1,2]],
      [2,3,4,[2,3],[2,4],[3,4],[2,3,4]],
      [2,3,[2,3]],
      [3,4,[3,4]],
      [2,4,[2,4]]]
n=len(data)
count1=0
for i in range(n):
    count1=count1+data[i].count(1)
count2=0
for i in range(n):
    count2=count2+data[i].count(2)
count3=0
for i in range(n):
    count3=count3+data[i].count(3)
count4=0
for i in range(n):
    count4=count4+data[i].count(4)

count12=0
for i in range(n):
    count12=count12+data[i].count([1,2])
count13=0
for i in range(n):
    count13=count13+data[i].count([1,3])
count14=0
for i in range(n):
    count14=count14+data[i].count([1,4])
count23=0
for i in range(n):
    count23=count23+data[i].count([2,3])
count24=0
for i in range(n):
    count24=count24+data[i].count([2,4])
count34=0
for i in range(n):
    count34=count34+data[i].count([3,4])

count123=0
for i in range(n):
    count123=count123+data[i].count([1,2,3])
count124=0
for i in range(n):
    count124=count124+data[i].count([1,2,4])
count134=0
for i in range(n):
    count134=count134+data[i].count([1,3,4])
count234=0
for i in range(n):
    count234=count234+data[i].count([2,3,4])

count1234=0
for i in range(n):
    count1234=count134+data[i].count([1,2,3,4])
print("1-item set")
if(count1>=2):
    print("{1}=",count1)
if(count2>=2):
    print("{2}=",count2)
if(count3>=2):
    print("{3}=",count3)
if(count4>=2):
    print("{4}=",count4)
print("2-item set")
if(count12>=2):
    print("{1,2}=",count12)
if(count13>=2):
    print("{1,3}=",count13)
if(count14>=2):
    print("{1,4}=",count14)
if(count23>=2):
    print("{2,3}=",count23)
if(count24>=2):
    print("{2,4}=",count24)
if(count34>=2):
    print("{3,4}=",count34)
print("3-item set")
if(count123>=2):
    print("{1,2,3}=",count123)
if(count124>=2):
    print("{1,2,4}=",count124)
if(count134>=2):
    print("{1,3,4}=",count134)
if(count234>=2):
    print("{2,3,4}=",count234)

if(count1234>=2):
    print("4-item set")
    print("{1,2,3,4}=",count1234)
