package Factory;

import Car.Car;

import java.util.Date;
import java.text.*;

public interface FactoryInterface {

    public Car build(String assignment);

    default String createBuildYear(){
        Date date = new Date();
        DateFormat dateFormat = new SimpleDateFormat("yyyy");
        return dateFormat.format(date);
    }
}
