#include<conio.h>
#include<iostream.h>
class Base
{
	int x;
	protected:
	int y;
	public:
	void func();
	virtual void fun();
};
class Derived: public Base
{
	public:
	void fun();
};
void Base::fun()
{
	cout<<"This is fun() from Base class"<<endl;
}
void Base::func()
{
	cout<<"This is func() from Base calss"<<endl;
}
void Derived::fun()
{
	cout<<"This is fun() from Derived class"<<endl;
}
void main()
{
	Base *ptr;
	Base b;
	Derived d;
	clrscr();
	clrscr();
	ptr=&b;
	ptr->func();
	ptr->fun();
	ptr=&d;
	ptr->func();
	ptr->fun();
	getch();
}