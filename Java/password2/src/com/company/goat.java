package com.company;

public class goat {
    public String umrechnung(int euro){
        switch(euro){
            case 500:
                return "1 Bronze Credit";
            case 650:
                return "1 Silber Credit";
            case 1450:
                return "1 Gold Credit";
        }
    return null;
    }
}
