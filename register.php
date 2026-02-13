<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="registration.php" method="POST" class="container-form">
        <div class="group">
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="group">
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="group">
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        </div>
        <div class="group">
            <label>Role:</label>
            <select name="role" required>
                <option value="">Select Role</option>
                <option value="encoder">Encoder</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
