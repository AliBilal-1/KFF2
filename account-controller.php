<?php 

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include_once 'includes/conn.php';


if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $login_id = $_POST['login_id'];
    $pw = $_POST['pw'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    
    // Check if user exists
    $sql = "SELECT * FROM users WHERE login_id='$login_id' OR email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
    {
        echo "<div class='alert alert-warning'><strong>Error !!</strong> User with given ID or Email already exists.</div>";
        exit();
    }
    else
    {
        // Generate unique verification code
        $verificationCode = bin2hex(random_bytes(16)); // Generates a 32-character hex string
        $pw = md5($pw); // Encrypt password
        
        // Insert user with verification code
        $sql = "INSERT INTO users (name, login_id, pw, email, contact, address, verification_code, is_verified) VALUES ('$name', '$login_id', '$pw', '$email', '$contact', '$address', '$verificationCode', 0)";
        
        if($conn->query($sql) === TRUE)
        {
            // Send verification email
            $mail = new PHPMailer(true);
            try {
               
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'cs619testemail@gmail.com';
                $mail->Password = 'kxri wasz wopa ehrd';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                
                //Recipients
                $mail->setFrom('cs619testemail@gmail.com', 'Mailer');
                $mail->addAddress($email, $name);
                
                // Content
                $verificationLink = "http://localhost/BC190406300-3/verify.php?code=$verificationCode";


                $mail->isHTML(true);
                $mail->Subject = 'Email Verification';
                $mail->Body = "Thank you for registration. Please click on the following link to verify your email: <a href='$verificationLink'>$verificationLink</a>";
                $mail->AltBody = "Please click on the following link to verify your email: $verificationLink";
                
                $mail->send();
                echo "<div class='alert alert-success'>Registration successful! Please check your email to verify your account.</div>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        else
        {
            echo "<div class='alert alert-danger'><strong>Error !</strong> Error in inserting record.</div>";
            echo("Error description: " . mysqli_error($conn));
        }
    }
}



// login
  if(isset($_POST['login']))
  {
    $login_id=$_POST['login_id'];
    $pw=$_POST['password'];
    $pw=md5($pw);

    $sql="SELECT * FROM users WHERE login_id='$login_id' AND pw='$pw' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {

      $row = $result->fetch_assoc();

      if($row['is_verified'] == 1) {
      	$_SESSION['SESS_UID']=$row['user_id'];
      	$_SESSION['SESS_NAME']=$row['name'];

      	$uType="User";  
      	$_SESSION['SESS_UTYPE']=$uType;

      	echo "<div class='alert alert-success border-success'> <strong>Success ! </strong>You've Logged in Successfully. ...Redirecting...!</div>".
        "<script>setTimeout(function(){ window.location.href='index.php'; }, 2000);</script>";    
        exit();
      }
      else{
      	echo "<div class='alert alert-danger'> <strong>Error ! </strong> Check your email we sent you a verification link. please verify to login.</div>";
      	exit();
      }
      
    }
    else
    {
      echo "<div class='alert alert-danger'> <strong>Error ! </strong> Invalid User ID / Password.</div>";
    }
  }

?>