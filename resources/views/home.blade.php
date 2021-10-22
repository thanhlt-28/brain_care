@extends('layouts.main')
@section('page-title', 'Trang chủ')
@section('content')

@include('layouts.header')
@include('layouts.ours')

<div class="templateux-section">
    @include('layouts.service')
</div>

@endsection