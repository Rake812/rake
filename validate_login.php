<?php
$servername = "localhost"; // Replace with your server details if different
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['course']) && isset($_POST['batch']) && isset($_POST['password'])) {
        $course = $conn->real_escape_string($_POST['course']);
        $batch = $conn->real_escape_string($_POST['batch']);
        $password_input = $conn->real_escape_string($_POST['password']);

        // Prepare and bind
        $stmt = $conn->prepare("SELECT * FROM users WHERE course = ? AND batch = ? AND password = ?");
        $stmt->bind_param("sss", $course, $batch, $password_input);

        // Execute the query
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Determine the redirect page based on the course and batch
            if ($course === 'cp09') {
                if ($batch === 'a') {
                    header('Location: FeedbackForm1.php');
                } elseif ($batch === 'b') {
                    header('Location: next_page2.php');
                }
            } elseif ($course === 'cp08') {
                if ($batch === 'a') {
                    header('Location: next_page3.php');
                } elseif ($batch === 'b') {
                    header('Location: next_page4.php');
                } elseif ($batch === 'c') {
                    header('Location: next_page5.php');
                }
            } elseif ($course === 'cp01' && $batch === 'a') {
                header('Location: next_page6.php');
            } else {
                header('Location: Feedback.php?error=1');
            }
            exit();
        } else {
            // Redirect back to the login page with an error parameter
            header('Location: Feedback.php?error=1');
            exit();
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

$conn->close();
?>
