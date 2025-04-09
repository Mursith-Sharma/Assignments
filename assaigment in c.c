// watch programming 32 video
// #1
//generate even number s by using loob statment

#include<stdio.h>
int main()
{
    int a,i;
    printf("enter your number: ");
    scanf("%d",&a);
    for(i=0;i<=a;i=i+2)
        printf("%d\n",i);

}

// #2
// generate odd number s by using loob statment ########################################

#include<stdio.h>
int main()
{
    int a,i;
    printf("enter your number: ");
    scanf("%d",&a);
    for(i=1;i<=a;i=i+2)
        printf("%d\n",i);

}

// #3
// generate ascii code by using loob statment ########################################

#include<stdio.h>
int main ()
{
    int a[256],i;
    for(i=0;i<=256;i++)
    printf("decimal  %d =>    Ascii  %c =>      Hexadecimal  %p  =>    address %p \n",i,i,i,&a[i]);
}

// #4
// create half pyramid of numbers ########################################################

#include<stdio.h>
int main()
{
    int i,num;
    printf("pyramid limit :");
    scanf("%d",&num);

    for(i=0;i<=num;i++)
    {
        for(int j=1;j<=i;j++)
       {
           printf("%d",j);
       }
       printf("\n");
    }
}

// create half pyramid of numbers diffrent method ########################################

#include<stdio.h>
int main()
{
    int i,num;
    printf("pyramid limit :");
    scanf("%d",&num);

    for(i=0;i<=num;i++)
    {
        for(int j=1;j<=i;j++)
       {
           printf("%d",i);
       }
       printf("\n");
    }
}


// #4
// create half pyramid of alphabets ###########################################################

#include<stdio.h>
int main()
{
    int i;
    char num;
    printf("pyramid limit :");
    scanf("%c",&num);             // enter any english letter

    for(i='A';i<=num;i++)
    {
        for(int j='A';j<=i;j++)
       {
           printf("%c",i);
       }
       printf("\n");
    }
}

// #5
// create half pyramid of stars #################################################################

#include<stdio.h>
int main()
{
    int i,row;
    printf("pyramid limit :");
    scanf("%d",&row);             // enter any english letter

    for(i=1;i<=row;i++)
    {
        for(int j=1;j<=i;j++)
       {
           printf("*");
       }
       printf("\n");
    }
}

// #6
// create inverted half pyramid of stars ##########################################################

#include<stdio.h>
int main()
{
    int i,j,num;
    printf("enter the number of rows : \n");
    scanf("%d",&num);             // enter any english letter

    for(i=num;i>=1;i=i-1)
    {
        for(j=i;j>=1;j=j-1)
       {
           printf("*");
       }
       printf("\n");
    }
}

// #7
// inverted half pyramid of numbers ##################################################################

#include <stdio.h>
int main()
{
   int i, j, rows;
   printf("Enter the number of rows: ");
   scanf("%d", &rows);

   for (i = rows; i >= 1; --i)
    {
       for (j = 1; j <= i; ++j)
        {
             printf("%d ", j);
        }
        printf("\n");
    }
    return 0;
}

// #8
// Full Pyramid of stars ###############################################################################

#include <stdio.h>
int main()
{
    int i, space, rows, k = 0;
    printf("Enter the number of rows: ");
    scanf("%d", &rows);

    for (i = 1; i <= rows; ++i, k = 0)
        {
           for (space = 1; space <= rows - i; ++space)
           {
               printf(" ");
           }
         while (k != 2 * i - 1)
         {
            printf("*");
            ++k;
         }
        printf("\n");
        }
     return 0;
}

// #9
// Full Pyramid of numbers ###############################################################################

#include <stdio.h>
int main()
{
     int i, space, rows, k = 0, count = 0, count1 = 0;
     printf("Enter the number of rows: ");
     scanf("%d", &rows);

     for (i = 1; i <= rows; ++i)
        {
           for (space = 1; space <= rows - i; ++space)
           {
              printf("  ");
              ++count;
           }
           while (k != 2 * i - 1)
           {
                  if (count <= rows - 1)
                  {
                     printf("%d ", i + k);
                     ++count;
                  }
                  else
                  {
                     ++count1;
                     printf("%d ", (i + k - 2 * count1));
                  }
                     ++k;
           }
           count1 = count = k = 0;
           printf("\n");
        }
          return 0;
}

//#10
// Inverted full pyramid of stars ##########################################################################


#include <stdio.h>
int main()
{
     int rows, i, j, space;
     printf("Enter the number of rows: ");
     scanf("%d", &rows);

     for (i = rows; i >= 1; --i)
        {
            for (space = 0; space < rows - i; ++space)
            printf("  ");
            for (j = i; j <= 2 * i - 1; ++j)
            printf("* ");
            for (j = 0; j < i - 1; ++j)
            printf("* ");
            printf("\n");
         }
      return 0;
}

//#11
// Pascal's Triangle ########################################################################################

#include <stdio.h>
int main()
{
     int rows, coef = 1, space, i, j;
     printf("Enter the number of rows: ");
     scanf("%d", &rows);

     for (i = 0; i < rows; i++)
        {
            for (space = 1; space <= rows - i; space++)
            printf("  ");
     for (j = 0; j <= i; j++)
     {
         if (j == 0 || i == 0)
         coef = 1;
         else
         coef = coef * (i - j + 1) / j;
         printf("%4d", coef);
     }
      printf("\n");
         }
      return 0;
}

//#12
// Floyd's Triangle ############################################################################################

#include <stdio.h>
int main()
{
    int rows, i, j, number = 1;
    printf("Enter the number of rows: ");
    scanf("%d", &rows);

    for (i = 1; i <= rows; i++)
        {
            for (j = 1; j <= i; ++j)
            {
                printf("%d ", number);
                ++number;
            }
            printf("\n");
         }
    return 0;
}
