package com.company;

import java.util.Currency;

public class chooseCurrency {
    public static void Currency(String Currency){
        america usa = new america();
        switch (Currency) {
            case "Dollar":
                usa.setCountry("Dollar");
            case "ISK":
                usa.setCountry("Isländische Kronen");
            case "PLN":
                usa.setCountry("Zloty");
            case "TRY":
                usa.setCountry("Lira");
            case "GBP":
                usa.setCountry("Pfund");
        }
    }
}
