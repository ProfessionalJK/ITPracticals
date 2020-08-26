#include<iostream.h>
#include<conio.h>

class Circle
{
	//Add the class members here
	float r,a;
	public:
	Circle();
	Circle(float rad);
	void input();
	void calculate();
	void display();
};
Circle::Circle()
{
	r=a=0.0;
}
Circle::Circle(float rad)
{
	r=rad;
	this->calculate();
}
void Circle::input()
{
	//ask the user to enter radius
	cout<<"Input the radius"<<endl;
	cin>>r;
}
void Circle::calculate()
{
	a=3.142*r*r;
}
void Circle::display()
{
	cout<<"Area="<<a<<endl;
}

//Define the member function here

void main()
{
	//Create the objects are required
	//Program execution starts here
	Circle c(1.0);
	clrscr();
	c.input();
       //	c.calculate();
	c.display();
	getch();
}