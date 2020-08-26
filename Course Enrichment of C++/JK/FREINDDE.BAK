#include<conio.h>
#include<iostream.h>
class ClassTwo;	//forward referencing
class ClassOne
{
	int n;
	public:
	void input();
	void display();
	friend void copy(ClassOne* a,ClassTwo* b);
};
void ClassOne::input()
{
	cout<<"Input a value of n:"<<endl;
	cin>>n;
}
void ClassOne::display()
{
	cout<<"n="<<n<<endl;

}
class ClassTwo
{
	int m;
	public:
	void input();
	void display();
	friend void copy(ClassOne* a,ClassTwo* b);

};
void ClassTwo::input()
{
	cout<<"Input a value of m:"<<endl;
	cin>>m;
}
void ClassTwo::display()
{
	cout<<"m="<<m<<endl;

}
void copy(CalssOne* a,ClassTwo* b)
{
	a->n=b->m;
}

void main()
{
	ClassOne x;
	ClassTwo y;
	clrscr();
	y.input();
	copy(&x,&y);
	x.display();
	getch();
}