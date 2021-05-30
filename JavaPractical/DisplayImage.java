package com.code;
import java.awt.*;
import java.applet.Applet;
import java.awt.Graphics;

public class DisplayImage extends Applet {

    Image picture;

    public void init() {
        picture = getImage(getDocumentBase(),"Image.jpg");
    }

    public void paint(Graphics g) {
        g.drawImage(picture, 30,30, this);
    }

}
