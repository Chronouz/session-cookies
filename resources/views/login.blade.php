<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="POST" action="/login">
        @csrf
        <label>Username: <input type="text" name="username" required></label>
        <button type="submit">Login</button>
    </form>
</body>

</html>
