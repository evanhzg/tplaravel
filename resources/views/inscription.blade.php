<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <title>Inscription</title>
</head>
<body>    
<h1>Inscription</h1>  
    <form action="/inscription" method="post">
    <br><br><br>
        {{ csrf_field() }}
        <div class="form-floating mb-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Pseudo">
            <label for="floatingPassword">Pseudo</label>
        </div><br>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div><br>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div><br><br><br>
        <input class="btn btn-primary" type="submit" value="M'inscrire">
    </form>
</body>
</html>

