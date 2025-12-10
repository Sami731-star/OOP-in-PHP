
<?php
?php
// Base class: Vehicle
class Vehicle {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Base method to start the vehicle
    public function start() {
        echo "The vehicle {$this->name} is starting with a generic engine sound.\n";
    }
}

// Derived class: Car (inherits from Vehicle)
class Car extends Vehicle {
    // Overriding the start method
    public function start() {
        echo "The car {$this->name} is starting with a roar of the engine!\n";
    }
}

// Derived class: Bike (inherits from Vehicle)
class Bike extends Vehicle {
    // Overriding the start method
    public function start() {
        echo "The bike {$this->name} is starting with a vroom of the motor!\n";
    }
}

// Usage example: Demonstrating polymorphism
$vehicles = [
    new Car("Toyota Camry"),
    new Bike("Honda CBR"),
    new Vehicle("Generic Truck")  // Base class instance
];

foreach ($vehicles as $vehicle) {
    $vehicle->start();  // Each calls its own overridden or base start() method
}
?>
<?php
