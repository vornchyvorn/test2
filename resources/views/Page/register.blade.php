<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> User Register</h1>
    <hr>
    <form action="{{url('/register/save')}}" method="POST">
        @csrf
        
        <p>
        Name: <input type="text" name="name">
        </p>
       <p>
       phone: <input type="text" name="phone">
       </p>
        
       <p>
       Email: <input type="email" name="email">
       </p>
       <p>
            <button>Submit</button>
       </p>
        
    </form>

</body>
</html>