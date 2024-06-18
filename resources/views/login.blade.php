<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       
        body {
           
           
            height: 100vh; 
            margin: 0; 
            padding: 0; 
            font-family: Arial, sans-serif; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
        }

        .logo-container {
            text-align: center; 
            margin-bottom: 20px; 
        }

        .logo {
            width: 100px; 
        }

        form {
            width: 90%; 
            max-width: 400px; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold; 
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px; 
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

    
        .register-link {
            margin-top: 20px; 
            text-decoration: none;
            color: #007bff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="{{ asset('logs.png') }}" alt="Logo" class="logo">
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <a href="{{ route('register') }}" class="register-link">Register here</a>
</body>
</html>
