package Car;

public class Car implements CarInterface {

    private String name;
    private String buildYear;
    private double tankCapacity;
    private double power;
    private int maxSpeed;
    private double length;

    public Car(String name, String buildYear, double tankCapacity, double power, int maxSpeed, double length) {
        this.name = name;
        this.buildYear = buildYear;
        this.tankCapacity = tankCapacity;
        this.power = power;
        this.maxSpeed = maxSpeed;
        this.length = length;
    }

    private void drive() {
        System.out.println("Wrum!!");
    }

    @Override
    public void motorStart() {
        drive();
    }


    public String getName() {
        return name;
    }
}
