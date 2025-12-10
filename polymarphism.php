<?php
// Base class: Device
class Device {
    protected $type;  // Protected property accessible in child classes
    public function __construct($type) {
        $this->type = $type;
    }
    // Base method to display device info
    public function info() {
        echo "This is a {$this->type} device.\n";
    }
}
// Child class: Laptop (inherits from Device)
class Laptop extends Device {
    // Overriding the info method
    public function info() {
        echo "This is a {$this->type} laptop, ideal for work and portability.\n";
    }
}
// Child class: Smartphone (inherits from Device)
class Smartphone extends Device {
    // Overriding the info method
    public function info() {
        echo "This is a {$this->type} smartphone, perfect for communication and apps.\n";
    }
}
// Usage example: Demonstrating inheritance and overriding
$devices = [
    new Laptop("Dell"),
    new Smartphone("iPhone"),
    new Device("Generic")  // Base class instance
];
foreach ($devices as $device) {
    $device->info();  // Each calls its own overridden or base info() method
}
?><?php
