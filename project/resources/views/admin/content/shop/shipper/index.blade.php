@extends('admin.layouts.glance')
@section('title')
    Quản Trị Nhà Vận Chuyển
@endsection
@section('content')
    <h1 style="padding-top: 100px">Quản Trị Nhà Vận Chuyển</h1>

    <div style="margin: 20px 0">
        <a href="{{  url('admin/shop/shipper/create') }}" class="btn btn-success">Thêm Admin</a>
    </div>
    <div class="tables">
        <div class="table table-hover table-dark">
            <h4>Tổng Số:</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($shippers as $shipper)
                    <tr>
                        <th scope="row">{{$shipper->id}}</th>
                        <td>{{$shipper->name}}</td>
                        <td>{{$shipper->email}}</td>
                        <td>
                            <a href="{{ url('admin/shipper/'.$shipper->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/shipper/'.$shipper->id.'/delete') }}" class="btn btn-danger">Xóa</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $shippers->links() }}
        </div>
    </div>

@endsection