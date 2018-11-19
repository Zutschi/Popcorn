package com.company;

import java.util.Currency;

public class currencyConverter {
    public void chooseCurrency(String Currency){

        switch (Currency) {
            case "Dollar":
                setCountry("Dollar");
                break;
            case "ISK":
                setCountry("Isländische Kronen");
                break;
            case "PLN":
                setCountry("Zloty");
                break;
            case "TRY":
                setCountry("Lira");
                break;
            case "GBP":
                setCountry("Pfund");
                break;
        }
    }

    ///

    public String country;

    public float euroToOther(float euro){
        float waehrung = 0;
        switch (country) {
            case "Dollar":
                return waehrung = euro * (float) 1.964;
            case "Isländische Kronen":
                return waehrung = euro * (float) 138.49;
            case "Zloty":
                return waehrung = euro * (float) 4.29;
            case "Lira":
                return waehrung = euro * (float) 6.19;
            case "Pfund":
                return waehrung = euro * (float) 0.87;
        }
        return waehrung;
    }

    public void setCountry(String country) {

        this.country = country;
    }

    private String getCountry() {
        return country;
    }
}
