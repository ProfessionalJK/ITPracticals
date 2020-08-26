#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,n,j,t;
	clrscr();
	printf("Enter the number of elements\n");
	scanf("%d",&n);
	printf("Enter the elements to be sorted\n");
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	for(i=1;i<n;i++)
	{
		for(j=0;j<n-i;j++)
		{
			if(a[j]>a[j+1])
			{
				t=a[j];
				a[j]=a[j+1];
				a[j+1]=t;
			}
		}
	}
	printf("Elements after sorted\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	getch();
}