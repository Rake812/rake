<?php
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "feedback_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting input data
    $parameter = ["Ability of the faculty to transfer knowledge", "Presentation by the faculty", "Mannerism of the faculty", "Ability to clarify the doubts", "Treats all the students without partiality & respect", "Ability to enhance students learning", "Knows a variety of effective teaching & assessment practices", "Punctuality of the faculty", "Maintain the discipline in the classroom", "Encourages in extracurricular activities"];
    
    foreach ($parameter as $index => $param) {
        // Collect responses
        $english = intval($_POST["{$index}_english"]);
        $mathematics = intval($_POST["{$index}_mathematics"]);
        $applied_science = intval($_POST["{$index}_applied_science"]);
        $electronics_i = intval($_POST["{$index}_electronics_i"]);
        $electrical_engineering = intval($_POST["{$index}_electrical_engineering"]);
        $applied_science_lab = intval($_POST["{$index}_applied_science_lab"]);
        $electronics_lab = intval($_POST["{$index}_electronics_lab"]);
        $electrical_lab = intval($_POST["{$index}_electrical_lab"]);
        $engineering_drawing = intval($_POST["{$index}_engineering_drawing"]);
        $professional_practice = intval($_POST["{$index}_professional_practice"]);
        $workshop = intval($_POST["{$index}_workshop"]);
        $computer_lab = intval($_POST["{$index}_computer_lab"]);
        $communication_skills = intval($_POST["{$index}_communication_skills"]);

        // Check if feedback already exists
        $stmt = $conn->prepare("SELECT * FROM feedback WHERE parameter = ?");
        $stmt->bind_param("s", $param);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Feedback exists, update the record
            $row = $result->fetch_assoc();
            $new_english = $row['english'] + $english;
            $new_mathematics = $row['mathematics'] + $mathematics;
            $new_applied_science = $row['applied_science'] + $applied_science;
            $new_electronics_i = $row['electronics_i'] + $electronics_i;
            $new_electrical_engineering = $row['electrical_engineering'] + $electrical_engineering;
            $new_applied_science_lab = $row['applied_science_lab'] + $applied_science_lab;
            $new_electronics_lab = $row['electronics_lab'] + $electronics_lab;
            $new_electrical_lab = $row['electrical_lab'] + $electrical_lab;
            $new_engineering_drawing = $row['engineering_drawing'] + $engineering_drawing;
            $new_professional_practice = $row['professional_practice'] + $professional_practice;
            $new_workshop = $row['workshop'] + $workshop;
            $new_computer_lab = $row['computer_lab'] + $computer_lab;
            $new_communication_skills = $row['communication_skills'] + $communication_skills;

            // Update the existing record
            $update_stmt = $conn->prepare("UPDATE feedback SET english = ?, mathematics = ?, applied_science = ?, electronics_i = ?, electrical_engineering = ?, applied_science_lab = ?, electronics_lab = ?, electrical_lab = ?, engineering_drawing = ?, professional_practice = ?, workshop = ?, computer_lab = ?, communication_skills = ? WHERE parameter = ?");
            $update_stmt->bind_param("iiiiiiiiiiiiis", $new_english, $new_mathematics, $new_applied_science, $new_electronics_i, $new_electrical_engineering, $new_applied_science_lab, $new_electronics_lab, $new_electrical_lab, $new_engineering_drawing, $new_professional_practice, $new_workshop, $new_computer_lab, $new_communication_skills, $param);
            $update_stmt->execute();
            $update_stmt->close();
        } else {
            // Insert new feedback
            $insert_stmt = $conn->prepare("INSERT INTO feedback (parameter, english, mathematics, applied_science, electronics_i, electrical_engineering, applied_science_lab, electronics_lab, electrical_lab, engineering_drawing, professional_practice, workshop, computer_lab, communication_skills) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $insert_stmt->bind_param("siiiiiiiiiiiii", $param, $english, $mathematics, $applied_science, $electronics_i, $electrical_engineering, $applied_science_lab, $electronics_lab, $electrical_lab, $engineering_drawing, $professional_practice, $workshop, $computer_lab, $communication_skills);
            $insert_stmt->execute();
            $insert_stmt->close();
        }
        
        $stmt->close();
    }

    $conn->close();

    // Redirect or show a success message
    header("Location: thank_you.php"); // Redirect to a thank you page
    exit();
}
?>
