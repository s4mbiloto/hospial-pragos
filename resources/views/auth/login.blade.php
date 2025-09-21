@extends('layouts.app')
@section('title','Login')

@section('content')
<div class="login-container">
    <div class="image">
        <img src="{{ asset('images/dokter.png') }}" alt="Dokter">
    </div>
    <div class="form-box">
        <h2>Login</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <input type="text" name="nama" placeholder="Masukkan nama" required><br>
            <input type="password" name="password" placeholder="Masukkan kata sandi" required><br>
            <button type="submit">Kirim</button>
        </form>
        <p>Belum Punya Akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
    </div>
</div>

<style>
.login-container {
    display: flex;
    width: 70%;
    background: #C4D9FF;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    margin: 40px auto;
}
.login-container .image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #c4d9ff;
}
.login-container .image img {
    max-width: 100%;
    height: auto;
}
.login-container .form-box {
    flex: 1;
    padding: 40px;
}
.login-container input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}
.login-container button {
    width: 105%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
}
.login-container button:hover {
    background: #0056b3;
}
</style>
@endsection
