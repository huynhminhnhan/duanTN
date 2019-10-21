<?php

namespace App\Imports;

use App\chamcong;
use Maatwebsite\Excel\Concerns\ToModel;

class chamCongImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new chamcong([
            //
        ]);
    }
}
