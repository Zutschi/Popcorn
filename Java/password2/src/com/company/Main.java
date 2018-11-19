package com.company;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        currencyConverter change = new currencyConverter();
        System.out.println("Which currency do you want to set? (Dollar, ISK, PLN, TRY, GBP)");

        //Set Country
        Scanner input = new Scanner(System.in);
        String country = input.next();
        change.chooseCurrency(country);

        //Set amout in €
        System.out.println("How much?");
        float amout = input.nextFloat();
        System.out.println(change.euroToOther(amout));
        input.close();

    }
}
