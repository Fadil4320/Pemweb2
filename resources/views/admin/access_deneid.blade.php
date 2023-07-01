@extends('admin.layout.app')
@section('content')
    @if (Auth::user()->role != 'pelanggan')
        
    @endif
@endsection