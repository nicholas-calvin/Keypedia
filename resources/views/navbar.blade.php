<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keypedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-around">
            <a class="navbar-brand" href="{{route('home')}}">Keypedia</a>
            <div></div>
            <div></div>
            <div></div>
            <div>
            </div>
            <div class="d-flex">
                @if (Auth()->user())
                    @if (Auth()->user()->role_id === Helper::getAdminRoleId()) {{--Buat Admin--}}
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MANAGER
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item fw-bold">Logout</button></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @if(Auth()->user()->role_id === Helper::getCustomerRoleId())
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Wireless Keyboard</a></li>
                                <li><a class="dropdown-item" href="#">Wired Keyboard</a></li>
                                <li><a class="dropdown-item" href="#">Ergonomic Keyboard</a></li>
                                <li><a class="dropdown-item" href="#">60 - 69 Mechanical Keyboard</a></li>
                                <li><a class="dropdown-item" href="#">70 - 89 Mechanical Keyboard</a></li>
                                <li><a class="dropdown-item" href="#">Full size Mechanical Keyboard</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth()->user()->username}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">My Cart</a></li>
                                <li><a class="dropdown-item" href="#">Transaction History</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item fw-bold">Logout</button></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    
                @else
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('register')}}">Register</a>
                    </li>
                    
                </ul>
                @endif
            </div>
            <!-- <div id="clock" style="margin-right: 5em;"></div> -->
        </div>
    </nav>

    <div style="background-color: #4daabe; height: calc(100vh - 56px);">
        @yield('content')
        <div class="p-3 mb-0 bg-light text-white position-absolute bottom-0 start-50 translate-middle-x" style="width: 100vw; margin-bottom: -8px;">
            <h6 class="d-flex justify-content-center" style="color: #6e6e6e; margin-top: -15px;">Made by Keypedia CEO-ES - 2021</h6>
        </div>
    </div>

    

</body>
</html>
    <script type="text/javascript">
        n =  new Date();
        
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
options = {d:'long'};
        day = new Intl.DateTimeFormat('en-US', options).format(n);
document.getElementById("clock").innerHTML = day;
    </script>