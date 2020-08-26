#include<stdio.h>
#include<conio.h>
void quick_sort(int a[],int l,int r);
int split(int a[],int l,int r);
int main()
{
	int a[10],i,j,n,t;
	printf("Enter how many elements\n");
	scanf("%d",&n);
	printf("Enter the elements\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&a[i]);
	}
	quick_sort(a,0,n-1);
	for(i=0;i<n;i++)
	{
		printf("%d\t",a[i]);
	}
	getch();
	return 0;
}
void quick_sort(int a[],int l,int r)
{
	int i;
	if(r>l)
	{
		i=split(a,l,r);
		quick_sort(a,l,i-1);
		quick_sort(a,i+1,r);
	}
}
int split(int a[],int l,int r)
{
	int i,p,q,t;
	p=l+1;
	q=r;
	i=a[l];
	while(q>=p)
	{
		while((a[p]<i)&&(q>=p))
			p++;
		while((a[q]>i)&&(q>=p))
			q--;
		if(q>p)
		{
			t=a[p];
			a[p]=a[q];
			a[q]=t;
		}
	}
	t=a[l];
	a[l]=a[q];
	a[q]=t;
	return q;
}
