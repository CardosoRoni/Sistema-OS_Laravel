<?php

namespace sistema\Exports;

use sistema\App\\Produto;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProdutosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produto::all();
    }
}
