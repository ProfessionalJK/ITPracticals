#include<stdio.h>
#include<conio.h>
int largest(int a[],int n);
void radix_sort(int a[],int n);
int main()
{
	int a[10],i,j,n,k;
	printf("Enter how many elements\n");
	scanf("%d",&n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	radix_sort(a,n);
	printf("The sorted array is\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	getch();
}
int largest(int a[],int n)
{
	int l=a[0],i;
	for(i=1;i<n;i++)
	{
		if(a[i]>l)
			l=a[i];
	}
	return l;
}
void radix_sort(int a[],int n)
{
	int bucket[10][10],bucket_count[10];
	int i,j,k,r,nop=0,d=1,l,p;
	l=largest(a,n);
	while(l>0)
	{
		nop++;
		l=l/10;
	}
	for(p=0;p<nop;p++)
	{
		for(i=0;i<10;i++)
			bucket_count[i]=0;
		for(i=0;i<n;i++)
		{
			r=(a[i]/d)%10;
			bucket[r][bucket_count[r]]=a[i];
			bucket_count[r]+=1;
		}
		i=0;
		for(k=0;k<10;k++)
		{
			for(j=0;j<bucket_count[k];j++)
			{
				a[i]=bucket[k][j];
				i++;
			}
		}
		d*=10;
	}
}
