import hashlib
str="1234567890"
result=hashlib.md5(str.encode())
print(result.hexdigest())
