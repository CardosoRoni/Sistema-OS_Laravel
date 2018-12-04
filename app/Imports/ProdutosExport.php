<?php

namespace sistema\Imports;

use sistema\App\\Produto;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdutosExport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produto([
            //
        ]);
    }
}
