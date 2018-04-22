@extends('layout')
@section('title','Ghi Nhận Thành Tích | Quản Lý Cây Gia Phả')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <h1>Ghi Nhận Thành Tích</h1>
    <div class="panel-body">
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
</div>
<form action="{{route('ghi-nhan-thanh-tich')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="inputEmail4">ID </label>
                <input type="number" class="form-control" id="inputEmail4" min=1 max=3  name="id" placeholder=".................." required  >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Họ Và Tên </label>
                <input type="text" class="form-control" id="inputEmail4"  name="hovaten" placeholder=".................." required  >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Loại Thành Tích </label>
                <input type="text" class="form-control" id="inputEmail4"  name="loaithanhtich" placeholder=".................." required>
            </div>
        </div>
            <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Ngày Phát Sinh </label>
                    <input type="date" class="form-control" id="inputEmail4" name="ngayphatsinh" placeholder=".................." required>
                </div>
            </div>
            <div class="form-group">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Số Lượng</label>
                <input type="number" class="form-control" id="inputPassword4" name="soluong" placeholder=".................." required>
            </div>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection