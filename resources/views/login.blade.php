<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome to login page</h2>
            </div>

            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif

            @if(Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('fail')}}
                </div>
            @endif

            <form action="{{url('login-user')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{old('email')}}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" value="{{old('password')}}">
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <br>

                <p>Don't have an account ? <a href="{{url('register')}}">Sign Up</a></p>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>