<!DOCTYPE html>
<html>

<head>
    <title>Get Cookie</title>
</head>

<body>
    <p>Theme: {{ $theme ?? '-' }}</p>
    <a href="/set-cookie">Set Cookie</a>

    <form action="/dashboard" method="get" style="margin-top:20px;">
        <button type="submit">Kembali ke Dashboard</button>
    </form>
</body>

</html>
