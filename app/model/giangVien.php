<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;
class giangVien extends Model
{
    public function getGiangVienTangLuong()
    {
        $arr= DB::select("select ma_giang_vien,count(thangNam) as demThangDiLam from (select DISTINCT ma_giang_vien,date_format(ngay,'%Y-%m') as thangNam from cham_cong)a GROUP BY ma_giang_vien  HAVING demThangDiLam>=3");
        return $arr;
    }
}
