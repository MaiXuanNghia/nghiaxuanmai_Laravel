@extends('layouts.client')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')
@datetime('2024-12-15 15:00:38')
</br>
@datetime('2024-12-15 15:00:38')
<!-- @env('local')
    <p>môi trường dev 1</p>
    
    @elseenv('test')
    <p>đây là my test</p>
    @else
    <p>không phải môi trường dev</p>
@endenv -->
<!-- <x-Input.Button/>
<x-Form.Button/> -->
<div>
    <img src="https://png.pngtree.com/png-clipart/20230411/original/pngtree-world-health-day-our-planet-doctors-and-medical-workers-are-celebrating-png-image_9043300.png" alt="" style="width: 50%; height: 80%;">
    <p><a href="{{ route('downloadimage0') . '?image=' . public_path('assets\clients\images\streamdownload.png') }}" class="btn btn-primary">Download image</a></p>
</div>
@endsection