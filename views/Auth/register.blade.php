<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="Assets/auth/register/css/style.css">
    {{-- CSS --}}

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- FONT --}}


    <style>
        .alert-success{
            width: 100%;
            text-align: center;

            color: white;
            background-color: rgba(0, 128, 0, 0.627);
            border-radius: 10px;

            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    {{-- Latar START --}}
    <div class="latar">
        <div class="latar-container">

            {{-- Form START --}}
                <div class="form">
                    <div class="form-container">

                        
                        <form action="/register/action_register" method="POST">
                            @csrf
                            <h2>Bocchi the Rock | Register</h2>

                            @if(session('message'))
                                <div class="alert alert-success"> {{session('message')}} </div>
                            @endif

                            <div class="group">
                                <label>Name: </label>
                                <input type="text" name="name" placeholder="Masukkan Nama">
                            </div>
                            
                            <div class="group">
                                <label>Email: </label>
                                <input type="email" name="email" placeholder="Masukkan Email">
                            </div>
                            
                            <div class="group">
                                <label>Password: </label>
                                <input type="password" name="password" placeholder="Masukkan Password">
                            </div>
                            
                            <div class="group">
                                <div class="role">
                                    <select name="role">
                                        <option value="Guest">Guest</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="group">
                                <button type="submit">Daftar</button>

                                <div class="option">
                                    <a href="/login">
                                        Already have an account?
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            {{-- Form END --}}

        </div>
    </div>
    {{-- Latar END --}}
</body>
</html>