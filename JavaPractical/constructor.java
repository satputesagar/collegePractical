package com.code;

public class constructor {
    int n;
  constructor(){
        //default constructor
        System.out.println("Default Constructor");
    }
   constructor(int x ,int y)
    {
//        parameter constructor
        System.out.println("Addition is "+(x+y));
    }
    constructor(int a)
    {
        n=a;
        System.out.println("Number is "+n);
        int flag;
        for(int i =1;i<=n;i++)
        {
            flag=0;
            for (int j=2;j<=i/2;j++){
                if(i % j == 0)
                {
                    flag++;
                    break;
                }
            }
            if(flag==0)
            {
                System.out.println("Prime is "+ i);
            }
        }
    }
    constructor(constructor cp,int a)
    {
        n=cp.n;// copy constructor
        int max;
        max=a>n?a:n;// if(a>n) print a else print n;
        System.out.println("Maximum number is "+max);
    }
    public static void  main(String arg[])
    {
        constructor cp1=new constructor(5,6);
        constructor cp2=new constructor(5);
        constructor cp3=new constructor(cp2,5);
    }
}
