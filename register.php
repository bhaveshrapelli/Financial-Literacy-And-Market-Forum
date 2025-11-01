<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\SMTP.php';
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\Exception.php';

include 'config/database.php';

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $password = trim($_POST['password']);
    $hashed_password = md5($password); // Consider using password_hash($password, PASSWORD_DEFAULT)

    // Input validation
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $error = "Name must contain only letters and spaces.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $error = "Mobile number must be exactly 10 digits.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters.";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            $error = "Email already registered.";
        } else {
            // Insert new admin
            $stmt = $conn->prepare("INSERT INTO users (name, email, mobile, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $mobile, $hashed_password);
            if ($stmt->execute()) {
                // Send confirmation email
                $mailer = new PHPMailer(true);
                $smtp_email = 'rampratapsahani209@gmail.com';
                $smtp_password = 'Rampratap@12#';

                try {
                    $mailer->isSMTP();
                    $mailer->Host = 'smtp.gmail.com';
                    $mailer->SMTPAuth = true;
                    $mailer->Username = $smtp_email;
                    $mailer->Password = $smtp_password;
                    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mailer->Port = 587;

                    $mailer->setFrom($smtp_email, 'Admin Panel');
                    $mailer->addAddress($email, $name);
                    $mailer->addReplyTo($smtp_email, 'Admin Support');

                    $mailer->isHTML(true);
                    $mailer->Subject = 'Registration Successful';
                    $mailer->Body = "<h3>Hello $name,</h3><p>Thank you for registering with us!</p>";

                    $mailer->send();

                    $_SESSION['success_msg'] = "Registration successful! Please check your email and login.";
                    header("Location: login.php");
                    exit();
                } catch (Exception $e) {
                    $error = "Registration successful, but email failed to send: " . $mailer->ErrorInfo;
                }
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">User Registration</h2>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form id="registerForm" action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="mobile">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>

            <p class="mt-3 text-center">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#registerForm").validate({
                rules: {
                    name: { required: true, minlength: 3 },
                    email: { required: true, email: true },
                    mobile: { required: true, digits: true, minlength: 10, maxlength: 10 },
                    password: { required: true, minlength: 6 }
                },
                messages: {
                    name: { required: "Enter your name", minlength: "At least 3 characters" },
                    email: { required: "Enter your email", email: "Enter a valid email" },
                    mobile: { required: "Enter your mobile number", digits: "Only numbers allowed", minlength: "Must be 10 digits", maxlength: "Must be 10 digits" },
                    password: { required: "Enter a password", minlength: "At least 6 characters" }
                },
                errorClass: "text-danger",
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                }
            });
        });
    </script>
</body>

</html>