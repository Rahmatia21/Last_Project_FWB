<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Aplikasi Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS Langsung di sini */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .login-box label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: 600;
        }
        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .login-box button {
            width: 100%;
            padding: 12px;
            background-color: #4A90E2;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }
        .login-box button:hover {
            background-color: #357ABD;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{route('login.post')}}">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required autofocus>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
