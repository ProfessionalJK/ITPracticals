#include<conio.h>
#include<iostream.h>

class Complex
{
	int real,img;
	public:
	void input();
	void display();
	Complex operator+(Complex x);

};
Complex Complex::operator+(Complex x)
{
	Complex r;
	r.real=this->real+x.real;
	r.img=this->img+x.img;
	return(r);
}
void Complex::input()
{
	cout<<"Input real value"<<endl;
	cin>>real;
	cout<<"Input img value"<<endl;
	cin>>img;
}
void Complex::display()
{
	cout<<"Real value= "<<real<<endl;
	cout<<"Img value= "<<img<<endl;

}

void main()
{
	Complex n1,n2;
	Complex res;
	clrscr();
	n1.input();
	n2.input();
	res=n1+n2; //n1.operator+(n2)
	res.display();
	getch();
}