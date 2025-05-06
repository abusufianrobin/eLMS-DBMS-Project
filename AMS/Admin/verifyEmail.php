<?php
include '../Includes/dbcon.php';

if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    // Check if the token matches the email
    $query = mysqli_query($conn, "SELECT * FROM tblclassteacher WHERE emailAddress='$email' AND verificationToken='$token'");

    if (mysqli_num_rows($query) > 0) {
        // Token matched, update the teacher's verification status
        $updateQuery = mysqli_query($conn, "UPDATE tblclassteacher SET isVerified = 1 WHERE emailAddress='$email'");
        
        if ($updateQuery) {
            echo "Email verification successful!";
        } else {
            echo "An error occurred during verification.";
        }
    } else {
        echo "Invalid verification token.";
    }
} else {
    echo "Invalid request.";
}
?>
