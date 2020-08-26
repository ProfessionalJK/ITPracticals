class Rect:
    def __init__(self,l=0,w=0):
        self.l=l
        self.w=w
    def __add__(self,j):
        return Rect(self.l+j.l,self.w+j.w)
    def __eq__(self,k):
        if(self.l==k.l and self.w==k.w):
            return True
        else:
            return False
    def setLength(self,l):
        self.l=l
    def setWidth(self,w):
        self.w=w
    def area(self):
        return (self.l*self.w)
    def perimeter(self):
        return (2*(self.l+self.w))
def mymessage():
    print("Message from mymodule")
