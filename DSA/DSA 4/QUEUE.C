#include<stdio.h>
#include<conio.h>
#define size 3
int front=-1,rear=-1;
void insert(int queue[],int val);
void delete(int queue[]);
void display(int queue[]);
int peak(int queue[]);
void main()
{
	int queue[size],value,ch,i;
	clrscr();
	do
	{
		printf("\n*********************Main Menu**********************\n");
		printf("1-Insert\n2-Delete\n3-Display\n4-Peak\n****************************************************\n");
		printf("Enter your choice\n");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				printf("Enter the number to be insert to queue\n");
				scanf("%d",&value);
				insert(queue,value);
				break;
			case 2:
				delete(queue);
				break;
			case 3:
				display(queue);
				break;
			case 4:
				value=peak(queue);
				printf("Value at the rear of queue= %d",value);
				break;
			default:
				printf("Invalid Choice");
		}
	}while(ch<=4&&ch>=1);
	getch();
}
void insert(int queue[],int val)
{
	if(rear==size-1)
	{
		printf("Queue is full\n");
		return;
	}
	else if(front==-1&&rear==-1)
	     {
		front=0;
		rear=0;
	     }
	     else
			rear++;
	queue[rear]=val;
}
void delete(int queue[])
{
	int val;
	if((front==-1)||(front>rear))
	{
		printf("The queue is empty\n");
	}
	else
	{
		val=queue[front];
		front++;
		printf("Deleted item=%d",val);
	}
}
void display(int queue[])
{
	int i;
	if((front==-1)||(front>rear))
	{
		printf("Queue is empty\n");
		return;
	}
	else
	{
		for(i=front;i<=rear;i++)
		{
			printf("%d\t",queue[i]);
		}
	}
}
int peak(int queue[])
{
	int i;
	if((front==-1)&&(rear==-1))
	{
		printf("Queue is empty\n");
		return -1;
	}
	else
		return (queue[rear]);
}