<?php
require_once 'db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $date = date("jS F Y"); 

    
    $name = $conn->real_escape_string($_POST['visitor_name']);
    $email = $conn->real_escape_string($_POST['visitor_email']);
    $suggestion = $conn->real_escape_string($_POST['suggestion_text']);
    $job = $conn->real_escape_string($_POST['job_opportunity']);

    
    $sql = "INSERT INTO suggestions (visitor_name, visit_date, visitor_email, suggestion_text, job_opportunity)
            VALUES ('$name', '$date', '$email', '$suggestion', '$job')";

    if ($conn->query($sql) === TRUE) {
        // Javascript popup for success
        echo "<script>
                alert('Success! Your suggestion for $date has been saved.');
                window.location.href = 'suggestions.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// 4. Close Connection
$conn->close();
?>
