<?php
class Employee {
    // Private properties: Not accessible directly from outside the class
    private $designation;
    private $salary;

    // Constructor to initialize the object
    public function __construct($designation, $salary) {
        $this->setDesignation($designation);  // Use setter for validation
        $this->setSalary($salary);
    }

    // Setter for designation
    public function setDesignation($designation) {
        if (!empty($designation)) {
            $this->designation = $designation;
        } else {
            echo "Error: Designation cannot be empty.\n";
        }
    }

    // Getter for designation
    public function getDesignation() {
        return $this->designation;
    }

    // Setter for salary with validation
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Error: Salary must be a positive number.\n";
        }
    }

    // Getter for salary
    public function getSalary() {
        return $this->salary;
    }

    // Optional method to display employee details
    public function displayDetails() {
        echo "Designation: {$this->designation}, Salary: {$this->salary}\n";
    }
}

// Usage example
$emp = new Employee("Software Engineer", 50000);
$emp->displayDetails();  // Output: Designation: Software Engineer, Salary: 50000

// Accessing via getters
echo "Designation: " . $emp->getDesignation() . "\n";  // Designation: Software Engineer
echo "Salary: " . $emp->getSalary() . "\n";           // Salary: 50000

// Modifying via setters
$emp->setDesignation("Senior Engineer");
$emp->setSalary(60000);
$emp->displayDetails();  // Output: Designation: Senior Engineer, Salary: 60000

// Attempting invalid input
$emp->setSalary(-100);  // Output: Error: Salary must be a positive number.
?>
