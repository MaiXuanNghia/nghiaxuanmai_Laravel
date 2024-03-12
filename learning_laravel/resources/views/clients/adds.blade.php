@extends('layouts.client')

@section('sidebar')
<!-- @parent -->
<h3>home sidebar</h3>
@endsection

@section('form')
<!-- <form action="" method="POST">
    <input type="text" placeholder="enter here" name="name" value="{{-- old('name') --}}">
    <button type="submit">submit</button>
    @csrf
    method('PUT')
</form> -->

<form action="" method="POST">
    @if ($errors->any())
    @error('msg')
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>
    @enderror
    @endif
    <div class="mb-3">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="nameproduct" placeholder="input here">
        @error('nameproduct') <p>{{ $message }}</p> @enderror
    </div>
    <div class="mb-3">
        <label for="">Giá sản phẩm</label>
        <input type="text" name="priceproduct" placeholder="input here" id="">
        @error('priceproduct') <p>{{ $message }}</p> @enderror
    </div>
    <button type="submit" class="btn btn-primary">nộp</button>
    @csrf
</form>
@endsection