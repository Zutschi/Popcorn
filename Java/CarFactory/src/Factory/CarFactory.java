package Factory;

import Car.*;



public class CarFactory implements FactoryInterface{

    private String name;

    public CarFactory(String name) {
        this.name = name;
    }

    @Override
    public Car build(String assignment) {
        CarModal newCar = buildStandardParts("YonYon001");;
        switch (assignment) {
            case "standardEditon":
                buildStandardEditionParts(newCar);
                break;
            case "extendetEditon":
                buildExtendetEditonParts(newCar);
                break;
            case "deluxeEdition":
                buildDeluxeEditonParts(newCar);
                break;
             default:
                 System.out.println("This Edition don't exsists!");
                 break;
        }
        return newCar;
    }

    private CarModal buildStandardParts(String carName)
    {
        CarModal car = new CarModal(carName,this.createBuildYear(),55,115,210,4.30);
        return car;
    }
    private CarModal buildStandardEditionParts(CarModal car){
            car.setDefaultRadioSystem(true);
            car.setAirConditioningSystem(true);
            car.setPowerSteering(true);
            car.setEsp(true);
            car.setElectricWindows(true);
            car.setCentralLocking(true);
        return car;
    }

    private CarModal buildExtendetEditonParts(CarModal car){
        buildStandardEditionParts(car);
        car.setNavigationSystem(true);
        car.setExtendetRadioSystem(true);
        car.setParkingSensors(true);
        return car;
    }

    private CarModal buildDeluxeEditonParts(CarModal car){
        buildExtendetEditonParts(car);
        car.setHeatedSeats(true);
        car.setWife(true);

        return car;
    }


}
