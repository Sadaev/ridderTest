<?php

namespace App\Exports;

use App\Models\Hospital;
use App\Models\LotteryParticipant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class LotteryExport extends DefaultValueBinder implements WithCustomValueBinder, FromCollection, WithMapping, WithHeadings{

    /**
     * @return \Illuminate\Support\Collection
     */

    protected $status;

    function __construct($status = ''){
        $this->status = $status;
    }

    public function collection()
    {
        if($this->status) {
            return LotteryParticipant::where('status', '=', $this->status)->get();
        }
        return LotteryParticipant::all();
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->created_at,
            $row->fio,
            strval($row->phone),
            Hospital::find(intval($row->hospitalId))->name,
            $row->email,
            strval($row->iin),
            $this->statusMap($row->status),
        ];
    }

    private function statusMap($status):string
    {
        $map = [
            'underConsideration' => 'На рассмотрении',
            'rejected' => 'Отклонено',
            'approved' => 'Одобрено',
            'noDataAvailable' => 'Нет данных',
        ];
        return $map[$status];

    }

    public function headings(): array
    {
        return [
            'Номер',
            'Дата создания',
            'ФИО',
            'Телефон',
            'Поликлиника',
            'Почта',
            'ИИН',
            'Статус'
        ];
    }

    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }
};
