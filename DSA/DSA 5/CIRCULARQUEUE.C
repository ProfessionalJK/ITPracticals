#include<stdio.h>
#include<conio.h>
#define MAX 10
int queue[MAX],front=-1,rear=-1;
void insert();
int delete_element();
int peek();
void display();
void main()
{
	int option,val;
	clrscr();
	do
	{
		printf("\n******MAIN MENU******\n");
		printf("1.Insert\n2.Delete\n3.Peek\n4.Display\n5.Exit\nEnter your option");
		scanf("%d",&option);
		switch(option)
		{
			case 1:
				insert();
				break;
			case 2:
				val=delete_element();
				if(val!=-1)
					printf("The number deleted is %d\n",val);
				break;
			case 3:
				val=peek();
				if(val!=-1)
					printf("The first element in queue is %d\n",val);
				break;
			case 4:
				display();
				break;
		}
	}while(option!=5);
	getch();
}
void insert()
{
	int n;
	printf("Enter the number to be inserted in the queue\n");
	scanf("%d",&n);
	if(front==0&&rear==MAX-1)
		printf("Overflow\n");
	else if(front==-1&&rear==-1)
	{
		front=rear=0;
		queue[rear]=n;
	}
	else if(rear==MAX-1&&front!=0)
	{
		rear=0;
		queue[rear]=n;
	}
	else
	{
		rear++;
		queue[rear]=n;
	}
}
int delete_element()
{
	int val;
	if(front==-1&&rear==-1)
	{
		printf("Underflow\n");
		return -1;
	}
	val=queue[front];
	if(front==rear)
		front=rear=-1;
	else
	{
		if(front==MAX-1)
			front=0;
		else
			front++;
	}
	return val;
}
int peek()
{
	if(front==-1&&rear==-1)
	{
		printf("Queue is Empty\n");
		return -1;
	}
	else
	{
		return queue[front];
	}
}
void display()
{
	int i;
	if(front==-1&&rear==-1)
		printf("Queue is Empty\n");
	else
	{
		if(front<rear)
		{
			for(i=front;i<=rear;i++)
				printf("%d\t",queue[i]);
		}
		else
		{
			for(i=front;i<MAX;i++)
				printf("%d\t",queue[i]);
			for(i=0;i<=rear;i++)
				printf("%d\t",queue[i]);
		}
	}
}