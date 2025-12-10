<?php

// Abstract class: Cannot be instantiated directly
abstract class Payment
{
    protected $amount;  // Protected property accessible in subclasses

    // Constructor to set the payment amount
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    // Abstract method: Must be implemented by subclasses
    abstract public function process();

    // Concrete method: Can be used by subclasses or overridden
    public function getAmount()
    {
        return $this->amount;
    }
}

// Subclass: CreditCard implements the abstract method
class CreditCard extends Payment
{
    private $cardNumber;

    public function __construct($amount, $cardNumber)
    {
        parent::__construct($amount);  // Call parent constructor
        $this->cardNumber = $cardNumber;
    }

    // Implementing the abstract method
    public function process()
    {
        echo "Processing credit card payment of \${$this->amount} using card ending in " . substr($this->cardNumber, -4) . ".\n";
        // Simulate processing logic (e.g., API call)
        echo "Credit card payment successful!\n";
    }
}

// Subclass: PayPal implements the abstract method
class PayPal extends Payment
{
    private $email;

    public function __construct($amount, $email)
    {
        parent::__construct($amount);
        $this->email = $email;
    }

    // Implementing the abstract method
    public function process()
    {
        echo "Processing PayPal payment of \${$this->amount} for account {$this->email}.\n";
        // Simulate processing logic (e.g., redirect to PayPal)
        echo "PayPal payment successful!\n";
    }
}

// Usage: Demonstrating polymorphism and abstraction
$payments = [
    new CreditCard(1000.50, "1234567890123456"),
    new PayPal(75.00, "user@example.com")
];

foreach ($payments as $payment) {
    $payment->process();  // Each subclass handles processing differently
}


