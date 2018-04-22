@extends('layout') @section('title','Danh Sách Thành Viên | Quản Lý Cây Gia Phả') @section('content')
<br>
<br>
<br>
<br>
<h1>Danh Sách Thành Viên</h1>
<!-- Modal -->
</div>
<div class="list">
    <table class="table table-dark">
        <thead>
            <tr>
                <th></th>
                <th scope="col">STT</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Ngày Sinh</th>
                <th scope="col">Đời</th>
                <th scope="col">Cha Mẹ</th>
                <th scope="col"> Xoá | Thay Đổi</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt=1; ?> @foreach($per as $p)
            <tr id="thanhvien-{{$p->id}}">
                <th></th>
                <th style="color:white;" scope="row">{{$stt++}}</th>
                <td style="color:white;">{{$p->hovaten}}</td>
                <td style="color:white;">{{$p->ngaygiosinh}}</td>
                <td style="color:white;">{{$p->id_doi}}</td>
                <td style="color:white;">{{$p->chame}}</td>
                <td style="color:white;">
                    <button type="button" class="btn btn-primary btn-call-modal" data-id="{{$p->id}}"><i class="fa fa-trash fa"></i></button>
                    <button></button>
                    <span class="themtv">
                    <a href=" {{route('thay-doi-thong-tin',$p->id)}} "> <button type="button" class="btn btn-primary"><i class="fa fa-repeat fa"></i></button></a>
                </td>
            </tr>
            @endforeach
</tbody>
</table>
</div>

<div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">{{$per->links()}}</div>
</div>

@endsection
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p>Bạn có chắc chắn xoá <span class="nameObj">...</span> không?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btnAccept">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div id="Message" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p class="your-mess"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<script src="home/js/jquery2.0.3.min.js"></script>
<script>
    $(document).ready(function () {
        var id = ''
        $('.btn-call-modal').click(function () {
            $('#myModal').modal('show')
            id = $(this).attr('data-id')
            var name = $('.name-' + id).text();
            $('.nameObj').html("<b>" + name + "</b>");
            console.log(id)
        })
        $('.btnAccept').click(function () {
            console.log(id)
            if (id != '') {
                $.ajax({
                    url: "{{route('deleted')}}",
                    data: { id, id },
                    type: "GET",
                    success: function (data) {
                        var mess = "";
                        $('#myModal').modal('hide')
                        if ($.trim(data) == 'success') {
                            mess = "Xoá thành công"
                            $('#thanhvien-' + id).hide();
                        }
                        else mess = "Xoá Thành Viên Thành Công "
                        {
                            $('.your-mess').html(mess)
                            $('#Message').modal('show')
                            location.reload()
                        }
                    }
                })
            }
        })
    })

</script>