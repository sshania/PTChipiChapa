<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav>
        <ul class="ul-navbar">
            <div class="nav-head">
                <a href="index.html">
                    <img class="nav-logo" src="assets/logo.png" alt="">
                </a>
                <ul class="nav-head2">
                    <a class="home-butt" href="main">Home</a>
                    <a class="activity-butt" id="act-act" href="activity">Activity</a>
                    <a class="login-butt" href="login">Login</a>
                </ul>
            </div>
        </ul>
    </nav>

    <div class="img-act">
        <img  src="assets/act.png" alt="">
    </div>

    <div class="act-butt">
        <div class="inp-butt">
            <a class="view-butt" href="{{route('Emplo.index')}}">View</a>
            <a class="input-butt" href="{{route('Emplo.create')}}">Input</a>
        </div>
    </div>

</body>
</html>
