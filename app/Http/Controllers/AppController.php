<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AppController extends Controller
{
    public function index()
    {
        return response()->view('welcome', [
            'users' => User::all()
        ]);
    }

    public function exportExcel()
    {
        // download data yang sudah di tangkap di UserExport, lalu berikan nama defaultnya users.xlsx
        return Excel::download(new UserExport(), 'users.xlsx');
    }
}
