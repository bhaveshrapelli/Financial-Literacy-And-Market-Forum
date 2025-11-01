<?php
session_start();
include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = md5(trim($_POST['password'])); // Encrypt password using MD5

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['users_logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">User Login</h2>
            <?php if (!empty($error)): ?>
                <p class="text-danger text-center"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
            <form id="loginForm" action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="mt-3 text-center">Don't have an account? <a href="register.php">Sign Up!</a></p>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#loginForm").validate({
                rules: {
                    email: { required: true, email: true },
                    password: { required: true, minlength: 6 }
                },
                messages: {
                    email: { required: "Enter your email", email: "Enter a valid email" },
                    password: { required: "Enter your password", minlength: "At least 6 characters" }
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