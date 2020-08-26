#include<stdio.h>
#include<conio.h>
void main()
{
	int i,a[10],n,l=0,h=0,m,num,f=1;
	clrscr();
	printf("Enter how many elements\n");
	scanf("%d",&n);
	printf("Enter sorted elements\n");
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	printf("Enter the element to search\n");
	scanf("%d",&num);
	h=n-1;
	for(m=(l+h)/2;l<=h;m=(l+h)/2)
	{
		if(a[m]==num)
		{
			printf("Element is found at %d\n",m);
			f=0;
			break;
		}
		if(a[m]>num)
			h=m-1;
		else
			l=m+1;
	}
	if(f)
		printf("Not Found\n");
	getch();
}