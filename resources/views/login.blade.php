<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="http://localhost:100/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('css/signup.css') }}">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Login</h4>
        {{-- {{ $errors }} --}}
        <div>
            <input type="email" class="@error('email')is-invalid @enderror form-control" placeholder="Email"
                name="email" id="">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <input type="password"class="@error('password')is-invalid @enderror form-control" placeholder="Password"
                name="password" id="">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            {{-- <input type="file" name="image" id=""> --}}
        </div>
        <button class="btn" type="submit">Login</button>
    </form>


    <script src="http://localhost:100/bootstrap.bundle.min.js"></script>
</body>

</html>
