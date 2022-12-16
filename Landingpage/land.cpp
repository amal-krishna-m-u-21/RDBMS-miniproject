#include<iostream>
//this is a program to check whether a number is palindrome or not
using namespace std;
int main()
{
int n,rev=0,rem,temp;
cout<<"Enter a number:";
cin>>n;
temp=n;
while(n!=0)
{
rem=n%10;
rev=rev*10+rem;
n=n/10;
}
if(temp==rev)
cout<<"The number is a palindrome";
else
cout<<"The number is not a palindrome";
return 0;
}
