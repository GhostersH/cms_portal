<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created</title>
</head>
<body>
<h1>Hello, {{ $user->name }}</h1>
<p>Your account has been created successfully. You can log in with the following details:</p>
<p>Email: {{ $user->email }}</p>
<p>Password: The password you set during registration.</p>
<p>Thank you!</p>
</body>
</html>
