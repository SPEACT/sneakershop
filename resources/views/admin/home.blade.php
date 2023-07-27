@extends('layouts.admin')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $cate_count }}</h3>

                            <p>Danh mục</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.category.home') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $product_count }}</h3>

                            <p>Sản phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.products.home') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $cus_count }}</h3>
                            {{-- <sup style="font-size: 20px">%</sup> --}}
                            <p>Khách hàng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.users.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $order_count }}</h3>

                            <p>Đơn hàng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('admin.bill.bill') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <!-- Custom tabs (Charts with tabs)-->


                <!-- TO DO List -->
                <div class="card">

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>STT</td>
                                    <td>Tên khách hàng</td>
                                    <td>Ngày đặt</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $key => $od)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $od->users->name }}</td>
                                        <td>{{ $od->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->

    <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
@endsection
