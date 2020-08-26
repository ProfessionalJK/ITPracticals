#include<stdio.h>
#include<conio.h>
void insertion_sort(int a[],int n);
int main()
{
	int a[10],i,n;
	printf("Enter the number of elements\n");
	scanf("%d",&n);
	printf("Enter the elements to be sorted\n");
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	insertion_sort(a,n);
	printf("Sorted array is\n");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	getch();
	return 0;
}
void insertion_sort(int a[],int n)
{
	int i,j,t;
	for(i=1;i<n;i++)
	{
		t=a[i];
		j=i-1;
		while((t<a[j])&&(j>=0))
		{
			a[j+1]=a[j];
			j--;
		}
		a[j+1]=t;
	}
}
