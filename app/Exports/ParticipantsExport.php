<?php

namespace App\Exports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParticipantsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function collection()
    {
        return Participant::select('full_name', 'email', 'phone', 'age', 'gender', 'created_at', 'ip_address')->get();
    }

    public function headings(): array
    {
        return [
            'Ad Soyad',
            'E-Posta',
            'Telefon',
            'Yaş',
            'Cinsiyet',
            'Kayıt Tarihi',
            'IP Adresi',
        ];
    }
}
