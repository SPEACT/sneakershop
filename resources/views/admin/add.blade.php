@extends('layouts.client')


@section('sidebar')
{{-- @parent --}}
    <h3>home sidebar</h3>
@endsection

@section('content')
      <h1>Them San Pham</h1>
      <form action="{{ route('addProduct') }}" method="POST" id="product-form">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
              @endforeach
              {{ $errorMessage }}
            </div>
        @endif --}}

        @error('msg')
          <div class="alert alert-danger text-center">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="" class="form-label">Ten San Pham</label><br>
        
          <input type="text" class="form-control" placeholder="Ten san pham ..." name="product_name" value="{{ old('product_name') }}">
          @error('product_name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="">Gia San Pham</label><br>
          <input type="text" class="form-control" placeholder="Gia san pham ..." name="product_price" value="{{ old('product_price') }}">
          @error('product_price')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Them moi</button>
        @csrf              
        {{-- @method('PUT') --}}
      </form>
@endsection

@section('js')
<script>
    $(document).ready(function() {
      $('#product-form').on('submit', function(e) {
        e.preventDefault();

        let productName = $('input[name="product_name"]').val().trim();
        let productPrice = $('input[name="product_price"]').val().trim();

        let actionUrl = $(this).attr('action');

        let csrfToken = $(this).find('input[name="token"]').val();

        $.ajax({
          url: actionUrl;
          type: 'POST',
          data:{
            productName:productName,
            productPrice:productPrice,
            _token: csrfToken;
          },
          dataType:'text',
          success:function(response) {
            console.log(response);

          },
          error:function(error) {
            console.log(error);
          }
      })
      })
      })

</script>

@endsection
