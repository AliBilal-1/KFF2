<?php include_once 'includes/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Email Verification</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <!-- links -->
    <?php include_once 'includes/csslinks.php'; ?>
    <!-- links -->
    <style>
        /* Custom CSS for centering the verification message */
        .verification-message {
            position: absolute;
            top: 90%;
            left: 90%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        h2 {
            margin: 0;
            padding: 20px;
            font-size: 24px;
            color: #333;
        }
        p {
            margin: 10px 5px;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php include_once 'includes/nav.php'; ?>
    <!-- Navigation -->

<?php

if(isset($_GET['code'])) {
    $code = $_GET['code'];

    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE verification_code = ? AND is_verified = 0";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $code); // "s" indicates the type is a string
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // User found with the code and is not verified yet, so update their verification status
        $updateSql = "UPDATE users SET is_verified = 1 WHERE verification_code = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("s", $code);
        if($updateStmt->execute()) {
            echo "<h2>Your email has been verified successfully!</h2>";
            echo "<p>You will be redirected to the login page shortly.</p>";
            // Redirect to login.php after a short delay
            echo "<meta http-equiv='refresh' content='5;url=login.php'>";
        } else {
            echo "<h2>Failed to verify your email. Please try again.</h2>";
            
        }
    } else {
        
        echo "<h2>This verification code is invalid or your email is already verified.</h2>";
        
    }
} else {
    echo "<h2>No verification code provided.</h2>";
    
}

?>

    <!-- js links -->
    <?php include_once 'includes/jslinks.php'; ?>
    <!-- js links -->
</body>
</html>
