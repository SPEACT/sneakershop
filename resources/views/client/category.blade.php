@extends('layouts.client')

@section('content')

    <section style="background-color: #eee;">
        <div class="text-center container py-5">
            <h4 class="mt-4 mb-5"><strong>Sản phẩm</strong></h4>

            <div class="row">
                @foreach ($product as $key => $value)
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
                                <p><a href="{{ route('cart.add', ['id' => $value->id]) }}" class="btn btn-primary">Add
                                        to
                                        cart</a></p>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    {{-- {{ $product->links() }} --}}
                </div>
                <p>

                </p>

            </div>

        </div>
    </section>
@endsection
