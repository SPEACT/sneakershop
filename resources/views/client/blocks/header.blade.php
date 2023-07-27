<section class="container-fluid d-flex justify-content-between" style="background-color: #446084">
    <div class="me-5 container ">
        <span class="text-white text-uppercase">Chào mừng bạn đến với SneakerShop !!!</span>
    </div>
</section>
<nav class="navbar navbar-expand-lg navbar-dark bg-light text-dark p-0">        

    <div class="container p-0">
        <a class="navbar-brand mt-lg-0" href="{{ route('home') }}">
            <h5 class="pt-1 text-dark"><img
                    src="{{ asset('assets/client/images/344685992_1243901272902332_1273619240572308742_n-removebg-preview.png') }}"
                    alt="" style="width:90px"></h5>
        </a>


        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form action="{{ route('search') }}" method="get" class="mb-3 mx-5" class="text-center mx-5"
                role="search" style="width: 80%; height: 30px;">

                {{-- <form action="{{ route('search') }}" class="text-center mx-5" method="GET" role="search"
                style="width: 80%; height: 30px;"> --}}
                <div class="input-group">
                    <input type="search" name="keywords" id="" class="form-control"
                        placeholder="Từ khóa tìm kiếm ..." value="{{ request()->keywords }}">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="col-md-5 my-auto">
            <ul class="nav justify-content-end align-items-center">

                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{ route('cart.home') }}">

                        <i class="bi bi-cart3 fs-4 text-dark"></i>

                    </a>

                    {{-- 

                    <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fa-light fa-cart-shopping"></i>
                    </a> --}}
                </li>

                @if (Auth::guard('web')->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 text-dark" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}


                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('checkout.checkBill') }}">
                                    Đơn Hàng
                                </a>
                            </li>
                            @if (auth()->user()->role_id == 1)
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.home') }}">
                                        Trang quản trị
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('login') }}">Đăng nhập</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('register') }}">Đăng kí</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
