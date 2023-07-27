@extends('layouts.client')

@section('content')

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
                <img src="{{ asset('assets/client/images/banner_ADIDAS.webp') }}" class="d-block w-100" alt="..."
                    style="width: 100vw;height: 100vh;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/client/images/poster-giay-bitis.jpg') }}" class="d-block w-100" alt="..."
                    style="width: 100vw;height: 100vh;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/client/images/poster-giay-dep-mat.jpg') }}" class="d-block w-100" alt="..."
                    style="width: 100vw;height: 100vh;">
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
    <section id="promo" class="section-padding-sm promo ">
        <div class="container">
            <div class="promo-box row">
                <div class="col-md-4 mtb-sm-30 promo-item">
                    <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="info">
                        <a href="#" class="text-decoration-none text-dark">
                            <h6 class="normal">Giao hàng miễn phí</h6>
                        </a>
                        <p>Đơn hàng từ 5.000.000đ</p>
                    </div>
                </div>
                <div class="col-md-4 mtb-sm-30 promo-item">
                    <div class="icon"><i class="fa fa-repeat" aria-hidden="true"></i></div>
                    <div class="info ">
                        <a href="#" class="text-decoration-none text-dark">
                            <h6 class="normal">Chính sách đổi trả</h6>
                        </a>
                        <p>Hoàn tiền trong 30 ngày</p>
                    </div>
                </div>
                <div class="col-md-4 mtb-sm-30 promo-item">
                    <div class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></div>
                    <div class="info">
                        <a href="#" class="text-decoration-none text-dark">
                            <h6 class="normal">Hỗ trợ</h6>
                        </a>
                        <p>Hỗ trợ 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center container py-5">

        <h4 class="mt-4 mb-5"><strong>Danh mục</strong></h4>

        <div class="row">
            @foreach ($categories as $key => $value)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card-body">
                        <a href="{{ route('category', ['id' => $value->id]) }}" class="text-reset text-decoration-none">
                            <h5 class="card-title mb-3">{{ $value->cate_name }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


        <section style="background-color: #eee;">
            <div class="text-center container py-5">
                <h4 class="mt-4 mb-5"><strong>Sản phẩm</strong></h4>

                <div class="row">
                    @foreach ($productLists as $key => $value)
                        <div class="col-lg-3 col-md-12 mb-4">
                            <div class="card">

                                <img src="{{ $value->product_image }}" class="w-100" />
                                <a href="{{ route('product', ['id' => $value->id]) }}">

                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="{{ route('product', ['id' => $value->id]) }}"
                                        class="text-reset text-decoration-none">
                                        <h5 class="card-title mb-3 text-decoration-0">{{ $value->product_name }}</h5>
                                    </a>
                                    <a href="" class="text-reset text-decoration-none">
                                        <p>{{ $value->category->cate_name }}</p>
                                    </a>
                                    <h6 class="mb-3 text-danger">{{ number_format($value->product_price, 0, '', ',') }}đ
                                    </h6>
                                    <p><a href="{{ route('cart.add', ['id' => $value->id]) }}"
                                            class="btn btn-primary">Add
                                            to
                                            cart</a></p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-center">
                        {{ $productLists->links() }}
                    </div>
                    <p>

                    </p>

                </div>

            </div>
        </section>
    @endsection

    @section('css')
        <style>
            .promo {
                position: relative;
            }

            .promo-box {
                background: #ffffff none repeat scroll 0 0;

                padding: 10px 0px;
                position: relative;
                width: 100%;

            }

            .promo-box .promo-item {
                text-align: center;
                border-right: 1px solid #eee;
            }

            .promo-box .promo-item:last-child,
            .promo-box .promo-item:nth-child(3) {
                border-right: 0px none;
            }

            .promo-box .icon {
                display: inline-table;
                vertical-align: middle;
            }

            .promo-box .icon i {
                font-size: 34px;
            }

            .promo-box .info {
                padding-left: 15px;
                text-align: left;
                display: inline-table;
                vertical-align: middle;
            }

            .promo-box h6 {
                margin: 0 0 2px 0;
                padding: 0;
                text-transform: uppercase;
            }

            .promo-box p {
                font-weight: 400;
                margin-bottom: 0px;
                margin-top: 0;
            }

            .mtb-sm-30 {
                margin-top: 30px;
                margin-bottom: 30px;
            }
        </style>
    @endsection
