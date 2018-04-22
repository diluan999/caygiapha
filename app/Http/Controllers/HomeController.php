<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoSoThanhVien;
use App\GhiNhanThanhTic;
use App\GhiNhanKetThuc;
use App\TangGiamThanhVien;
use Validator;
use Hash;
use Auth;

class HomeController extends Controller
{
    function getLayout(){
        return view('layout');
    }
    function getHoSoThanhVien(){ 
        return view('pages.hstv');
    }
    function postHoSoThanhVien(Request $req){
        $person = new HoSoThanhVien;
        $person->id_gd          = $req->id_giadinh;
        $person->id_doi         = $req->id_doi;
        $person->id_thanhtich   = $req->id_thanhtich;
        $person->id_ketthuc     = $req->id_ketthuc;
        $person->thanviencu     = $req->thanviencu;
        $person->loaiquanhe     = $req->loaiquanhe;
        $person->ngayphatsinh   = $req->ngayphatsinh;
        $person->hovaten        = $req->hovaten;
        $person->chame          = $req->chame;
        $person->gioitinh       = $req->gioitinh;
        $person->ngaygiosinh    = $req->ngaygio;
        $person->quequan        = $req->quequan;
        $person->nghenghiep     = $req->nghenghiep;
        $person->diachi         = $req->diachi;
        $person->deleted        = $req->deleted == 1 ? 1 : 0 ;
        $person->save();
        //var_dump($person);
        return redirect()->route('danh-sach-thanh-vien')->with('message','Lưu Thành Công');
    } 
    function getEdit($id){
        $edit = HoSoThanhVien::where('id',$id)->first();
        return view('pages.edit',compact('edit'));
    }
    function postEdit(Request $req){
        $check = [
            'thanviencu'=>'required|max:40',
            'loaiquanhe'=>'required|max:10',
            'hovaten'=>'required|max:40',
            'gioitinh'=>'required|:max10',
            'quequan'=>'required|max:40',
            'nghenghiep'=>'required|max:40',
            'diachi'=>'required|max:40',
        ];
        $mess=[
            'thanviencu.required'=>'Vui lòng nhập tên',
            'thanviencu.max'=>'Tên tối đa 50 ký tự',
            'loaiquanhe.required'=>'Không thể để trống.',
            'loaiquanhe.max'=>'Loại quan hệ không thể hơn 10 ký tự',
            'hovaten.required'=>'Vui lòng nhập tên',
            'hovaten.max'=>'Tên tối đa 50 ký tự',
            'gioitinh.required'=>'Không thể để trống.',
            'gioitinh.max'=>'Tên tối đa 10 ký tự',
            'nghenghiep.required'=>'Vui lòng nhập nghề nghiệp ',
            'nghenghiep.max'=>'Nghề nghiệp tối đa 50 ký tự',
            'diachi.required'=>'Vui lòng nhập địa chỉ',
            'diachi.max'=>'Nghề nghiệp tối đa 50 ký tự',
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()){
            return redirect()
                    ->route('ho-so-thanh-vien')
                    ->withErrors($validator)
                    ->withInput();
        }
        $pers = HoSoThanhVien::where('id',$req->id)->first();
        if($pers){
            $name = $req->hovaten;
            $pers->id_gd          = $req->id_giadinh;
            $pers->id_doi         = $req->id_doi;
            $pers->id_thanhtich   = $req->id_thanhtich;
            $pers->id_ketthuc     = $req->id_ketthuc;
            $pers->thanviencu    = $req->thanviencu;
            $pers->loaiquanhe     = $req->loaiquanhe;
            $pers->ngayphatsinh   = $req->ngayphatsinh;
            $pers->hovaten        = $req->hovaten;
            $pers->gioitinh       = $req->gioitinh;
            $pers->ngaygiosinh    = $req->ngaygio;
            $pers->quequan        = $req->quequan;
            $pers->nghenghiep     = $req->nghenghiep;
            $pers->diachi         = $req->diachi;
            $pers->deleted        = $req->deleted == 1 ? 1 : 0 ;
            //var_dump($pers);
            $pers->save();
        if($pers->id){
            return redirect()->route('danh-sach-thanh-vien',$pers->id_doi)->with('message','Cập Nhật Thành Công');
            }
        }
        return redirect()->back()->with('message','Không tìm thấy thành viên');
    }
    function getGhiNhanThanhTich(){
        return view('pages.gntt');
    }
    function postGhiNhanThanhTich(Request $req){
        $thanhtich =  new GhiNhanThanhTic;
        $thanhtich->id= $req->id;
        $thanhtich->hovaten = $req->hovaten;
        $thanhtich->loaithanhtich = $req->loaithanhtich;
        $thanhtich->ngayphatsinh = $req->ngayphatsinh;
        $thanhtich->soluong = $req->soluong;
        $thanhtich->save();
        return redirect()->route('ghi-nhan-thanh-tich')->with('message',"Ghi Nhận Thành Công");

    }
    function getDanhSachThanhVien(){
        $per = HoSoThanhVien::where('deleted','<>',0)->paginate(10);
        //dd($per);
        return view('pages.dstv',compact('per'));
    }
    function getGhiNhanKetThuc(){
        return view('pages.gnkt');
    }
    function postGhiNhanKetThuc(Request $req){
        $ketthuc = new GhiNhanKetThuc;
        $ketthuc->id = $req->id;
        $ketthuc->hovaten = $req->hovaten;
        $ketthuc->ngaygiomat = $req->ngaygiomat;
        $ketthuc->diadiemmaitang = $req->diadiem;
        $ketthuc->nguyennhan =$req->nguyennhan;
        $ketthuc->save();
        var_dump($ketthuc);
        return redirect()->route('ghi-nhan-ket-thuc')->with('message', 'Ghi Nhận Thành Công');
    }
    function getTangGiamThanhVien(){
        $tang = TangGiamThanhVien::all();
        return view('pages.tgtv',compact('tang'));
    }
    function getThanhTichThanhVien(){
        $thanhtich = GhiNhanThanhTic::all();
        return view('pages.tttv',compact('thanhtich'));
    }
    function getDeleted(Request $req){
        $id = $req->id;
        $perr = HoSoThanhVien::where('id',$id)->first();
        if(!empty($perr)){
            $perr->deleted = 0;//đã xoá
            $perr->save();
            echo "success";
        }
        echo "error";
    }   
    function getSearch(Request $req){
        if($req->key == ""){
            $perrs = HoSoThanhVien::paginate(5);
            return view('pages.search',compact('perrs'));
        }else{
            $perrs = HoSoThanhVien::where('hovaten','LIKE','%'.$req->key.'%')->paginate(5);
            $perrs->appends($req->only('search'));
            return view('pages.search',compact('perrs'));
        }
    }
}
