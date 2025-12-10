<?php

// Interface: Logger (defines a contract for logging)
interface Logger
{
    public function log($message);
}

// Class implementing Logger: FileLogger
class FileLogger implements Logger
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    // Implementing the log method
    public function log($message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "[$timestamp] $message\n";
        file_put_contents($this->filePath, $logEntry, FILE_APPEND);
        echo "Logged to file: $logEntry";
    }
}

// Class implementing Logger: DatabaseLogger
class DatabaseLogger implements Logger
{
    private $dbConnection;  // Simulating a database connection

    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;  // In a real app, this would be a PDO or mysqli object
    }

    // Implementing the log method
    public function log($message)
    {
        $timestamp = date('Y-m-d H:i:s');
        // Simulate inserting into a database (in a real app, use prepared statements)
        $query = "INSERT INTO logs (timestamp, message) VALUES ('$timestamp', '$message')";
        // Here, you'd execute the query: $this->dbConnection->query($query);
        echo "Logged to database: [$timestamp] $message\n";
        // For demo, just echo (replace with actual DB logic)
    }
}

// Usage example: Demonstrating polymorphism with interfaces
$loggers = [
    new FileLogger('log.txt'),
    new DatabaseLogger('fake_db_connection')  // In reality, pass a real DB object
];

$message = "User logged in";
foreach ($loggers as $logger) {
    $logger->log($message);  // Each logger handles logging differently
}

