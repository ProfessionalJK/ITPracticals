#include<stdio.h>
#include<conio.h>
#define size 3
int top=-1;
void push(int stk[],int val);
int pop(int stk[]);
void display(int stk[]);
int peak(int stk[]);
void main()
{
	int stack[10],value,ch,i;
	clrscr();
	do
	{
		printf("\n*********************Main Menu**********************\n");
		printf("1-Push\n2-Pop\n3-Display\n4-Peep\n***************************************\n");
		printf("Enter your choice\n");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
				printf("Enter the number to be pushed to stack\n");
				scanf("%d",&value);
				push(stack,value);
				break;
			case 2:
				value=pop(stack);
				printf("Delete item=%d\n",value);
				break;
			case 3:
				display(stack);
				break;
			case 4:
				value=peak(stack);
				printf("Value at the top of stack= %d",value);
				break;
			default:
				printf("Invalid Choice");
		}
	}while(ch<=4&&ch>=1);
	getch();
}
void push(int stk[],int val)
{
	if(top==size-1)
	{
		printf("Stack is full\n");
		return;
	}
	else
	{
		top++;
		stk[top]=val;
	}
}
int pop(int stk[])
{
	int val;
	if(top==-1)
	{
		printf("The stack is empty\n");
		return -1;
	}
	else
	{
		val=stk[top];
		top--;
		return val;
	}
}
void display(int stk[])
{
	int i;
	if(size==-1)
	{
		printf("Stack is empty\n");
		return;
	}
	else
	{
		for(i=top;i>=0;i--)
		{
			printf("%d\t",stk[i]);
		}
	}
}
int peak(int stk[])
{
	int i;
	if(top==-1)
	{
		printf("Stack is empty\n");
		return -1;
	}
	else
		return (stk[top]);
}