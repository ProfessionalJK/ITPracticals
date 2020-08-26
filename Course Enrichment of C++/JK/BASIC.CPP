#include<iostream.h>
#include<conio.h>

class ClassName
{
	//Add the class members here
	public:
	void display();

};

void ClassName::display()
{
	cout<<"Welcome to C++ programming...";
}

//Define the member function here

void main()
{
	//Create the objects are required
	//Program execution starts here
	ClassName c;
	clrscr();
	c.display();
}