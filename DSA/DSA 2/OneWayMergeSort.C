#include<stdio.h>
#include<conio.h>
void merge_sort(int a[],int l,int h);
void merge(int a[],int l,int m,int h);
int main()
{
	int a[100],i,n;
	printf("Enter no of elements\n");
	scanf("%d",&n);
	printf("Enter the elements\n");
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	merge_sort(a,0,n-1);
	printf("Sorted array\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	getch();
	return 0;
}
void merge_sort(int a[],int l,int h)
{
	int m;
	if(l<h)
	{
		m=(l+h)/2;
		merge_sort(a,l,m);
		merge_sort(a,m+1,h);
		merge(a,l,m,h);
	}
}
void merge(int a[],int l,int m,int h)
{
	int i=l,j=m+1,t=l,c[100],k;
	while((i<=m)&&(j<=h))
	{
		if(a[i]<a[j])
		{
			c[t]=a[i];
			i++;
		}
		else
		{
			c[t]=a[j];
			j++;
		}
		t++;
	}
	if(i>m)
	{
		while(j<=h)
		{
			c[t]=a[j];
			j++;
			t++;
		}
	}
	else
	{
		while(i<=m)
		{
			c[t]=a[i];
			i++;
			t++;
		}
	}
	for(k=l;k<t;k++)
		a[k]=c[k];
}
