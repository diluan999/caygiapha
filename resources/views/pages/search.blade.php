@extends('layout')
@section('title','Tìm Kiếm Thông Tin | Quản Lý Cây Gia Phả')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Tìm thấy {{count($perrs)}} thành viên</h1>
<div class="list">
    <table class="table table-dark">
        <thead>
            <tr>
                <th></th>
                <th scope="col">STT</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Ngày Sinh</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt=1; ?> @foreach($perrs as $p)
            <tr id="thanhvien-{{$p->id}}">
                <th></th>
                <th style="color:white;" scope="row">{{$stt++}}</th>
                <td style="color:white;">{{$p->hovaten}}</td>
                <td style="color:white;">{{$p->ngaygiosinh}}</td>
            </tr>
            @endforeach
</tbody>
</table>
</div>
<div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">{{$perrs->links()}}</div>
</div>

</tbody>
</table>
@endsection