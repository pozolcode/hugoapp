<?php

namespace App\Exports;

use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DoctorExport implements FromCollection, WithMapping, WithHeadings {
    use Exportable;

    public function headings(): array {
        return [
            'ID',
            'Nombre',
            'Apellido',
            'Correo',
            'Dirección 1', 
            'Dirección 2',
            'Teléfono',
        ];
    }

    public function map($doctor): array {
        return [
            $doctor->id,
            $doctor->user->first_name,
            $doctor->user->last_name,
            $doctor->user->email,
            $doctor->address1,
            $doctor->address2,
            $doctor->phone
        ];
    }

    public function collection() {
        return Doctor::all();
    }
}
