import Car.Car;
import Factory.CarFactory;


public class Main {

    public static void main(String[] args) {

        CarFactory carFactory = new CarFactory("YonYon Factory");
        Car myCar = carFactory.build("standardEditon");
        myCar.motorStart();

    }
}
