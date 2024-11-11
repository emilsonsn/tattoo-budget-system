<?php

namespace App\Exports;

use App\Models\Orcamento;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrcamentoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Orcamento::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nome',
            'Email',
            'Celular',
            'Instagram',
            'Estado',
            'Cidade',
            'Tipo de Desenho',
            'Local',
            'Largura',
            'Altura',
            'Cicatriz',
            'Remoção',
            'Cores',
            'Valor',
            'Data de criação',
            'Data de atualização'
        ];
    }
}
