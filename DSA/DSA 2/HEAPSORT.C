#include<stdio.h>
#include<conio.h>
void makeheap(int a[],int n);
void heapsort(int a[],int n);
int main()
{
	int a[10],n,i;
	printf("Enter how many elements\n");
	scanf("%d",&n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	makeheap(a,n);
	printf("Before sorting\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	heapsort(a,n);
	printf("\nAfter sorting\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);*/
	getch();
	return 0;
}
void makeheap(int a[],int n)
{
	int i,val,f;
	for(i=0;i<n-1;i++)
	{
		val=a[i];
		f=(i-1)/2;
		while(i>0&&a[f]<val)
		{
			a[i]=a[f];
			i=f;
			f=(i-1)/2;
		}
		a[i]=val;
	}
}
void heapsort(int a[],int n)
{
	int i,s,f,ivalue;
	for(i=n-1;i>0;i--)
	{
		ivalue=a[i];
		a[i]=a[0];
		f=0;
		if(i==1)
			s=-1;
		else
			s=1;
		if(i>2&&a[2]>a[1])
			s=2;
		while((s>=0)&&(ivalue<a[s]))
		{
			a[f]=a[s];
			f=s;
			s=2*f+1;
			if((s+1<=(i-1))&&(a[s]<a[s+1]))
				s++;
			if(s>(i-1))
				s=-1;
		}
		a[f]=ivalue;
	}
}
