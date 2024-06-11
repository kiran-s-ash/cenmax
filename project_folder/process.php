<?php
require_once '../vendor/autoload.php'; // Include Medoo library

// Initialize Medoo
use Medoo\Medoo;

try {
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'cenmax_garage',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'password'
    ]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $e->getMessage()]);
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $branch_id = $_POST['branch_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $role = $_POST['role'];
    $emergency_contacts = $_POST['emergency_contacts'];

    try {
        // Insert data into the employees table
        $database->insert('employees_1', [
            'branch_id' => $branch_id,
            'first_name' => $first_name,
            'middle_name' => $middle_name,
            'last_name' => $last_name,
            'mobile_number' => $mobile_number,
            'email' => $email,
            'password' => $password,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'role' => $role,
            'emergency_contacts' => $emergency_contacts
        ]);

        if ($database->id()) {
            echo json_encode(['status' => 'success', 'message' => 'Employee added successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add employee.']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Insert failed: ' . $e->getMessage()]);
    }
}
?>
