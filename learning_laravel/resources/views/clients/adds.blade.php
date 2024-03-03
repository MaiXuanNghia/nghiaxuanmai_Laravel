@extends('layouts.client')

@section('sidebar')
    <!-- @parent -->
    <h3>home sidebar</h3>
@endsection

@section('form')
<form action="" method="POST">
    <input type="text">
    
    <button type="submit">submit</button>
    @csrf
    @method('PUT')
</form>
@endsection
