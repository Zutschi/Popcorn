package Car;

public class CarModal extends Car {



    private boolean navigationSystem = false;
    private boolean extendetRadioSystem = false;
    private boolean defaultRadioSystem = false;
    private boolean parkingSensors = false;
    private boolean wife = false;
    private boolean heatedSeats = false;
    private boolean airConditioningSystem = false;
    private boolean electricWindows = false;
    private boolean powerSteering = false;
    private boolean centralLocking = false;
    private boolean esp = false;

    public CarModal(String name, String buildYear, double tankCapacity, double power, int maxSpeed, double length) {
        super(name, buildYear, tankCapacity, power, maxSpeed, length);
    }

    public void setNavigationSystem(boolean navigationSystem) {
        this.navigationSystem = navigationSystem;
    }

    public void setExtendetRadioSystem(boolean extendetRadioSystem) {
        this.extendetRadioSystem = extendetRadioSystem;
        this.defaultRadioSystem = false;
    }

    public void setDefaultRadioSystem(boolean defaultRadioSystem) {
        this.defaultRadioSystem = defaultRadioSystem;
    }

    public void setParkingSensors(boolean parkingSensors) {
        this.parkingSensors = parkingSensors;
    }

    public void setWife(boolean wife) {
        this.wife = wife;
    }

    public void setHeatedSeats(boolean heatedSeats) {
        this.heatedSeats = heatedSeats;
    }

    public void setAirConditioningSystem(boolean airConditioningSystem) {
        this.airConditioningSystem = airConditioningSystem;
    }

    public void setElectricWindows(boolean electricWindows) {
        this.electricWindows = electricWindows;
    }

    public void setPowerSteering(boolean powerSteering) {
        this.powerSteering = powerSteering;
    }

    public void setCentralLocking(boolean centralLocking) {
        this.centralLocking = centralLocking;
    }

    public void setEsp(boolean esp) {
        this.esp = esp;
    }
}
