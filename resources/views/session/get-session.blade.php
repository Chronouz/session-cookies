<!DOCTYPE html>
<html>

<head>
    <title>Get Session</title>
</head>

<body>
    @if ($pesan)
        <p style="color:green">{{ $pesan }}</p>
    @endif
    <p>Nama: {{ $nama ?? '-' }}</p>
    <p>Role: {{ $role ?? '-' }}</p>
    <a href="/set-session">Set Session</a> |
    <a href="/clear-session">Clear Session</a>

    <form action="/dashboard" method="get" style="margin-top:20px;">
        <button type="submit">Kembali ke Dashboard</button>
    </form>
</body>

</html>
