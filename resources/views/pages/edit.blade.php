@extends('layout')
@section('title','Thay Đổi Thông Tin | Quản Lý Cây Gia Phả')
@section('content')
<br>
<br>
<br>
<br>
<div>
    <h1><p>Đang cập nhật thành viên : <Span style="color:blue">{{$edit->hovaten}}</Span></p></h1>
</div>
    @if(Session::has('message'))
    <div class="alert alert-danger">{{Session::get('message')}}</div>
    @endif
<br>
    <form method="POST" action="{{route('thay-doi-thong-tin',$edit->id)}}" enctype="multipart/form-data" role="form">
  {{csrf_field()}}
  <div class="form-group">
    <div class="form-row">
      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-5">
        <label for="inputPassword6">ID Gia Đình</label>
        <input type="text" class="form-control" name="id_giadinh" value="{{$edit->id_gd}}" placeholder="..................">
      </div>
      <div class="form-group col-md-5">
        <label for="inputEmail6">ID Đời </label>
        <input type="text" class="form-control" name="id_doi" value="{{$edit->id_doi}}"  placeholder="..................">
      </div>
      
    </div>
    <div class="form-row">
      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-5">
        <label for="inputEmail6">ID Thành Tích </label>
        <input type="text" class="form-control" name="id_thanhtich" value="{{$edit->id_thanhtich}}" placeholder="..................">
      </div>
      <div class="form-group col-md-5">
        <label for="inputPassword6">ID Kết Thúc</label>
        <input type="text" class="form-control" name="id_ketthuc" value="{{$edit->id_ketthuc}}" placeholder="..................">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-5">
        <label for="inputEmail6">Thành Viên Cũ </label>
        <input type="text" class="form-control" name="thanviencu" placeholder=".................." value="{{$edit->thanviencu}}">
      </div>
      <div class="form-group col-md-5">
        <label for="inputPassword6">Loại Quan Hệ</label>
        <input type="text" class="form-control" name="loaiquanhe" placeholder=".................." value="{{$edit->loaiquanhe}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-5">
        <label for="inputEmail6">Ngày Phát Sinh </label>
        <input type="date" class="form-control" name="ngayphatsinh" placeholder=".................." value="{{$edit->ngayphatsinh}}">
      </div>
      <div class="form-group col-md-5">
        <label for="inputPassword6">Họ Và Tên</label>
        <input type="text" class="form-control" name="hovaten" placeholder=".................." value="{{$edit->hovaten}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-5">
        <label for="inputEmail6">Giới Tính </label>
        <input type="text" class="form-control" name="gioitinh" placeholder=".................." value="{{$edit->gioitinh}}">
      </div>
      <div class="form-group col-md-5">
        <label for="inputPassword6">Ngày Giờ</label>
        <input type="date" class="form-control" name="ngaygio" placeholder=".................." value="{{$edit->ngaygiosinh}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-1"></div>
      <div class="form-group col-md-5">
        <label for="inputEmail6">Quê Quán </label>
        <input type="text" class="form-control" name="quequan" placeholder=".................." value="{{$edit->quequan}}">
      </div>
      <div class="form-group col-md-5">
        <label for="inputPassword6">Nghề Nghiệp</label>
        <input type="text" class="form-control" name="nghenghiep" placeholder=".................." value="{{$edit->nghenghiep}}">
    </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-1"></div>
    <div class="form-group col-md-5">
      <label for="inputAddress2">Địa Chỉ</label>
      <input type="text" class="form-control" name="diachi" placeholder=".................." value="{{$edit->diachi}}">
    </div>
    <div class="form-group col-md-5">
      <label for="inputAddress2">Deleted</label>
      <input type="number" class="form-control" name="deleted" min=0 max=1 placeholder=".................." value="1">
    </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left:114px;"> Lưu </button>
  </div>

  
</form>
@endsection