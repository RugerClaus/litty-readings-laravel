<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Log In To Dashboard</title>
    <style>
        *,*::before,*::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgb(100, 206, 187);
        }
        body form {
            display: flex;
            flex-direction: column;
        }
        body form input {
            font-size: 1rem;
            border-radius: 25px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Lit Panel</h1>
    <form action="{{route('admin.authenticate')}}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email:">
        <input type="password" name="password" placeholder="Password:">
        <input type="submit" class="btn" value="Log In">
    </form>
    <h1>Or Register</h1>
    <form action="{{route('admin.register')}}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username:">
        <input type="password" name="password" placeholder="New Password:">
        <input type="text" name="email" placeholder="Email Address:">
        <input type="submit" class="btn" value="Register">
    </form>
</body>
</html>