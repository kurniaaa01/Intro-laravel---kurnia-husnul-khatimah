<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <h1>Formulir Pendaftaran</h1>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <label for="first_name">Nama Depan:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Nama Belakang:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <!-- Tambahkan isian lain yang dibutuhkan -->

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
