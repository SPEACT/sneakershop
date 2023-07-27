@extends('layouts.admin')

{{-- 
@section('sidebar')
@parent
    <h3>Product sidebar</h3>
@endsection --}}

@section('content')
   <h1>Sản phẩm</h1>
   @if (session('msg'))
       <div class="alert alert-success">{{ session('msg') }}</div>
   @endif
   <x-package-alert/>

   @push('scripts')
    <script>
        console.log('put lan 2');
    </script>
@endpush
@endsection

@section('css')
<style>
    /* header{
        background:rgb(255, 0, 64);
        color: white
    } */
    </style>
@endsection

@section('js')

@endsection

@prepend('scripts')
    <script>
        console.log('put lan 1');
    </script>
@endprepend