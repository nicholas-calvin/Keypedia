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
                    @if (Auth()->user()->role_id === Helper::getManagerRoleId()) {{--Buat Admin--}}
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="{{route('category', ['categoryId'=>$category->id])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MANAGER
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/keyboard/add">Add Keyboard</a></li>
                                <li><a class="dropdown-item" href="{{route('manageCategories')}}">Manage Categories</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Logout</button></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                    @endif
                    @if(Auth()->user()->role_id === Helper::getCustomerRoleId()) {{--Buat Customer--}}
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="{{route('category',['categoryId'=>$category->id])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth()->user()->username}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('cart')}}">My Cart</a></li>
                                <li><a class="dropdown-item" href="{{route('transactionHistoryPage')}}">Transaction History</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Logout</button></li>
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

    <div style="background-color: #4daabe;">
        @yield('content')
    </div>

    <footer class="footer mt-auto py-2 text-center" style="color: #6e6e6e;">
        Made by Keypedia CEO-ES - 2021
    </footer>

    

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