data = [3,7,1,9,8,15,5,26,12,15]    #Given data set
print(data)
c1 = [1]
m1 = 1
c2 = [9]
m2 = 9
c3 = [26]
m3 = 26
def mean(lst):   #Calculates Mean of the Cluster
    return sum(lst) / len(lst)

for i in range(10):
    k = data[i]
    if(k == 1 or k == 9 or k == 26):  #We have already initialzed clusters using these values
        continue
    else:
        if((k - m1) < (m2 - k)):        #average minimum difference will be consider 
            c1.append(k)              #adds element to the cluster
            m1 = mean(c1)
        elif((m2 - k) < (m3 - k)):      
            c2.append(k)
            m2 = mean(c2)
        else:
            c3.append(k)
            m3 = mean(c3)

print("Cluster C1=",c1)
print("Mean for Cluster1=",m1)
print("Cluster C2=",c2)
print("Mean for Cluster2=",m2)
print("Cluster C3=",c3)
print("Mean for Cluster3=",m3)
