@extends('layouts.client')
<!-- @section('name')
    <h1>trang chủ name layout</h1>
@endsection -->
@section('sidebar')
    @parent
    <h3>home sidebar</h3>
@endsection
<!-- @section('content')
    <h1>trang chủ layout</h1>
@endsection -->

@section('css')
    header{
        background: blue;
        color:#fff;
    }
@endsection
