#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,j,n,f=1,gs,t;
	clrscr();
	printf("Enter n\n");
	scanf("%d",&n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	gs=n;
	while(f==1||gs>1)
	{
		f=0;
		gs=(gs+1)/2;
		for(i=0;i<(n-gs);i++)
		{
			if(a[i+gs]<a[i])
			{
				t=a[i+gs];
				a[i+gs]=a[i];
				a[i]=t;
			}
		}
	}
	printf("sorted array\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	getch();
}