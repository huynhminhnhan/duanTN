<?php

namespace App\Http\Imports;

use App\chamcong;
use Maatwebsite\Excel\Concerns\ToModel;

class importChamCong implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd ($row);
        return new chamcong([
            //
        ]);
    }
}
