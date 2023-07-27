<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/product.css') }}">
    @yield('css')
</head>

<body>
    <div class="container-fluid p-0">
        <div class="">
            @include('client.blocks.header')
        </div>

        <div class="100vh">
            @yield('content')
        </div>
        <div class="">
            @include('client.blocks.footer')
        </div>
    </div>

    <script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" type="text/javascript"></script>
    @yield('js')
    @method('scripts')

</body>

</html>
{{-- 
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light text-dark">
        <div class="container">
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <h5 class="pt-1 text-dark">MDB</h5>
            </a>


            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Projects</a>
                    </li>
                </ul>
                <!-- Left links -->

                <!-- Right elements -->
                <div class="d-flex align-items-center justify-content-start">
                    <!-- Icon -->
                    <a class="text-reset me-3" href="#">
                        <i class="fas fa-shopping-cart text-white"></i>
                    </a>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell text-white"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">12</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item text-dark" href="#">Some news</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark" href="#">Another news</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>


                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="width: 100vw;height: 100vh;">
            <div class="carousel-item active">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaJd-Ym5xeCtTFx1YUx6LmxHEmCq2fLgjZ0rkdgMs_&s"
                    class="d-block w-100" alt="..." style="width: 100vw;height: 100vh;">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/premium-vector/network-technology-digital-dark-blue-colorful-design-banner_181182-33509.jpg"
                    class="d-block w-100" alt="..." style="width: 100vw;height: 100vh;">
            </div>
            <div class="carousel-item">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/000/693/934/small/dark-blue-technology-and-high-tech-abstract-background.jpg"
                    class="d-block w-100" alt="..." style="width: 100vw;height: 100vh;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section style="background-color: #eee;">
        <div class="text-center container py-5">
            <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-success ms-2">Eco</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/shoes%20(3).webp"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(23).webp"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-success ms-2">Eco</span><span
                                                class="badge bg-danger ms-2">-10%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-primary ms-2">New</span><span
                                                class="badge bg-success ms-2">Eco</span><span
                                                class="badge bg-danger ms-2">-10%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Company name</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">MDBootstrap</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">MDWordPress</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">BrandFlow</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Become an Affiliate</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer> --}}
