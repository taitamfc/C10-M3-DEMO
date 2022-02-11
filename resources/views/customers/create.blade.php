@extends('layouts.app')

@section('title')
Them moi khach hang
@endsection

@section('content')
<h3>Them moi khach hang</h3>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('customers.store') }}" method="post">
    @csrf
    <div class="form-group">
        <lable>Ten khach hang<lable>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <lable>Email khach hang<lable>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <lable>Phone khach hang<lable>
        <input type="text" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Them moi">
    </div>
</form>
@endsection