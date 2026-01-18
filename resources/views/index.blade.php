<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Employee Attendance</title>
<style>
    body{
        margin:0; padding:0;
        font-family: Arial;
        background:#f4f4f4;
        display:flex; justify-content:center; align-items:center;
        height:100vh;
    }
    .card{
        background:#fff;
        width:350px;
        padding:30px ;
        border-radius:10px;
        box-shadow:0 0 10px #ccc;
        text-align:center;
    }
    input{
        width:90%; padding:12px; margin:10px 0;
        border:1px solid #ccc; border-radius:5px;
    }
    button{
        width:90%; padding:12px;
        background:#1a73e8; color:white;
        border:none; border-radius:5px;
        cursor:pointer; font-size:16px;
    }
    a{ font-size:14px; color:#1a73e8; text-decoration:none; }
</style>
</head>

<body>

<div class="card">
    <h2>Employee Attendance</h2>

    <!-- Email Input -->
    <input type="email" placeholder="Enter Email">

    <!-- Password Input -->
    <input type="password" placeholder="Enter Password">

    <a href="#">Forgot Password?</a><br><br>

    <!-- Login Button -->
    <button>Login</button>

    <p style="margin-top:20px; font-size:12px;">© 2025 Company</p>
</div>

</body>
</html>
