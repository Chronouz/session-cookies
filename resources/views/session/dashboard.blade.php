<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Selamat datang, {{ $username }}</h2>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <hr>
    <h3>Uji Fitur Session & Cookies</h3>
    <ul>
        <li><a href="/set-session">Set Session (nama=Andi, role=admin)</a></li>
        <li><a href="/get-session">Lihat Session</a></li>
        <li><a href="/clear-session">Hapus Session</a></li>
        <li><a href="/set-cookie">Set Cookie Theme (dark)</a></li>
        <li><a href="/get-cookie">Lihat Cookie Theme</a></li>
        <li><a href="/visit">Kunjungi Counter Cookie</a></li>
    </ul>
</body>

</html>
