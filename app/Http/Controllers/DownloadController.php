<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Doctor;
use App\Exports\DoctorExport;

class DownloadController extends Controller {
    public function doctorDownload() {
        return Excel::download(new DoctorExport, 'Doctors.xlsx');
    }
}
