<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- CSS START --}}
    <link rel="stylesheet" href="Assets/auth/login/css/style.css">
    {{-- CSS END --}}

    {{-- Font START --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- Font END --}}

    <style>

        
        .alert-danger{
            width: 100%;
            text-align: center;
            
            color: white;
            background-color: rgba(128, 0, 0, 0.627);
            border-radius: 10px;
            
            margin-bottom: 50px;
        }

        
    </style>
</head>
<body>
<div class="latar">
    <div class="latar-container">
        {{-- Form Login START --}}
        <div class="form">
            <div class="container">
                <h2>Bocchi the Rock | Login </h2>


                <div class="flex">
                    
                    <form action="/login/action_login" method="POST">
                        @csrf

                        @if(session('error'))
                            <div class="alert alert-danger"> {{session('error')}} </div>
                        @endif

                        <div class="format">

                            <label for="">Email:</label>
                            <input type="text" name="email" placeholder="Masukkan Email">
                            
<br><br><br>

                            <label for="">Password:</label>
                            <input type="password" name="password" placeholder="Masukkan Password">

                            <div class="option">
                                <a href="/register">
                                    Don't have an account?
                                </a>        
                            </div>

                            <button type="submit"> Login </button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        {{-- Form Login END --}}


    </div>
</div>
</body>
</html>