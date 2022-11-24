<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Page</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="margin-left:40%;">This is dashboard page</h2>
                <h3 style="margin-left:43%;">Welcome</h3>
                @auth
                    <a href="{{url('login')}}" class="p-2 nav-link" style="font-size: 30px; margin-left:51%;    margin-top: -55px;">{{auth()->user()->name}}</a>
                @endauth
            </div>

          


            @guest
            <div style="margin-left:80%;">
                <a href="{{url('login')}}" class="btn btn-primary">Login</a>
                <a href="{{url('register')}}" class="btn btn-secondary">Register</a>
            </div>
            @endguest

            <form action="{{url('logout')}}" method="get">
                <button type="submit" class="btn btn-primary" style="margin-top: 20px; margin-left:48%;">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>