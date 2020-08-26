#include<stdio.h>
#include<conio.h>
void main()
{
	int n,num,i,f=0,a[10];
	clrscr();
	printf("Entre how many elements\n");
	scanf("%d",&n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	printf("Enter the elements to serach\n");
	scanf("%d",&num);
	for(i=0;i<n;i++)
	{
		if(a[i]==num)
		{
			f=1;
			break;
		}
	}
	if(f==1)
	{
		printf("Element is found at %d position",i);
	}
	else
	{
		printf("Element is not found");
	}
	getch();
}