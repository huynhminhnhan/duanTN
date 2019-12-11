<?php

namespace App\Http\Imports;

use App\Chamcong;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\User;
class importChamCong implements ToCollection,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $msg;
    public function collection(Collection $rows)
    {
       
        $array_rows = $rows->toArray();
        $count_err = 0;
        $count_success = 0;
        $arr_erro_name = array();
        foreach ($array_rows as $key=> $row) 
        {
            $arrTime = [$row['gio_vao_1'],$row['gio_ra_1'],$row['gio_vao_2'],$row['gio_ra_2']];
            $arrFormatTime = array_map(function($value){
            $formatTime = Date::excelToDateTimeObject($value);
            $format =  $formatTime->format('H:i:s');
            return $format ;
            },$arrTime);
        $row['gio_vao_1'] = $arrFormatTime[0];
        $row['gio_ra_1'] = $arrFormatTime[1];
        $row['gio_vao_2'] = $arrFormatTime[2];
        $row['gio_ra_2'] = $arrFormatTime[3];
        $user = User::find($row['id_user']); 
        if(empty($user)) {
            $count_err ++;
            array_push($arr_erro_name,$row['ho_va_ten']);
            unset($row[$key]);
            continue;
        }

        Chamcong::create([
            'id_user' => $row['id_user'],
            'ngay' => $row['ngay'],
            'gio_vao1' => $row['gio_vao_1'],
            'gio_ra1' => $row['gio_ra_1'],
            'gio_vao2' => $row['gio_vao_2'],
            'gio_ra2' => $row['gio_ra_2'],
            'ghi_chu' => $row['ghi_chu'],
            
            
        ]);
        $count_success ++;
         }
         $arr_msg = array(
             "error" => $count_err,
             "name_err" => $arr_erro_name,
             "success" => $count_success
         );
         $this->msg = $arr_msg;
        
        //  return $arr_msg;

    }
}
