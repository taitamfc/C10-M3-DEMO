@extends('layouts.app')

@section('title')
Danh sach khac hang
@endsection

@section('content')
<h3>Danh Sách Khách Hàng</h3>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    @if(count($customers) == 0)
        <tr>
            <td colspan="4">Không có dữ liệu</td>
        </tr>
    @else
        @foreach($customers as $key => $customer)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $customer->name; }}</td>
                <td>{{ $customer->phone; }}</td>
                <td>{{ $customer->email; }}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection