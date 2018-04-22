@extends('layout')
@section('title','Ghi Nhận Kết Thúc | Quản Lý Cây Gia Phả')
@section('content')
<br>
<br>
<br>
<br>
<h1> Ghi Nhận Kết Thúc</h1>
    <div class="panel-body">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
    </div>
    <form action="{{route('ghi-nhan-ket-thuc')}}" method="POST" enctype="multipart/form-data" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="inputEmail4">ID </label>
                <input type="number" class="form-control" id="inputEmail4" min=1 max=3 name="id" placeholder="Họ Tên" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Họ Và Tên </label>
                <input type="text" class="form-control" id="inputEmail4" name="hovaten" placeholder="Họ Tên" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Ngày Mất</label>
                <input type="date" class="form-control" id="inputPassword4" name="ngaygiomat" placeholder="Ngày  -  Giờ" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Địa Điểm Mai Táng</label>
                <input type="text" class="form-control" id="inputPassword4" name="diadiem" placeholder="Địa Điểm Mai Táng" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nguyên Nhân Chết</label>
                <input type="text" class="form-control" id="inputEmail4" name="nguyennhan" placeholder="Nguyên Nhân Chết" required>
            </div>
        </div>

         <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection