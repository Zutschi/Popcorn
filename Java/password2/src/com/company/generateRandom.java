package com.company;

import java.nio.charset.Charset;
import java.util.Random;

public class generateRandom {
    public generateRandom(){
        byte[] array = new byte[8];
        new Random().nextBytes(array);
        String generatedChain = new String(array, Charset.forName("UTF-8"));

        System.out.println(generatedChain);
    }
}
