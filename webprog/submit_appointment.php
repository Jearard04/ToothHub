<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbdental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $preferred_date = $_POST['preferred-date'];
    $procedure = $_POST['procedure'];
    $medical_history = $_POST['medical-history'];

    // Validate input
    if (empty($first_name) || empty($last_name) || empty($contact) || empty($email) || empty($preferred_date) || empty($procedure)) {
        echo "All fields are required.";
    } else {
        // Insert data into Patient table
        $stmt = $conn->prepare("INSERT INTO Patient (FirstName, Surname, MedicalHistory) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $first_name, $last_name, $medical_history);
        $stmt->execute();
        $patient_id = $stmt->insert_id;
        $stmt->close();

        // Insert data into Contacts table
        $stmt = $conn->prepare("INSERT INTO Contacts (PatientID, PhoneNumber, Email) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $patient_id, $contact, $email);
        $stmt->execute();
        $stmt->close();

        // Insert data into Appointment table
        $stmt = $conn->prepare("INSERT INTO Appointment (PatientID, DateOfVisit, ReasonForVisit) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $patient_id, $preferred_date, $procedure);
        $stmt->execute();
        $stmt->close();

        // Display success message and redirect to booking.php
        echo "<script>
        alert('New appointment created successfully');
        window.location.href = 'booking.php';
        </script>";
    }
}

// Close the connection
$conn->close();
?>