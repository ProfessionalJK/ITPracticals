x=c(5,7,9,10,14,15,18)
y=c(1,2,3,4,5,6,7)

x1=c(21,42,63,84)
labels=c("Mumbai","Delhi","Kolkata","Chennai")
#pie(x1,labels)

x2=1:5
y2=x2**2
z2=c(2,1,3,9,2)
A=cbind(x2,y2,z2)
#pairs(A)

B=matrix(c(1:9),nrow=3,byrow=TRUE)
t=as.table(B)
print(t)
plot(t)
