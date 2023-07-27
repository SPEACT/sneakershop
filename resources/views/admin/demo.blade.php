<h2>Demo View</h2>

{{-- {{ $title }} --}}
@if (session('mess'))
    {{ session('mess') }}
@endif
<form action="" method="post">
    <input type="text" name="username" placeholder="username..." value="{{ old('username') }}">
    <button type="submit">Bucmit</button>
    @csrf
</form>