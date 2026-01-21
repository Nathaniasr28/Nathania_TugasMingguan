<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<style>
body { font-family: Arial,sans-serif; background: #f4f4f4; display:flex; justify-content:center; align-items:center; height:100vh;}
.auth-box { background:white; padding:30px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.2); width:350px;}
.auth-box h2 { text-align:center; color:#0A3D62;}
.auth-box input { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc;}
.auth-box button { width:100%; padding:10px; background:#3C6382; color:white; border:none; border-radius:5px; cursor:pointer; transition:0.3s;}
.auth-box button:hover { background:#0A3D62;}
.error { color:red; font-size:0.9em; }
.auth-box a { font-size:0.9em; color:#3C6382; text-decoration:none; }
.auth-box a:hover { text-decoration:underline; }
</style>
</head>
<body>
<div class="auth-box">
<h2>Register</h2>
<form method="POST" action="{{ route('register.post') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
    <button type="submit">Register</button>
</form>
<p style="text-align:center;">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
</div>
</body>
</html>
