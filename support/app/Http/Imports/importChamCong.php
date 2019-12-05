<?php

namespace App\Http\Imports;

use App\chamcong;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class importChamCong implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
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
       
       
        return new chamcong([
           "id_user" => "1",
           "ngay"    => $row['ngay'],
           "gio_vao1" => $row['gio_vao_1'],
           "gio_ra1" => $row['gio_ra_1'],
           "gio_vao2" => $row['gio_vao_2'],
           "gio_ra2"  => $row['gio_ra_2'],
           "ghi_chu"  => $row['ghi_chu']

        ]);
    }
}
