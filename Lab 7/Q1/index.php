<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<form action="save.php" method="post">

    Full Name:
    <input type="text" name="fullname" required>
    <br><br>

    Email:
    <input type="text" name="email" required>
    <br><br>

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>