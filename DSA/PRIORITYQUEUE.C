#include<stdio.h>
#include<conio.h>
#define size 10
int front=-1,rear=-1,pqueue[size];
void insert(int n);
void delete(int n);
void check(int n);
void display();
void main()
{
	int n, ch;
	clrscr();
	do
	{
		printf("1.Insert\n2.Delete\n3.Display\n4.Exit\nEnter your choice\n");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				printf("Enter the value to be inserted\n");
				scanf("%d",&n);
				insert(n);
				break;
			case 2:
				printf("Enter the value to be deleted\n");
				scanf("%d",&n);
				delete(n);
				break;
			case 3:
				display();
				break;
			default:
				printf("Thankyou\n");
		}
	}while(ch!=4);
	getch();
}
void insert(int n)
{
	if(rear>=size-1)
	{
		printf("Queue is overflow\n");
		return;
	}
	if((front==-1)&&(rear==-1))
	{
		front++;
		rear++;
		pqueue[rear]=n;
		return;
	}
	else
		check(n);
	rear++;
}
void check(int n)
{
	int i,j;
	for(i=0;i<=rear;i++)
	{
		if(n>=pqueue[i])
		{
			for(j=rear+1;j>i;j--)
				pqueue[j]=pqueue[j-1];
			pqueue[i]=n;
			return;
		}
	}
	pqueue[i]=n;
}
void delete(int n)
{
	int i;
	if((front==-1)&&(rear==-1))
	{
		printf("Queue is empty\n");
		return;
	}
	for(i=0;i<=rear;i++)
	{
		if(n==pqueue[i])
		{
			for(;i<rear;i++)
				pqueue[i]=pqueue[i+1];
			pqueue[i]=-99;
			rear--;
			if(rear==-1)
				front=-1;
			return;
		}
	}
	printf("%d not found in queue to delete\n",n);
}
void display()
{
	if((front==-1)&&(rear==-1))
	{
		printf("Queue is empty\n");
		return;
	}
	for(;front<=rear;front++)
		printf("%d\t",pqueue[front]);
	printf("\n");
	front=0;
}