package com.code;

import java.awt.*;

public class AWT {
    public AWT()
    {
        Frame f=new Frame();
        Button btn =new Button("hello Java world");
        btn.setBounds(80,80,100,50);
        f.add(btn); // ad new btn
        f.setSize(300,250);
        f.setTitle("World Java");
        f.setLayout(null);
        f.setVisible(true);
    }
    public static void main(String[] args)
    {
        AWT awt=new AWT();
    }
}
