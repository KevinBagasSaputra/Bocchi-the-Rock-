<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Profile</title>

    {{-- CSS --}}
        <link rel="stylesheet" href="Assets/dashboard/css/style.css">
    {{-- CSS --}}

    {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    {{-- Font --}}
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li>
                    <a href="" class="judul">Dashboard | Profile</a>
                    <marquee behavior="" direction="">
                        <p>Selamat datang {{Auth::user()->name}}</p>
                    </marquee>

                </li>

                <li>
                    <div class="nav-profile">
                        <a href="">
                            @foreach ($user as $profile_user)
                                <img src="{{ url('') }}/Assets/assets_save/img/user/profile/{{$profile_user->profile}}" alt="Profile" class="profile">
                            @endforeach
                            <p>
                                {{Auth::user()->name}}
                            </p>
                        </a>
                    </div>                    
                </li>



                <li>
                    <a href="/logout" class="logout">
                        Logout
                    </a>
                </li>

            </ul>
        </div>
    </nav>


    {{-- User Setting --}}
        <div class="form">
            <div class="container">
                @foreach ($user as $user)                
                <form action="user/update_user" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-form">
                        <label for="">Id:</label>
                        <input type="int" name="id" value="{{$user->id}}" readonly>
                    </div>

                    <div class="control-form">
                        <label for="">Name: </label>
                        <input type="text" name="name" value="{{$user->name}}">
                    </div>
                                        
                    <div class="control-form">
                        <label for="">Profile</label>

                        <img src="{{ url('') }}/Assets/assets_save/img/user/profile/{{$user->profile}}" alt="Profile" width="50" height="50" style="border-radius: 50px;">
                        <input type="file" name="profile" required>
                    </div>

                    <button type="submit">Save changes</button>
                </form>
                @endforeach
            </div>
        </div>
    {{-- User Setting --}}
</body>
</html>