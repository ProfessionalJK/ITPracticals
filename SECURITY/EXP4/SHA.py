import hashlib
str="1234567890"
result=hashlib.sha1(str.encode())
print(result.hexdigest())
