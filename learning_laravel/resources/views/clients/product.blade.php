@extends('layouts.client');


<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

@section('content')
<x-alter type='danger' content='đặt gì ?' icon=check/>
<br>
<br>
<br>
<x-alter type='danger' :content=" $mess " icon='check'/>
<!-- <x-Input.Button/>
<x-Form.Button/> -->
@endsection


@push('scripts')
<script>
        console.log('sản pham1')
    </script>
@endpush

@push('scripts')
<script>
        console.log('sản pham0,1')
    </script>
@endpush