package com.company;


public class america {
    private static String country;

    public static float euroToDollar(float euro){
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

    public static void setCountry(String country) {
        america.country = country;
    }

    private static String getCountry() {
        return country;
    }
}
