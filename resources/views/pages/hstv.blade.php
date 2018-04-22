@extends('layout') @section('title','Hồ Sơ Thành Viên | Quản Lý Cây Gia Phả') @section('content')
<br>
<br>
<br>
<br>
<h1>Hồ Sơ Thành Viên</h1>
@if($errors->any())
<div class="arlert arlert-dangers">
    @foreach($errors->all() as $err) {{$err}}
    </br>
    @endforeach
</div>
@endif
<form method="POST" action="{{route('ho-so-thanh-vien')}}" enctype="multipart/form-data" role="form">
    {{csrf_field()}}
    <div class="form-group">
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">ID Đời </label>
                <input type="text" class="form-control" name="id_doi" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">ID Gia Đình</label>
                <input type="text" class="form-control" name="id_giadinh" placeholder=".................." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">ID Thành Tích </label>
                <input type="text" class="form-control" name="id_thanhtich" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">ID Kết Thúc</label>
                <input type="text" class="form-control" name="id_ketthuc" placeholder=".................." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">Thành Viên Cũ </label>
                <input type="text" class="form-control" name="thanviencu" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">Loại Quan Hệ</label>
                <input type="text" class="form-control" name="loaiquanhe" placeholder=".................." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">Ngày Phát Sinh </label>
                <input type="date" class="form-control" name="ngayphatsinh" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">Họ Và Tên</label>
                <input type="text" class="form-control" name="hovaten" placeholder=".................." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">Cha Mẹ </label>
                <input type="text" class="form-control" name="chame" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">Giới Tính</label>
                <input type="text" class="form-control" name="gioitinh" placeholder=".................." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">Ngày Sịnh</label>
                <input type="date" class="form-control" name="ngaygiosinh" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">Quê Quánp</label>
                <input type="text" class="form-control" name="quequan" placeholder=".................." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-5">
                <label for="inputEmail6">Nghề Nghiệp</label>
                <input type="text" class="form-control" name="nghenghiep" placeholder=".................." required>
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword6">Địa Chỉ</label>
                <input type="text" class="form-control" name="diachi" placeholder=".................." required>
            </div>
        </div>  
        <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-10">
                <label for="inputPassword6">Hiển Thị Danh Sách Thành Viên</label>
                <input type="number" class="form-control" name="deleted" min=0 max=1  value="1" placeholder=".................." >
            </div>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>


</form>
@endsection