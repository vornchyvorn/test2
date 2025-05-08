<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            background-color: blueviolet;
        }
        h1{
            color: #fff;
        }
    </style>
</head>
<body>
    <p>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('test') }}">about</a>
        <a href="{{ url('page') }}">Contact</a>
        <a href="{{ url('register') }}">Register</a>
    </p>
    <h1 align="center">welcome to my website!</h1>
    <p align="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, adipisci!</p>
</body>
</html>