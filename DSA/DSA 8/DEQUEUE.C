#include<stdio.h>
#include<conio.h>
#define size 10
int dequeue[size];
int left=-1,right=-1;
void input_dequeue();
void output_dequeue();
void insert_right();
void insert_left();
void delete_left();
void delete_right();
void display();
int main()
{
	int option;
//	clrscr();
	printf("Enter your choice\n1.Input-restricted array\t2.Output-restricted array\n");
	scanf("%d",&option);
	switch(option)
	{
		case 1:
			input_dequeue();
			break;
		case 2:
			output_dequeue();
			break;
		default:
			printf("INVALID CHOICE");
	}
	getch();
	return 0;
}
void input_dequeue()
{
	int option;
	do{
		printf("\n1.Insert at right\n2.Delete from right\n3.Delete from left\n4.Dispaly\n5.Exit\nEnter your option\n");
		scanf("%d",&option);
		switch(option)
		{
			case 1:
				insert_right();
				break;
			case 2:
				delete_right();
				break;
			case 3:
				delete_left();
				break;
			case 4:
				display();
				break;
		}
	}while(option!=5);
}
void output_dequeue()
{
	int option;
	do{
		printf("\n1.Insert at right\n2.Insert at left\n3.Delete from left\n4.Dispaly\n5.Exit\nEnter your option\n");
		scanf("%d",&option);
		switch(option)
		{
			case 1:
				insert_right();
				break;
			case 2:
				insert_left();
				break;
			case 3:
				delete_left();
				break;
			case 4:
				display();
				break;
		}
	}while(option!=5);
}
void insert_right()
{
	int val;
	printf("Enter the value to be added\n");
	scanf("%d",&val);
	if((left==0 && right==size-1)||(left==right+1));
	{
		printf("Dequeue is overflow\n");
		return;
	}
	if(left==-1)
	{
		left=0;
		right=0;
	}
	else
	{
		if(right==size-1)
			right=0;
		else
			left=0;
	}
	dequeue[right]=val;
}
void insert_left()
{
	int val;
	printf("Enter the value to be added\n");
	scanf("%d",&val);
	if((left==0&&right==size-1)||(left==right+1));
	{
		printf("Dequeue is overflow\n");
		return;
	}
	if(left==-1)
	{
		left=0;
		right=0;
	}
	else if(left==0)
		left=size-1;
	else
		left=left-1;
	dequeue[left]=val;
}
void delete_left()
{
	if(left==-1);
	{
		printf("Dequeue is underflow\n");
		return;
	}
	printf("The deleted item is %d\n",dequeue[left]);
	if(left==right)
	{
		left=-1;
		right=-1;
	}
	else
	{
		if(left==size-1)
			left=0;
		else
			left=left+1;
	}
}
void delete_right()
{
	if(left==-1);
	{
		printf("Dequeue is underflow\n");
		return;
	}
	printf("The deleted item is %d\n",dequeue[right]);
	if(left==right)
	{
		left=-1;
		right=-1;
	}
	else
	{
		if(right==0)
			right=size-1;
		else
			right=right-1;
	}
}
void display()
{
	int front=left,rear=right;
	if(left==-1)
	{
		printf("Queue is empty\n");
		return;
	}
	printf("The element of the queue are\n");
	if(front<=rear)
	{
		while(front<=rear)
		{
			printf("%d\t",dequeue[front]);
			front++;
		}
	}
	else
	{
		while(front<=size-1)
		{
			printf("%d\t",dequeue[front]);
			front++;
		}
		front=0;
		while(front<=rear)
		{
			printf("%d\t",dequeue[front]);
			front++;
		}
	}
	printf("\n");
}
