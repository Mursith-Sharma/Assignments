1. Create a user defined function to display a multiplication table for a given number and
input number should be greater 1.

//############################################################################################
#include<stdio.h>
int main()
{
    int a,z,i;
    char x='x',y='=';
    printf("....Basic multiplication table....\n\n");
    printf("Enter Your Table: ");
    scanf("%d",&a);
    if(a<=1)
    {
        printf("Number should be greater than 1\n");
        return 1;
    }
        ;
    for(i=0; i<15 ; i++)
    {
        z=i*a;
        printf("%d %c %d %c %d\n",i,x,a,y,z);
    }

}

2. Create a user defined function to Decompose a number into individual digits and
display them with their position value.

//############################################################################################
#include <stdio.h>

void decom(int num)
{
    int digit, position = 1;

    for (; num > 0; num /= 10, position *= 10)
    {
        digit = num % 10;
        printf("No. of %ds = %d\n", position, digit);
    }
}

int main()
{
    int number;

    printf("Enter a number to decompose: ");
    scanf("%d", &number);

    if (number <= 0)
    {
        printf("Please enter a positive number.\n");
        return 1;
    }

    decom(number);  // Call the function

    return 0;
}

 3. Create a user defined function to Find a reverse number for the given input number.
//############################################################################################
#include <stdio.h>

int re_nbr(int num) {
    int reverse = 0;

    for (; num > 0; num /= 10)
    {
        int digit = num % 10;
        reverse = reverse * 10 + digit;
    }

    return reverse;
}

int main() {
    int number;

    printf("Enter a number: ");
    scanf("%d", &number);

    if (number < 0)
    {
        printf("Please enter a positive number.\n");
        return 1;
    }

    int result = re_nbr(number);
    printf("Reversed number = %d\n", result);

    return 0;
}

4. Create a function to verify that whether the given input is a 'Reverse Square Reverse
Number'.
