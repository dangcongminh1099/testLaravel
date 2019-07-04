<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\model\giangVien;
class sinhVienControll extends Controller
{
    public function displayUrl($id)
    {
        return 'Ban da nhap tren url: '.$id;
    }
    public function tinhToanDiem()
    {
        $numA=Request::get('numa');
        $numB=Request::get('numb');

        return 'Sau khi tinh toan: '.($numA+$numB);
    }
    public function viewFormTinhToan()
    {
        return view('formTinhToan');
    }
    public function capNhatHeSo()
    {
        $giangVien=new giangVien();
        $collection=$giangVien->getGiangVienTangLuong();
        $he_so=(floor(($collection[0]->demThangDiLam)/3)*0.1)+1;
        echo (floor(1/3));
        // dd($giangVien->getGiangVienTangLuong());
    }
}
