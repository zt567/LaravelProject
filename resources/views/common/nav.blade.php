 <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                    <a class="navbar-brand" href="#!">Start Bootstrap</a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{asset('/')}}">首頁</a></li>
                        @auth
                        <li class="nav-item">
                            <a href="{{ route('user.info') }}" class="nav-link text-dark mr-3 text-decoration-none">
                            <img width="30" height="30" src="{{ asset('avatar.jpg')}}" class="rounded-pill" alt="">
                            <span>{{ auth()->user()->name }}</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}" class="d-inline" id="logout">
                            @csrf
                            <a href="#" onclick="document.getElementById('logout').submit()" class="nav-link text-dark text-decoration-none">退出</a>
                        </form>
                        </li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">註冊</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登入</a></li>
                        @endauth
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul>
                </div>
        </nav>