@extends('layout') @section('title','Tăng Giảm Thành Viên | Quản Lý Cây Gia Phả') @section('content')
<br>
<br>
<br>
<br>
<h1>Thành Tích Thành Viên</h1>
    <div class="themtv">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thêm Thành Viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        <h2></h2>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Họ Tên </label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="..................">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Ngày Sinh</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="..................">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Đời  </label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="..................">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Cha Mẹ</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="..................">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Loại Thành Tích</th>
                    <th scope="col">Số Lượng</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt=1?>
                @foreach($thanhtich as $t)
                <tr>
                    <th scope="row" style="color:white">{{$stt++}}</th>
                    <td scope="row" style="color:white">{{$t->hovaten}}</td>
                    <td scope="row" style="color:white">{{$t->loaithanhtich}} </td>
                    <td scope="row" style="color:white">{{$t->soluong}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form>
            {{-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Từ Năm </label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="..................">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Đến Năm</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="..................">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> --}}
@endsection