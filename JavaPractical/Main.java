package com.code;




class NewThread extends Thread
{
    NewThread(String threadname)
    {
        super(threadname);
    }
    public void run()
    {
        if( getName().equals("Odd")==true)
        {
            for(int i=1;i<=50;i=i+2)
            {
                System.out.print(" " + i);

                try
                {
                    Thread.sleep(1000);
                }
                catch(InterruptedException e)
                {
                    System.out.println("Exception Occurred.");
                }
            }
        }
        else

        {
            for(int i=2;i<=50;i=i+2)
            {
                System.out.print(" " + i);

                try
                {
                    Thread.sleep(1000);
                }
                catch(InterruptedException e)
                {
                    System.out.println("Exception Occurred.");
                }
            }
        }
    }
}
public class Main {

    public static void main(String[] args) {
	// write your code here
        NewThread t1 = new NewThread("Odd");
        NewThread t2 = new NewThread("Even");
        t1.start();
        t2.start();
    }
}
