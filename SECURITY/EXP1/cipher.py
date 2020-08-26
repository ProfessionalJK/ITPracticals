a=str(input("Enter plain text:\n"))
l=len(a)
print("The ceaser cipher text is:")
for i in range(0,l):
    o=ord(a[i])
    s=0
    s=o+3
    c=chr(s)
    print(c,end='')
